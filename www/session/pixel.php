<?php

    // https://stackoverflow.com/questions/13079666/developing-a-tracking-pixel

    // Create an image, 1x1 pixel in size
    $im=imagecreate(1,1);

    // Set the background colour
    $white=imagecolorallocate($im,255,255,255);

    // Allocate the background colour
    imagesetpixel($im,1,1,$white);

    // Set the image type
    header("content-type:image/jpg");

    // Create a JPEG file from the image
    imagejpeg($im);

    // Free memory associated with the image
    imagedestroy($im);

    if(!isset($_COOKIE['vkid'])) {
        $vkid = session_id();
        setcookie('vkid', $vkid, time() + (60 * 60 * 24 * 365 * 15), "/");
    } else {
        $vkid = $_COOKIE['vkid'];
    }

    $arr = [
        date("Y-m-d H:i:s"),
        $vkid,
        json_encode($_REQUEST),
        $_SERVER['REMOTE_ADDR'],
        $_SERVER['HTTP_REFERER'],
    ];
    $file = fopen('pixels.csv','a');
    fputcsv($file,$arr);
    fclose($file);

?>
