<?php
/**
* VAA
* reads questions from json
*/
session_start();

//include ("cache.php");

$relative_path = "../";

include($relative_path . "common.php");

if (isset($_GET['cc']) and in_array($_GET['cc'],$ccs)) {
    $cc = $_GET['cc'];
} else {
    $cc = "st"; //default
}
$smarty->assign('cc',$cc);
$settings->background_image = $setting->cdn_domain . "image/background/" . $cc .".jpg";

//read questions
#$qfile = 'questions_' . $lang . '.json';
$qfile = $relative_path . 'questions_' . $cc .'.json';
$questions = json_decode(file_get_contents($qfile));

//get prefilled user's values, if exist
$user = json_encode(get_user_values());

//prepare candidates - filter only constituency
$afile = $relative_path . 'answers_' . $cc .'.json';
$answers = json_decode(file_get_contents($afile));
$nfile = $relative_path . 'noreply_' . $cc .'.json';
$noreplies = json_decode(file_get_contents($nfile));
$candidates = filter_candidates(array_merge((array) $answers, (array) $noreplies), $cc);
$smarty->assign('candidates',$candidates);

//filter questions
if (isset($_GET['who'])) {
    $questions = filter_questions($_GET['who'], $questions, $answers);
    $who = $_GET['who'];
} else {
    $who = [];
}
$smarty->assign('who', $who);
//print_r($questions);

//AB registration
// $abregtext = mt_rand(0,1);
// $smarty->assign('abregtext', $abregtext);


$smarty->assign('user', $user);
$smarty->assignByRef('questions', $questions);
$smarty->display('playoff-page.tpl');

function filter_questions($who, $questions, $answers) {
    // print_r($questions);
    // print_r($answers);
    $out = new StdClass();
    foreach ($questions as $question) {
        $s = 0;
        $m = 0;
        $qid = $question->id;
        foreach ($who as $w) {
            if (isset($answers->$w) and isset($answers->$w->votes)) {
                $s = $s + $answers->$w->votes->$qid;
                $m = $m + 1;
            }
        }
        //echo "id:" . $qid . ";m:" .$m . ";s:" . $s . "<br>";
        if (($m != abs($s)) or ($m <= 1)) {
            $out->$qid = $question;
        }
    }
    return $out;
}

function filter_candidates($answers, $cc) {
    $out = [];
    foreach ($answers as $answer) {
        if ($answer->constituency == $cc) {
            if (isset($answer->votes)) {
                $votes = $answer->votes;
            } else {
                $votes = false;
            }
            $out[] = [
                'id' => $answer->id,
                'name' => $answer->name,
                'abbreviation' => $answer->abbreviation,
                'votes' => $votes
            ];
        }
    }
    foreach ($out as $key => $row) {
        $sort[$key]  = $row['abbreviation'];
    }
    array_multisort($sort, SORT_ASC, $out);
    return $out;
}

?>
