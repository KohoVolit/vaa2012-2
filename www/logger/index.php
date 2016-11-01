<?php
session_start();

$relative_path = "";

print_r($_COOKIE);
print_r($_SERVER);

//save results
save_results($relative_path);

function save_results($relative_path) {
    if(!isset($_COOKIE['vkid'])) {
        $vkid = session_id();
        setcookie('vkid', $vkid, time() + (60 * 60 * 24 * 365 * 15), "/");
    } else {
        $vkid = $_COOKIE['vkid'];
    }

    $arr = [
        date("Y-m-d H:i:s"),
        $vkid,
        session_id(),
        json_encode($_REQUEST),
        json_encode($_COOKIE),
        $_SERVER['HTTP_REFERER'],
    ];
    $file = fopen($relative_path . 'log.csv','a');
    fputcsv($file,$arr);
    fclose($file);
}
?>
