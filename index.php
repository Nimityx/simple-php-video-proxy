<?php

if (isset($_GET['url'])) {
    if ($_GET['url']==null || !$_GET['url']) {
        echo "URL undefined!";
    } else {
        $url = $_GET['url'];
        $url = $_SERVER['HTTP_HOST']."/server.php?url=".urlencode($url);
        echo '
<!DOCTYPE html>
<html>
    <head>
        <title>PHP Video Proxy</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=1" />
    </head>
    <body>
        <video controls autoplay src="'.$url.'" style="position:fixed;width:100%;height:100%;top:0;bottom:0;left:0;right:0;">Your browser does not support the video tag.</video>
    </body>
</html>';
    }
} else {
    echo "URL undefined!";
}

?>
