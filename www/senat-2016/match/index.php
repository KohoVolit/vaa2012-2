<?php
/**
* VAA
* calculate match
*/

session_start();

$relative_path = "../";

include($relative_path . "common.php");

//answers of voters
$qfile = $relative_path . 'answers.json';
$answers = json_decode(file_get_contents($qfile));

$user = get_user_values();

//calculate match
if (isset($_GET['cc'])) {
    $cc = $_GET['cc'];
} else {
    $cc = "1";
}
$results = calc_match($user,$answers,2,$cc);
$smarty->assign('cc',$cc);

//who (selected)
if (isset($_GET['who'])) {
    $who = $_GET['who'];
} else {
    $who = [];
}
$smarty->assign('who',$who);

//noreplies
$nrfile = $relative_path . 'noreply.json';
$allnoreplies = json_decode(file_get_contents($nrfile));
$nrlist = noreplies($allnoreplies,$cc);
$smarty->assign('noreplies', $nrlist);

//encode user, answers and qcoefs for direct print into file
$user_json = json_encode($user);
$answers_json = json_encode($answers);

// API call
if (isset($_GET['format']) and ($_GET['format'] == 'json')) {
    header('Cache-Control: no-cache, must-revalidate');
    header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
    header('Content-type: application/json');
    echo json_encode($results);
    save_results($relative_path);
    exit();
}

$random1 = mt_rand(0,1);
$_GET['cro-position'] = $random1;
// $random2 = mt_rand(0,1);
// $_GET['ab-wording'] = $random2;
// $random3 = mt_rand(0,1);
// $_GET['ab-wording2'] = $random3;
if ($random1 == 1)
    $smarty->assign('cro_position', true);
else
    $smarty->assign('cro_position', false);
//also in match-js.tpl !!

// if ($random2 == 1)
//     $smarty->assign('ab_wording', true);
// else
//     $smarty->assign('ab_wording', false);
// if ($random3 == 1)
//     $smarty->assign('ab_wording2', true);
// else
//     $smarty->assign('ab_wording2', false);

//this page

$url = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'] ;

$smarty->assign('query_string', $_SERVER['QUERY_STRING']);
$smarty->assign('results', $results);
$smarty->assign('url',$url);
$smarty->assign('user',$user_json);
$smarty->assign('answers_json',$answers_json);
$smarty->display('match.tpl');

//save results
save_results($relative_path);

function save_results($relative_path) {
    if(!isset($_COOKIE['vkid'])) {
        $vkid = session_id();
        setcookie('vkid', $vkid, time() + (60 * 60 * 24 * 365 * 15), "/");
    } else {
        $vkid = $_COOKIE['vkid'];
    }

    $arr = [
        date("Y-m-d H:i:s"),
        $vkid,
        session_id(),
        json_encode($_GET),
        $_SERVER['REMOTE_ADDR']
    ];
    $file = fopen($relative_path . 'result.csv','a');
    fputcsv($file,$arr);
    fclose($file);
}




/**
* calculates results for one set
*/
function calc_match($user,$set,$extra=2,$cc="1") {
  $results = array();
  foreach ($set as $s) {
    if ($s->constituency == $cc) {
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

/**
* extract noreplies
*/
function noreplies($allnr, $cc) {
    $out = [];
    foreach($allnr as $row) {
        if ($row->constituency == $cc) {
            $out[] = $row;
        }
    }
    return $out;
}

?>
