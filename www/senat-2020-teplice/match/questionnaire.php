<?php
$arr = [
    date("Y-m-d H:i:s"),
    $_GET['vkid'],
    $_GET['position'],
    $_GET['local'],
    $_GET['participation'],
    $_GET['candidates'],
    $_GET['place'],
    $_SERVER['REMOTE_ADDR']
];
$file = fopen('questionnaire.csv','a');
fputcsv($file,$arr);
fclose($file);
 ?>
