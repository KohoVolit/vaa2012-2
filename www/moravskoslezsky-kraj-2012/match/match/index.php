<?php

session_start();

// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('../../../smarty/templates');
$smarty->setCompileDir('../../../smarty/templates_c');
$smarty->setCacheDir('../../../smarty/cache');
$smarty->setConfigDir('../../../smarty/configs');

$parties_file = '../answers.json';
$rfile = '../region.json';

//extract user values
$user = get_user_values();

//read parties
$parties = json_decode(file_get_contents($parties_file));

//read regional info
$region = json_decode(file_get_contents($rfile));

//calculate match
$results = calc_match($user,$parties);

//create additional link for comparison
$additional_string = create_additional_string($results);

//create twitter and facebook text (in case there are less than 3 parties, using foreach
$twitter_text = 'Nejvíc se ' . $region->inflection_short . ' shodnu s ';
$facebook_text = 'VolebníKalkulačka.cz '.$region->inflection.', moje shoda: ';
$i = 0;
foreach ($results as $r) {
  $twitter_text .= $r['short_name'] . ' ' . $r['result_percent'] . '%';
  $facebook_text .= $r['short_name'] . ' (' . $r['result_percent'] . '%)';
  $i++;
  if ($i == 3) break;
  $twitter_text .= ',';
  $facebook_text .= ',';
}
$r = end($results);
$twitter_text .= ',nejmíň s ' . $r['short_name'] . ' ' . $r['result_percent'] . '%';
$facebook_text .= ' ... nejméně ' . $r['short_name'] . ' (' . $r['result_percent'] . '%)';

//create chart link
//print_r($results);die();
$image = create_chart_link($results);

//this page
$url = 'http://' . $_SERVER['HTTP_HOST'] . '/' . $_SERVER['REQUEST_URI'] . '&' . $additional_string;

//winner color
$winner_color = party2color($resuls[0]->short_name);

$smarty->assign('image', $image);
$smarty->assign('winner_color', $winner_color);
$smarty->assign('twitter_text', $twitter_text);
$smarty->assign('facebook_text', urlencode($facebook_text));
$smarty->assign('query_string', $_SERVER['QUERY_STRING'] . '&' . $additional_string);
$smarty->assign('results', $results);
$smarty->assign('region',$region);
$smarty->assign('url',$url);
$smarty->display('match.tpl');

//save results

$str = session_id() . "\t" . $region->code . "\t" . date("Y-m-d H:i:s") . "\t" . $_SERVER['QUERY_STRING'] .  "\t" . $additional_string . "\n";
$file = fopen('../../result.txt','a');
fwrite($file,$str);
fclose($file);

/**
* creates chart link
*/
function create_chart_link($results) {
  foreach ($results as $r) {
    $number_ar[] = $r['result_percent'];
    $color_ar[] = party2color($r['short_name']);
  }
  foreach (array_reverse($results) as $r) {
      $name_ar[] = urlencode($r['short_name']);
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
* party 2 color
*/
function party2color($short_name) {
  $party_color = array(
    "ODS"=>"023484",
    "ČSSD"=>"F18811",
    "DSSS"=>"611414",
    "TOP 09"=>"673B6C",
    "Zelení"=>"008000",
    "ČPS"=>"000000",
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
    if (count($user['vote']) > 0) {
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
      'name' => $s->name,
  	  'short_name' => $s->short_name,
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
        if ($param != 0)
          $user['vote'][substr($key,2)] = $param;
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
