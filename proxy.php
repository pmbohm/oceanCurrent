<?php

/*
* adapted from http://www.snip2code.com/Snippet/30795/Simple-PHP-Proxy-Script/
*/

// todo this is added to every file. it need to be added to a custom php.ini file
ini_set('include_path', './' . PATH_SEPARATOR . '../' . PATH_SEPARATOR . ini_get('include_path'));


require_once('Template.php');
require_once('include/config.php');

$method = $_SERVER['REQUEST_METHOD'];


if ($_GET && $_GET['ocrequest']) {
    $headers = getallheaders();
    $headers_str = [];

    $fullUrlArray = array(constant('BASEURL'), $BASEDIR, urldecode($_GET['ocrequest']));
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
    print_r($url);
    // Check if any error occurred
    if (curl_errno($ch)) {
        $info = curl_getinfo($ch);
        //print_r($info);
    } else {
        parseResults($result, constant('BASEURL'), $BASEDIR, $url);
    }

    curl_close($ch);
}

function parseResults($res, $BASEDIR, $url) {
    if (DEBUG == 1) {
        $debug = "<code>\n";
        $debug .= nl2br(htmlspecialchars($res)) . "\n\n";
        $debug .= "</code><BR><BR>\n\n\n";
    }

    $resArray = explode("\n", $res);

    // find the image
    preg_match('/src=(.*?)>/', $res, $imgFilename);
    if (strlen($imgFilename[1]) > 0) {
        $urlArray = array($BASEDIR, getOcrequestFolder(), $imgFilename[1]);
        $imageUrl = implode("/", array_filter($urlArray));
    } else {
        $urlArray = array($BASEDIR, getOcrequestFolder(), $imgFilename[1]);
        $error = "Graph not found at: " . implode("/", array_filter($urlArray));
    }

    // find the links to the nearest files
    foreach ($resArray as $line) {
        if (preg_match('/PREV/', $line)) {
            preg_match('/href=(.*?)>/', $line, $previous);
        }
        if (preg_match('/NEXT/', $line)) {
            preg_match('/href=(.*?)>/', $line, $next);
        }
    }

    $data = array('debug' => $debug,
        'folderName' => getOcrequestFolder(),
        'imageUrl' => $imageUrl,
        'previous' => $previous[1],
        'next' => $next[1],
        'imgNameDate' => formatFilenameAsDate($imgFilename[1]),
        'error' => $error,
        'datePicker' => $url
    );
    $tmpl = new Template('views/proxyTpl.php', $data);
    echo $tmpl->render();
}

function getOcrequestFolder() {
    // strip off the filename
    $pathArray = explode("/", urldecode($_GET['ocrequest']));
    array_pop($pathArray);
    return implode("/", $pathArray);
}

function formatFilenameAsDate($filename) {

    $possibleDate = stripExtension($filename);
    $inputDateFormats = array("YmdG","Ymd");
    $outputDateFormats = array("(%s/%s/%s %s:00 Z)","(%s/%s/%s)");
    $len = count($inputDateFormats);

    // try formats till one works ? mmm. worth a try
    for ($i = 0; $i < $len; $i++) {
        $dateArray = date_parse_from_format( $inputDateFormats[$i] , $possibleDate );
        $outputDateFormat = $outputDateFormats[$i];
        if ($dateArray[error_count] == 0) {
            $i = $len;
        }
    }

    if ($dateArray[error_count] == 0) {
        $res = sprintf($outputDateFormat,
            $dateArray[year],
            $dateArray[month],
            $dateArray[day],
            $dateArray[hour]
        );
        return $res;
    }
}

function stripExtension($filename) {
    //http://stackoverflow.com/questions/2395882/how-to-remove-extension-from-string-only-real-extension
    return preg_replace('/\\.[^.\\s]{2,3}$/', '', $filename);
}

?>

