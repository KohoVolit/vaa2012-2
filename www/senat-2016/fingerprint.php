<?php
session_start();
// cookie
if(!isset($_COOKIE['vkid'])) {
    $elements = ['REQUEST_TIME_FLOAT','HTTP_ACCEPT', 'HTTP_ACCEPT_CHARSET',  'HTTP_ACCEPT_ENCODING', 'HTTP_ACCEPT_LANGUAGE', 'HTTP_HOST', 'HTTP_REFERER', 'HTTP_USER_AGENT', 'REMOTE_ADDR', 'REMOTE_PORT'];

    $components = ['language','color_depth','resolution','available_resolution','timezone_offset', 'session_storage', 'local_storage', 'indexed_db', 'open_database', 'cpu_class', 'navigator_platform', 'do_not_track',  'adblock', "has_lied_languages", "has_lied_resolution", "has_lied_os", "has_lied_browser", "touch_support"];

    $server = [];
    foreach ($elements as $element) {
        if (isset($_SERVER[$element]))
            $server[$element] = $_SERVER[$element];
    }

    $comps = [];
    if (isset($_REQUEST['components'])) {
        foreach($_REQUEST['components'] as $component) {
            if (in_array($component['key'],$components))
                $comps[$component['key']] = $component['value'];
        }
    }
    $fingerprint = null;
    if (isset($_REQUEST['fingerprint'])) {
        $fingerprint = $_REQUEST['fingerprint'];
    }


    $vkid = session_id();
    setcookie('vkid', $vkid, time() + (60 * 60 * 24 * 365 * 15), "/");
    $file = fopen('fingerprint.csv','a');
    $data = [
        date("Y-m-d H:i:s"),
        $vkid,
        session_id(),
        json_encode($server),
        json_encode($fingerprint),
        json_encode($comps),
        json_encode([$_REQUEST['width'],$_REQUEST['height']])
    ];
    fputcsv($file, $data);
    fclose($file);
}
?>
