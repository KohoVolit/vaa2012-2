<?php
session_start();

$version = "v0.1";

print_r($_COOKIE);
print_r($_SERVER);

//save results
save_results($version);

function save_results($version) {
    if(!isset($_COOKIE['vkid'])) {
        $vkid = session_id();
        setcookie('vkid', $vkid, time() + (60 * 60 * 24 * 365 * 15), "/");
    } else {
        $vkid = $_COOKIE['vkid'];
    }

    $arr = [
        date("Y-m-d H:i:s"),
        $version,
        $vkid,
        session_id(),
        json_encode($_REQUEST),
        json_encode($_COOKIE),
        $_SERVER['REMOTE_ADDR'],
        $_SERVER['HTTP_REFERER'],
    ];
    $file = fopen('log.csv','a');
    fputcsv($file,$arr);
    fclose($file);
}
?>
