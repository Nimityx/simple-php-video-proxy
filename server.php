<?php
header( 'X-Robots-Tag: none' );

function url_get_contents($url) {
    if (!function_exists('curl_init')){ 
        die('CURL is not installed!');
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);
    return $output;
}

if (isset($_GET['url'])) {
    if ($_GET['url']==null || !$_GET['url']) {
        $file = "URL undefined!";
    } else {
        $url = $_GET['url'];
        $file = file_get_contents($url);
        if ($file==null || !$file) {
            $file = url_get_contents($url);
        }
        header('Content-type: video');
    }
} else {
    $file = "URL undefined!";
}

echo $file;
?>
