<?php

session_start();

// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('../../../smarty/templates');
$smarty->setCompileDir('../../../smarty/templates_c');
$smarty->setCacheDir('../../../smarty/cache');
$smarty->setConfigDir('../../../smarty/configs');

$parties_file = '../answers_2.json';
$rfile = '../region.json';

//extract user values
$user = get_user_values();

//read parties = candidates
$candidates = json_decode(file_get_contents($parties_file));

//read regional info
if (isset($_GET['constituency_code'])) $cc=$_GET['constituency_code'];
else $cc=8;
$region = code2constituency($cc);

//partner
if (isset($_GET['partner'])) {
	switch ($_GET['partner']) {
	  case 'ihned': 
		$partner = array('name'=>'ihned','swatch_bar' => 'g', 'swatch_question_body' => 'd', 'swatch_progressbar' => 'a');
		break;
	  case 'denik':
		$partner = array('name'=>'denik','swatch_bar' => 'h', 'swatch_question_body' => 'd', 'swatch_progressbar' => 'a');
		break;
	  default:
		$partner = array('name'=>'default','swatch_bar' => 'f', 'swatch_question_body' => 'e', 'swatch_progressbar' => 'e');
	} 
} else $partner = array('name'=>'default','swatch_bar' => 'f', 'swatch_question_body' => 'e', 'swatch_progressbar' => 'e');

//calculate match, for selected CC only
$selected_candidates = array();
foreach ($candidates as $c) {
  if ($c->constituency_code == $cc)
    $selected_candidates[] = $c;
}
$results = calc_match($user,$selected_candidates);

//create additional link for comparison
$additional_string = create_additional_string($results);

//create twitter and facebook text (in case there are less than 3 parties, using foreach
$twitter_text = 'Nejvíc se pro 2.kolo Senátu shodnu s ';
$facebook_text = 'VolebníKalkulačka.cz pro Senát 2.kolo - obvod '.$region.', moje shoda: ';
$i = 0;
foreach ($results as $r) {
  $twitter_text .= $r['last_name'] . ' ' . $r['result_percent'] . '%';
  $facebook_text .= $r['last_name'] . ' (' . $r['result_percent'] . '%)';
  $i++;
  if ($i == 3) break;
  $twitter_text .= ',';
  $facebook_text .= ',';
}
$r = end($results);
$twitter_text .= ',nejmíň s ' . $r['last_name'] . ' ' . $r['result_percent'] . '%';
$facebook_text .= ' ... nejméně ' . $r['last_name'] . ' (' . $r['result_percent'] . '%)';

//create chart link
//print_r($results);die();
$image = create_chart_link($results);

//this page
$url = 'http://' . $_SERVER['HTTP_HOST'] . '/' . $_SERVER['REQUEST_URI'] . '&' . $additional_string;

//winner color
$winner_color = party2color($results[0]['party']);

$smarty->assign('partner', $partner);
$smarty->assign('winner_color', $winner_color);
$smarty->assign('constituency_code', $cc);
$smarty->assign('image', $image);
$smarty->assign('twitter_text', $twitter_text);
$smarty->assign('facebook_text', urlencode($facebook_text));
$smarty->assign('query_string', $_SERVER['QUERY_STRING'] . '&' . $additional_string);
$smarty->assign('results', $results);
$smarty->assign('region',$region);
$smarty->assign('url',$url);
$smarty->display('match-senate-2.tpl');

//save results

$str = session_id() . "\t" . $region . "\t" . date("Y-m-d H:i:s") . "\t" . $_SERVER['QUERY_STRING'] .  "\t" . $additional_string . "\n";
$file = fopen('../../result.txt','a');
fwrite($file,$str);
fclose($file);

/**
* creates chart link
*/
function create_chart_link($results) {
  foreach ($results as $r) {
    $number_ar[] = $r['result_percent'];
    $color_ar[] = party2color($r['party']);
  }
  foreach (array_reverse($results) as $r) {
      $name_ar[] = urlencode($r['last_name']);
  }
  
  $height = round(43 + count($results)*16);
  
    $url = "http://chart.apis.google.com/chart?cht=bhs&" .
    	'chd=t:' . implode(',',$number_ar) . '&' .
    	'chs=400x' . $height . '&' .
    	'chco=' . implode('|',$color_ar) . '&' .
		'chds=-100,100&chf=c,ls,0,FFD0D0,0.2,FFE0E0,0.2,FFFFFF,0.2,E0FFE0,0.2,D0FFD0,0.2&chxt=x,y,t&chg=50,100&chbh=12,4&chxl=0:|-100%25|-60%25|-20%25|20%25|60%25|100%25|' .
		'1:|' . implode('|',$name_ar) . '|2:||Neshoda||Shoda|';
  
  return array('url'=>$url,'height'=>$height,'width'=>400);
     
}

/**
*
*/
function code2constituency($code) {
  $constit = array(
	'2'=>'Sokolov',
	'5'=>'Chomutov',
	'8'=>'Rokycany',
	'11'=>'Domažlice',
	'14'=>'České Budějovice',
	'17'=>'Praha 12',
	'20'=>'Praha 4',
	'23'=>'Praha 8',
	'26'=>'Praha 2',
	'29'=>'Litoměřice',
	'32'=>'Teplice',
	'35'=>'Jablonec nad Nisou',
	'38'=>'Mladá Boleslav',
	'41'=>'Benešov',
	'44'=>'Chrudim',
	'47'=>'Náchod',
	'50'=>'Svitavy',
	'53'=>'Třebíč',
	'56'=>'Břeclav',
	'59'=>'Brno-město',
	'62'=>'Prostějov',
	'65'=>'Šumperk ',
	'68'=>'Opava',
	'71'=>'Ostrava-město',
	'74'=>'Karviná',
	'77'=>'Vsetín',
	'80'=>'Zlín'
	);
  if (isset($constit[$code])) return $constit[$code];
  else return 'Rokycany';
}

/**
* party 2 color
*/
function party2color($short_name) {
  $party_color = array(
    "ODS"=>"023484",
    "ČSSD"=>"F18811",
    "DSSS"=>"611414",
    "TOP 09"=>"673B6C",
    "Zelení"=>"008000",
    "SZ"=>"008000",
    "ČPS"=>"000000",
    "Piráti"=>"000000",
    "KSČM"=>"E01C07",
    "KDU-ČSL"=>"8D38C9",
    "NS-LEV21"=> 'EB2727',
    "PB" => 'E5F3E8',
    "SN" => '888888',
    "SNK-ED" => 'f5c600',
    "SPOZ" => 'D42D20',
    'Suverenita-BJB' => 'FFFF66',
	'Suverenita-BJB-ZOK' =>'FFFF66',
	'Suverenita-SDŽ' =>'FFFF66',
	'Suverenita-SZR' =>'FFFF66',
	'Suveren.' =>'FFFF66',
	'Svobodní' => '005842',
	'TOP 09-SOK' => "673B6C",
	'VV' => "009FD7",
	'Koalice KK'=>"8D38C9",
	'Koalice OLK'=>"8D38C9",
	'Koalice PK'=>"8D38C9",
	'KČ'=>'fb900a',
	'Moravané'=>'960000',
  );

	if (isset($party_color[$short_name])) return $party_color[$short_name];
	else return '808080';

}

/**
* creates additional string with order of parties
*/
function create_additional_string($results) {
  $out = 'order=';
  foreach ($results as $row) {
    $out .= $row['id'] . '|' . $row['result_percent'] . ',';
  }
  return rtrim($out,',');
}

/**
* calculates results for one set
*/
function calc_match($user,$set,$extra=2) {
  $results = array();
  foreach ($set as $s) {
    $sum = 0;
    $count = 0;
    if (isset($user['vote']) and count($user['vote']) > 0) {
      foreach($user['vote'] as $key => $uv) {
        //weight
        if (isset($user['weight'][$key])) $w = $extra;
        else $w = 1;
        //existing divisions only:
        if ((property_exists($s,'vote')) and (property_exists($s->vote,$key))) {
          $sum = $sum + $w*$s->vote->$key*sign($uv);
          $count = $count + $w;
        }
      }
    }
    if ($count == 0) $count = 1; // to allow match = 0/1 = 0;
    $results[] = array(
      'name' => $s->last_name . ' ' . $s->first_name,
  	  'first_name' => $s->first_name,
  	  'last_name' => $s->last_name,
  	  'party' => $s->party,
  	  'friendly_name' => $s->friendly_name,
  	  'result' => $sum/$count,
  	  'result_percent' => round(100*$sum/$count),
  	  'id' => $s->id
    );
  }
  //sort by result
  foreach ($results as $key => $row) {
    $result[$key]  = $row['result'];
  }
  array_multisort($result, SORT_DESC, $results);
  
  return $results;
}


/**
* extracts user's answers
*/
function get_user_values() {
  $user = array();
  if (count($_GET) > 0) {
    foreach ($_GET as $key => $param) {
      //votes
      if (substr($key,0,2) == 'q-') 
        {if ($param != 0)
          $user['vote'][substr($key,2)] = $param;}
      else if (substr($key,0,2) == 'c-')
        $user['weight'][substr($key,2)] = true;

    }
  } else
    return false;
  
  return $user;

}

/**
* sign function
*/
function sign( $number ) {
    return ( $number > 0 ) ? 1 : ( ( $number < 0 ) ? -1 : 0 );
} 

?>
