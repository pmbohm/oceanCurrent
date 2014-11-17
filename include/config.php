<?

ini_set('include_path', './' . PATH_SEPARATOR . '../' . PATH_SEPARATOR . ini_get('include_path'));
/*
 * todo see: string set_include_path ( string $new_include_path )
 * Sets the include_path configuration option for the duration of the script.
 */

// report all errors but don't display them publicly
//error_reporting(E_ALL);
//ini_set('display_errors', 0);

$CONTEXT = "oceanCurrent"; // make a constant
$ENVIRONMENT = "development"; // used in proxy.php

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

function  getRelPath($fullCwd) {

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
