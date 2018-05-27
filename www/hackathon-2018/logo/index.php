<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET');
header("Access-Control-Allow-Headers: X-Requested-With");
header('Cache-Control: no-cache, must-revalidate');
header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
header('Content-type: image/png');

$showimage = $_GET['p'];
// if (not(strpos($showimage, '..') or strpos($showimage, '/')))
    readfile($showimage);

?>
