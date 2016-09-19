<?php
/**
* shows table with all questions and answers
*/

session_start();

$relative_path = "../";

//include($relative_path . "cache.php");

include($relative_path . "common.php");

if (isset($_GET['cc']) and in_array($_GET['cc'],$ccs)) {
    $cc = $_GET['cc'];
} else {
    $cc = "st"; //default
}
$smarty->assign('cc',$cc);

$afile = $relative_path . 'answers_' . $cc .'.json';
$answers = json_decode(file_get_contents($afile));
$qfile = $relative_path . 'questions_all_' . $cc .'.json';
$questions = json_decode(file_get_contents($qfile));
$dfile = $relative_path . 'details_' . $cc .'.json';
$details = json_decode(file_get_contents($dfile));


$smarty->assign('voters',$answers);
$smarty->assignByRef('questions', $questions);
$smarty->assignByRef('details', $details);
$smarty->display('table.tpl');
?>
