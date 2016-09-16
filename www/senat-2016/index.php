<?php
/**
* VAA
* reads questions from json
*/
session_start();

//include ("cache.php");

$relative_path = "";

include("common.php");

//read questions
#$qfile = 'questions_' . $lang . '.json';
$qfile = $relative_path . 'questions.json';
$questions = json_decode(file_get_contents($qfile));

//get prefilled user's values, if exist
$user = json_encode(get_user_values());

if (isset($_GET['cc'])) {
    $cc = $_GET['cc'];
} else {
    $cc = "1";
}
$smarty->assign('cc',$cc);

//prepare candidates - filter only constituency
$afile = $relative_path . 'answers.json';
$answers = json_decode(file_get_contents($afile));
$nfile = $relative_path . 'noreply.json';
$noreplies = json_decode(file_get_contents($nfile));
$candidates = filter_candidates(array_merge((array) $answers, (array) $noreplies), $cc);
$smarty->assign('candidates',$candidates);
//print_r($candidates);die();

//AB registration
$abreg = mt_rand(0,2);
$smarty->assign('abreg', $abreg);


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
                'party' => $answer->party,
                'party_abbreviation' => $answer->party_abbreviation
            ];
        }
    }
    foreach ($out as $key => $row) {
        $sort[$key]  = $row['name'];
    }
    array_multisort($sort, SORT_ASC, $out);
    return $out;
}

?>
