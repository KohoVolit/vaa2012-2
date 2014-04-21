<?php
/**
* VAA
* calculate match
*/
include("../../setup.php");
include("../texts.php");
include("../common.php");
include("../config.php");

// put full path to Smarty.class.php
require('/usr/local/lib/php/Smarty/libs/Smarty.class.php');
$smarty = new Smarty();

$smarty->setTemplateDir('../../../smarty/templates/' . $text['election_code']);
$smarty->setCompileDir('../../../smarty/templates_c');

//answers of voters
$answers = json_decode(file_get_contents('../answers.json'));
//missing voters
$missing = json_decode(file_get_contents('../noreply.json'));
//extract user values
$user = get_user_values();

//calculate match, for selected CC only
$results = calc_match($user,$answers,$config);

//encode user, answers and qcoefs for direct print into file
$user_json = json_encode($user);
$answers_json = json_encode($answers);
$qcoefs_json = file_get_contents('../qcoefs.json');

//this page
$url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ;

//partners
if (isset($_GET['partner'])) {
  $partner = sanitize($_GET['partner']);
} else {
  $partner = 'default';
}
if (file_exists('../css/'.$partner.'.css')) $partnercss = '../css/'.$partner.'.css';

//custom background and header color:
if (isset($_GET['background'])) {
  $background = 'http://' . str_replace('_','/',sanitize($_GET['background']));
  $background_orig = sanitize($_GET['background']);
} else {
  $background = false;
  $background_orig = false;
}

if (isset($_GET['navbar'])) {
  $navbar = '#' . sanitize($_GET['navbar']);
} else {
  $navbar = false;
}

$smarty->assign('missing', $missing);
$smarty->assign('text', $text);
$smarty->assign('partnercss', $partnercss);
$smarty->assign('background',$background);
$smarty->assign('background_orig',$background_orig);
$smarty->assign('navbar',$navbar);
$smarty->assign('query_string', $_SERVER['QUERY_STRING']);
$smarty->assign('results', $results);
$smarty->assign('url',$url);
$smarty->assign('config',$config);
$smarty->assign('user',$user_json);
$smarty->assign('answers_json',$answers_json);
$smarty->assign('qcoefs_json',$qcoefs_json);
$smarty->display('match.tpl');

//save results

$str = session_id() . "\t" . "inventory2014ep" . "\t" . date("Y-m-d H:i:s") . "\t" . $_SERVER['QUERY_STRING'] .  "\t" . $_SERVER['REMOTE_ADDR'] . "\n";
$file = fopen('../../result.txt','a');
fwrite($file,$str);
fclose($file);


/**
* calculates results for one set
*/
function calc_match($user,$set,$config,$extra=2) {
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
    //read what data should go to result
    $res = array();
    foreach ($config->result as $item) {
      $res[$item] = $s->$item;
    }
    //common results for any calc
    $res['result'] = (1+$sum/$count)/2;
    $res['result_percent'] = round((100+100*$sum/$count)/2);
    $res['id'] = $s->id;
    $res['random'] = rand(0,1000000);
    $results[] = $res;
    
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
* sign function
*/
function sign( $number ) {
    return ( $number > 0 ) ? 1 : ( ( $number < 0 ) ? -1 : 0 );
} 

?>
