<?
// todo this is added to every file. it need to be added to a custom  php.ini file
ini_set('include_path', './' . PATH_SEPARATOR . '../' . PATH_SEPARATOR . ini_get('include_path'));
include_once("include/header.php");

?>

<h3 class="greyHeader">Satellite derived surface properties, SST, ocean colour and geostrophic currents</h3>
<div class="row">
    <div class="col-md-4">
        <h2>Sea Surface Temperature</h2>
        <ul class="list-unstyled arrowed">
            <li>Geostrophic Currents</li>
            <li>Snapshot SST</li>
            <li>Radar</li>
            <li>2004 till Now ..</li>
        </ul>
        <p><a class="btn btn-primary" href="sst.php" role="button">Maps+Graphs &raquo;</a></p>
    </div>
    <div class="col-md-4">
        <h2>Ocean Colour (experimental)</h2>
        <ul class="list-unstyled arrowed">
            <li>Geostrophic Currents</li>
            <li>Chlorophyl A</li>
            <li>2002-now</li>
        </ul>
        <p><a class="btn btn-primary" href="oceancolour.php" role="button">Maps+Graphs &raquo;</a></p>
    </div>
    <div class="col-md-4">
        <h2>Observations</h2>
    </div>
</div>


<?
include_once("include/footer.php");
?>

