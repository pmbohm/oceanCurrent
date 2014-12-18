<?php

/*
* adapted from http://www.snip2code.com/Snippet/30795/Simple-PHP-Proxy-Script/
*/

// todo this is added to every file. it need to be added to a custom php.ini file
ini_set('include_path', './' . PATH_SEPARATOR . '../' . PATH_SEPARATOR . ini_get('include_path'));

require_once('Template.php');
require_once('include/config.php');

if ($_GET && $_GET['relUrl']) {

    $url = getFullUrlFromParams($_GET['relUrl']);
    $res = doCurlRequest($url);

    if (strpos($_GET['relUrl'], '.htm') !== false) {
        parseLatestHtmlResults($res);
    } else {
        parseIndexHtmlResults($res);
    }
}

function getFullUrlFromParams($val) {
    $fullUrlArray = array(
        constant('BASEURL'),
        $BASEDIR,
        urldecode($val)
    );
    return implode("/", array_filter($fullUrlArray));
}

function parseLatestHtmlResults($res) {

    if (DEBUG == 1) {
        $debug = "<code>\n";
        $debug .= nl2br(htmlspecialchars($res)) . "\n\n";
        $debug .= "</code><BR><BR>\n\n\n";
    }

    // find the image
    preg_match('/src=(.*?)>/', $res, $imgFilename);
    if (strlen($imgFilename[1]) > 0) {
        $urlArray = array(
            constant('BASEURL'),
            getRelativeFolderPath(),
            $imgFilename[1]
        );
        $imageUrl = implode("/", array_filter($urlArray));
    } else {
        $urlArray = array(
            constant('BASEURL'),
            getRelativeFolderPath(),
            $imgFilename[1]
        );
        $error = "Graph not found at: " . implode("/", array_filter($urlArray));
    }
    array_pop($urlArray);
    $baseFolderUrl = implode("/", array_filter($urlArray)) . "/";

    $resArray = explode("\n", $res);
    // find the links to the nearest files
    foreach ($resArray as $line) {
        if (preg_match('/PREV/', $line)) {
            preg_match('/href=(.*?)>/', $line, $previous);
        }
        if (preg_match('/NEXT/', $line)) {
            preg_match('/href=(.*?)>/', $line, $next);
        }
    }

    $data = array(
        'debug' => $debug,
        'relativeFolderPath' => getRelativeFolderPath(),
        'regionalMap' => isRegionalMap(),
        'imageUrl' => $imageUrl,
        'previous' => $previous[1],
        'next' => $next[1],
        'imgNameDate' => formatFilenameAsDate($imgFilename[1]),
        'error' => $error,
        'popup' => ($_GET['popup']) ?: 'false',
        'baseFolderUrl' => $baseFolderUrl,
        'datePickerUrl' => getRelativeFolderPath()
    );
    $tmpl = new Template('views/proxyLatestHtmlTpl.php', $data);
    echo $tmpl->render();
}

function parseIndexHtmlResults($res) {

    if (DEBUG == 1) {
        $debug = "<code>\n";
        $debug .= nl2br(htmlspecialchars($res)) . "\n\n";
        $debug .= "</code><BR><BR>\n\n\n";
    }

    // fix this apparent closing tag EG: <a href=2012/>[2012]</a>
    // as they break strip_tags
    $res = str_replace("/>", ">", $res);

    // limit content to anchors and bold tags to clear crud
    $res = strip_tags($res, "<a><b>");

    // make bold tags into H3's
    $res = str_replace("b>", "h3>", $res);

    // now remove lines that ...
    $endOfLine = "\n";
    $lines = explode($endOfLine, $res);
    $array[] = null;

    foreach ($lines as $string) {

        // have a reference to index.htm
        if (preg_match('/index/i', $string)) {
            if (!preg_match('/oceancurrent/i', $string)) {
                $todaysYear = date("Y");
                $string = "<a href=\"../\" >[$todaysYear]</a>";
            }
            else {
                continue;
            }
        }
        // have a reference to oceancurrent
        if (preg_match('/oceancurrent/i', $string)) {
            continue;
        }
        // have an unwanted title
        if (preg_match('/----/i', $string)) {
            continue;
        }
        // not nested in a tag. (strip_tags leaves content orphaned)
        if (!preg_match("%<.*?>%", $string)) {
            continue;
        }

        array_push($array, $string);
    }

    $res = implode($endOfLine, $array);

    $data = array(
        'debug' => $debug,
        'relativeFolderPath' => getRelativeFolderPath(),
        'html' => $res
    );
    $tmpl = new Template('views/proxyIndexHtmlTpl.php', $data);
    echo $tmpl->render();
}

function getRelativeFolderPath() {

    $pathArray = getPathArray();
    //if the last item is a file strip it off
    $filename = $pathArray[count($pathArray)-1];
    if (pathinfo($filename, PATHINFO_EXTENSION)) {
        array_pop($pathArray);
    }
    return implode("/", $pathArray);
}

function getPathArray() {
    return explode("/", urldecode($_GET['relUrl']));
}

function isRegionalMap() {
    return ($_GET['regionalMap'] == "true");
}

function formatFilenameAsDate($filename) {

    $possibleDate = stripExtension($filename);
    $inputDateFormats = array(
        "YmdG",
        "Ymd"
    );
    $outputDateFormats = array(
        "%s/%s/%s %s:00 Z",
        "%s/%s/%s"
    ); // formats used by David
    $len = count($inputDateFormats);

    for ($i = 0; $i < $len; $i++) {
        $dateArray = date_parse_from_format($inputDateFormats[$i], $possibleDate);
        $outputDateFormat = $outputDateFormats[$i];
        if ($dateArray['error_count'] == 0) {
            $i = $len;
        }
    }

    if ($dateArray['error_count'] == 0) {
        $res = sprintf($outputDateFormat, $dateArray['year'], $dateArray['month'], $dateArray['day'], $dateArray['hour']);
        return $res;
    }
}

function doCurlRequest($url) {

    $headers = getallheaders();
    $headers_str = array();

    $method = $_SERVER['REQUEST_METHOD'];

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

    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

    header('Content-Type: text/html');
    $result = curl_exec($ch);
    // Check if any error occurred
    if (curl_errno($ch)) {
        //$info = curl_getinfo($ch);
    } else {
        return $result;
    }

    curl_close($ch);
}

function stripExtension($filename) {
    //http://stackoverflow.com/questions/2395882/how-to-remove-extension-from-string-only-real-extension
    return preg_replace('/\\.[^.\\s]{2,3}$/', '', $filename);
}

?>

