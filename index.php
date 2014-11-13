<?
// todo this is added to every file. it need to be added to a custom  php.ini file
ini_set('include_path', './' . PATH_SEPARATOR . '../' . PATH_SEPARATOR . ini_get('include_path'));
include_once("include/header.php");

?>

<h3 class="grey"><em>Satellite derived surface properties, SST, ocean colour and geostrophic currents</em></h3>
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
        <h2>Ocean Colour</h2>
        <h5>(experimental)</h5>
        <ul class="list-unstyled arrowed">
            <li>Geostrophic Currents</li>
            <li>Sea level</li>
            <li>3 day average SST</li>
            <li>1993 till Now ..</li>
        </ul>
        <p><a class="btn btn-primary" href="oceancolour.php" role="button">Maps+Graphs &raquo;</a></p>
    </div>
    <div class="col-md-4">
        <h2>Observations</h2>
        <ul class="list-unstyled arrowed">
            <li>Large area plots</li>
            <li>Geostrophic Currents</li>
            <li>Sea level</li>
            <li>6 day average SST</li>
        </ul>
        <p><a class="btn btn-primary" href="observations.php" role="button">Maps+Graphs &raquo;</a></p>
    </div>
</div>


<?
include_once("include/footer.php");
?>

