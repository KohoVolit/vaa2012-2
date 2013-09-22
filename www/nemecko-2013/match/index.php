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
include("../texts.php");

//extract user values
$user = get_user_values();

//read parties = candidates
$candidates = json_decode(file_get_contents($parties_file));


//partner
/*if (isset($_GET['partner'])) {
	switch ($_GET['partner']) {
	  case 'ihned': 
		$partner = array('name'=>'ihned','swatch_bar' => 'g', 'swatch_question_body' => 'd', 'swatch_progressbar' => 'a');
		break;
	  case 'denik':
		$partner = array('name'=>'denik','swatch_bar' => 'h', 'swatch_question_body' => 'd', 'swatch_progressbar' => 'a');
		break;
	  case 'idnes':
		$partner = array('name'=>'idnes','swatch_bar' => 'i', 'swatch_question_body' => 'd', 'swatch_progressbar' => 'a');
		break;
	  default:
		$partner = array('name'=>'default','swatch_bar' => 'f', 'swatch_question_body' => 'e', 'swatch_progressbar' => 'e');
	} 
} else */$partner = array('name'=>'default','swatch_bar' => 'g', 'swatch_question_body' => 'd', 'swatch_progressbar' => 'a');

//calculate match, for selected CC only
//$start = microtime(true);
$results = calc_match($user,$candidates);
//$time_taken = microtime(true) - $start;
//echo $time_taken;die();


//this page
$url = 'http://' . $_SERVER['HTTP_HOST'] . '/' . $_SERVER['REQUEST_URI'] ;

//winner color
$winner_color[0] = party2color($results[0]['party']);
$winner_color[1] = party2color($results[1]['party']);
$winner_color[2] = party2color($results[2]['party']);

$smarty->assign('text', $text);
$smarty->assign('partner', $partner);
$smarty->assign('winner_color', $winner_color);
$smarty->assign('query_string', $_SERVER['QUERY_STRING']);
$smarty->assign('results', $results);
$smarty->assign('url',$url);
$smarty->display('de2013-match.tpl');

//save results

$str = session_id() . "\t" . "germany" . "\t" . date("Y-m-d H:i:s") . "\t" . $_SERVER['QUERY_STRING'] .  "\t" . $_SERVER['REMOTE_ADDR'] . "\n";
$file = fopen('../../result.txt','a');
fwrite($file,$str);
fclose($file);



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
	'Roithová'=>"FFCC00",
	'Sobotka'=>"023484",
	'Zeman'=>'D42D20',
	'Schwarzenberg'=>'673B6C',
	'Dienstbier' => "F18811",
  );

	if (isset($party_color[$short_name])) return $party_color[$short_name];
	else return '808080';

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
      //'name' => $s->first_name . ' ' . $s->last_name,
  	  //'first_name' => $s->first_name,
  	  //'last_name' => $s->last_name,
  	  'party' => $s->party,
  	  'friendly_name' => $s->friendly_name,
  	  'result' => (1+$sum/$count)/2,
  	  'result_percent' => round((100+100*$sum/$count)/2),
  	  'id' => $s->id,
  	  'random' => rand(0,1000000),
  	  //'sex' => $s->sex,
  	  //'region' => $s->region,
  	  'party_long' => $s->party_long,
    );
  }
  //sort by result
  foreach ($results as $key => $row) {
    $result[$key]  = $row['result'];
    $random[$key] = $row['random'];
  }
  array_multisort($result, SORT_DESC, $random, SORT_ASC, $results);
  
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
