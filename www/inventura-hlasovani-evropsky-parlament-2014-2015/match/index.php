<?php
/**
* VAA
* calculate match
*/
session_start();

$relative_path = "../";

include("../common.php");

//answers of voters
$qfile = $relative_path . 'answers_' . $cc . '.json';
$answers = json_decode(file_get_contents($qfile));

$user = get_user_values();

//calculate match, for selected CC only
$results = calc_match($user,$answers);

//encode user, answers and qcoefs for direct print into file
$user_json = json_encode($user);
$answers_json = json_encode($answers);

//this page
$url = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ;

$smarty->assign('t', $t);
$smarty->assign('query_string', $_SERVER['QUERY_STRING']);
$smarty->assign('results', $results);
$smarty->assign('url',$url);
$smarty->assign('user',$user_json);
$smarty->assign('answers_json',$answers_json);
$smarty->display('match.tpl');

//save results

$str = session_id() . "\t" . $settings->election_code . "\t" . date("Y-m-d H:i:s") . "\t" . json_encode($_GET) .  "\t" . $_SERVER['REMOTE_ADDR'] . "\n";
$file = fopen('../result.txt','a');
fwrite($file,$str);
fclose($file);


/**
* calculates results for one set
*/
function calc_match($user,$set,$extra=2) {
  $results = array();
  foreach ($set as $s) {
    $sum = 0;
    $count = 0;
    if (isset($user['votes']) and count($user['votes']) > 0) {
      foreach($user['votes'] as $key => $uv) {
        //weight
        if (isset($user['weight'][$key])) $w = $extra;
        else $w = 1;
        //existing divisions only:
        if ((property_exists($s,'votes')) and (property_exists($s->votes,$key))) {
          $sum = $sum + $w*$s->votes->$key*sign($uv);
          $count = $count + $w;
        }
      }
    }
    if ($count == 0) $count = 1; // to allow match = 0/1 = 0;
    //read what data should go to result
    $res = array();
    foreach ($s as $key=>$item) {
      $res[$key] = $s->$key;
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
