<?php
session_start();

$file = fopen('position.csv','a');

$arr = [
    date("Y-m-d H:i:s"),
    session_id(),
    json_encode($_REQUEST)
];
print_r($arr);
fputcsv($file, $arr);
fclose($file);

?>
