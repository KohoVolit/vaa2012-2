<?php
session_start();

$file = fopen('position.csv','a');

$data = [
    session_id(),
    date("Y-m-d H:i:s"),
    json_encode($_REQUEST),
];
fputcsv($file, $data);
fclose($file);

?>
