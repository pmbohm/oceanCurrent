<?php

//ini_set('include_path', './' . PATH_SEPARATOR . '../' . PATH_SEPARATOR . ini_get('include_path'));
/*
 * todo see: string set_include_path ( string $new_include_path )
 * Sets the include_path configuration option for the duration of the script.
 */

date_default_timezone_set('Australia/Hobart'); //required by PHP date function

define("CONTEXT", "oceancurrent");
define("DEBUG", false); // used in proxy.php
define("BASEURL", "http://oceancurrent.imos.org.au");

function getBaseDir($fullCwd, $context) {
    $basedir = "";
    $relDir = getRelPath($fullCwd);

    while (count($relDir) > 1) {
        if (array_pop($relDir) != $context) {
            $basedir .= "../";
        } else {
            $relDir = null;
        }
    }
    return $basedir;
}

function getRelPath($fullCwd) {

    $context_document_root = $_SERVER["CONTEXT_DOCUMENT_ROOT"];
    $res = subtractString($fullCwd, $context_document_root);
    return explode("/", $res);
}

// http://forums.phpfreaks.com/topic/19501-subtract-string-from-string/
function subtractString($original, $remove) {

    $len = strlen($remove);
    $pos1 = strpos($original, $remove);
    $res = substr($original, 0, $pos1) . substr($original, $pos1 + $len);
    return $res;
}

?>