<?php
/**
* shows table with all questions and answers
*/

session_start();

$relative_path = "../";

//include($relative_path . "cache.php");

include($relative_path . "common.php");

$afile = $relative_path . 'answers.json';
$answers = json_decode(file_get_contents($afile));
$qfile = $relative_path . 'questions_all.json';
$questions = json_decode(file_get_contents($qfile));
$dfile = $relative_path . 'details.json';
$details = json_decode(file_get_contents($dfile));


$smarty->assign('voters',$answers);
$smarty->assignByRef('questions', $questions);
$smarty->assignByRef('details', $details);
$smarty->display('table.tpl');
?>
