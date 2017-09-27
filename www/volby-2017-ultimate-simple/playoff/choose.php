<?php
/**
* VAA
*
*/
session_start();

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

//prepare candidates - filter only constituency
$afile = $relative_path . 'answers_' . $cc .'.json';
$answers = json_decode(file_get_contents($afile));
$nfile = $relative_path . 'noreply_' . $cc .'.json';
$noreplies = json_decode(file_get_contents($nfile));
$candidates = filter_candidates(array_merge((array) $answers, (array) $noreplies), $cc);

$smarty->assign('candidates',$candidates);

$smarty->assignByRef('questions', $questions);
$smarty->display('playoff-choose.tpl');


function filter_candidates($answers, $cc) {
    $out = [];
    foreach ($answers as $answer) {
        if ($answer->constituency == $cc) {
            if (isset($answer->votes)) {
                $answered = TRUE;
            } else {
                $answered = FALSE;
            }
            $out[] = [
                'id' => $answer->id,
                'name' => $answer->name,
                'abbreviation' => $answer->abbreviation,
                'answered' => $answered
            ];
        }
    }
    foreach ($out as $key => $row) {
        $sort[$key]  = $row['abbreviation'];
    }
    array_multisort($sort, SORT_ASC, $out);
    return $out;
}
