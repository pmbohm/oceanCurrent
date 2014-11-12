<?
//$title = "TEMPLATE";
ini_set('include_path', './' . PATH_SEPARATOR . '../' . PATH_SEPARATOR . ini_get('include_path'));
include_once("include/header.php");
?>


    <div class="row">
        <div class="col-md-4">
            <map name="imap3">
                <area shape="rect" coords="7  27  91  64" href="sst_n/latest.html" title="sst_n">
                <area shape="rect" coords="7  111   84  144" href="sst_s/latest.html" title="sst_s">
                <area shape="rect" coords="88   67  162  101" href="sst_anom/latest.html" title="sst_anom">
                <area shape="rect" coords="141   27  205   44" href="ht/latest.html" title="ht">
                <area shape="rect" coords="118  111  205  144" href="uv/latest.html" title="uv">
            </map>
            <img src="http://oceancurrent.imos.org.au/misc/imap3.gif" usemap="#imap3">

            <div>
                <h2>Observations</h2>
                <ul class="list-unstyled arrowed">
                    <li>Large area plots</li>
                    <li>Geostrophic Currents</li>
                    <li>Sea level</li>
                    <li>6 day average SST</li>
                </ul>

            </div>
        </div>
        <div class="col-md-8">
            <div id="graphContainer">
                <h4>Click on the map to see the graphs</h4>
            </div>
        </div>
    </div>

<?
include("include/footer.php");
?>