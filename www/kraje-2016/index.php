<?php
/**
* VAA
* reads questions from json
*/
session_start();

//include ("cache.php");

$relative_path = "";

include("common.php");

if (isset($_GET['cc']) and in_array($_GET['cc'],$ccs)) {
    $cc = $_GET['cc'];
} else {
    $cc = "st"; //default
}
$smarty->assign('cc',$cc);
$settings->background_image = "image/background/" . $cc .".jpg";

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
// print_r($candidates);die();

//AB registration
$abregtext = mt_rand(0,1);
$smarty->assign('abregtext', $abregtext);


$smarty->assign('user', $user);
$smarty->assignByRef('questions', $questions);
$smarty->display('page.tpl');


function filter_candidates($answers, $cc) {
    $out = [];
    foreach ($answers as $answer) {
        if ($answer->constituency == $cc) {
            $out[] = [
                'id' => $answer->id,
                'name' => $answer->name,
                'abbreviation' => $answer->abbreviation
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
