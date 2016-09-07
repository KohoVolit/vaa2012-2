<?php

/**
* Updates data
* Note: directory backend MUST be writable by the web server (www-data)
*/


$ar = explode('/',$_SERVER['SCRIPT_FILENAME']);
array_pop($ar);
$app_path = implode('/',$ar) . '/';

$tmp = exec("python3 " . $app_path . "answers.py",$output,$status);

print_r($output);
print_r($status);
$output = [];
$status = -10;

$tmp = exec("python3 " . $app_path . "questions.py",$output,$status);

#echo "python3 " . $app_path . "answers.py";

print_r($output);
print_r($status);

?>
