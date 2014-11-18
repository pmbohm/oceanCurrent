<?
// todo this is added to every file. it need to be added to a custom  php.ini file
ini_set('include_path', './' . PATH_SEPARATOR . '../' . PATH_SEPARATOR . ini_get('include_path'));
include_once("include/header.php");

?>

<h3 class="highlightedHeader">Maps of satellite derived surface properties, SST, ocean colour and geostrophic currents</h3>
<article>
    <div class="row">
        <div class="col-md-6">
            <h1>Sea Surface Temperature</h1>
            <ul class="list-unstyled arrowed">
                <li>Geostrophic Currents</li>
                <li>Snapshot SST</li>
                <li>Radar</li>
                <li>2004 till Now ..</li>
            </ul>
            <p><a class="btn btn-primary" href="sst.php" role="button">Maps+Graphs &raquo;</a></p>
        </div>
        <div class="col-md-6">
            <h1>Ocean Colour (experimental)</h1>
            <ul class="list-unstyled arrowed">
                <li>Geostrophic Currents</li>
                <li>Chlorophyl A</li>
                <li>2002-now</li>
            </ul>
            <p><a class="btn btn-primary" href="oceancolour.php" role="button">Maps+Graphs &raquo;</a></p>
        </div>

    </div>
    <hr>
</article>
<article>
    <h3>Imagery for importing into Google Earth</h3>

    <div class="row">
        <div class="col-md-6">
            <img src="http://oceancurrent.imos.org.au/misc/TT0120tn.jpg" title="Google Earth example">
        </div>
        <div class="col-md-6">
            <p><a href="WA_GE/latest.kml">[West Australia, last 6 days]</a> <a href="WA_GE/2014/">[2008-now]</a></p>
            <p><a href="EAu_GE/latest.kml">[East Australia, last 6 days]</a> <a href="EAu_GE/2014/">[2008-now]</a></p>
            <p>Click one of these links to make a map of the anomaly of 3-day average SST for WA or East Australia
                appear
                in <a href=http://earth.google.com/> Google Earth</a>. If you select the 'last 6 days' link, drag the
                time
                slider right to see the most recent data. For either recent or old, zoom in to see 'snapshot' images of
                SST
                anomaly,
                overlain with altimeter-derived estimates of currents.
            </p>
            <h4><< Example Google Earth screen-grab</h4>
            <p>The Example shows the track [source] of ocean kayaker Shaun Quincy just two days into his voyage from Australia to
                New Zealand, overlain on our near-real-time ocean analysis.
            </p>
        </div>
    </div>
</article>

<?
include_once("include/footer.php");
?>

