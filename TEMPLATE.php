<?
$title = "TEMPLATE";
ini_set('include_path', './' . PATH_SEPARATOR .  '../' . PATH_SEPARATOR . ini_get('include_path'));
include_once("include/header.php");
?>

<!--
   **** start with layout component from http://getbootstrap.com/css/#grid
   Any relative links not in the same directory as the templated file should be prepended with
   <?/* echo $BASEDIR */?>
-->

<?
include("include/footer.php");
?>