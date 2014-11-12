<?php

/*
* adapted from http://www.snip2code.com/Snippet/30795/Simple-PHP-Proxy-Script/
*/

$baseUrl = "http://oceancurrent.imos.org.au";
$context = "";
$method = $_SERVER['REQUEST_METHOD'];


if ($_GET && $_GET['ocrequest']) {
    $headers = getallheaders();
    $headers_str = [];

    $fullUrlArray = array($baseUrl, $context, urldecode($_GET['ocrequest']));
    $url = implode("/", array_filter($fullUrlArray));

    foreach ($headers as $key => $value) {
        if ($key == 'Host') continue;
        $headers_str[] = $key . ":" . $value;
    }

    $ch = curl_init($url);

    curl_setopt($ch, CURLOPT_URL, $url);

    if ($method == "POST") {
        $data_str = file_get_contents('php://input');
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_str);
    }

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    header('Content-Type: text/html');
    $result = curl_exec($ch);

    // Check if any error occurred
    if (curl_errno($ch)) {
        $info = curl_getinfo($ch);
        //print_r($info);
    } else {
        parseResults($result, $baseUrl, $context);
    }

    curl_close($ch);
}

function parseResults($res, $baseUrl, $context) {

    if (false) {
        $result = "<code>\n";
        $result .= nl2br(htmlspecialchars($res)) . "\n\n";
        $result .= "</code><BR><BR>\n\n\n";
        // end of debugging output
    }

    //$resArray = explode("\n", $res);

    // find the image
    preg_match('/src=(.*?)>/', $res, $imgFilename);


    if (strlen($imgFilename[1]) > 0) {
        $urlArray = array("<img src=\"" . $baseUrl, $context, getOcrequestFolder(), $imgFilename[1] . "\" />\n");
        $result .= implode("/", array_filter($urlArray));
    } else {

        $urlArray = array($baseUrl, $context, getOcrequestFolder(), $imgFilename[1]);
        $result = "<p class=\"bg-danger\">Graph not found at: " . implode("/", array_filter($urlArray)) . "</p>";
    }
    echo $result;
}

function getOcrequestFolder() {
    // strip off the filename
    $pathArray = explode("/", urldecode($_GET['ocrequest']));
    array_pop($pathArray);
    return implode("/", $pathArray);
}

?>

