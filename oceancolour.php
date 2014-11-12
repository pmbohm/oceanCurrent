<?
$title = "Ocean colour products";
ini_set('include_path', './' . PATH_SEPARATOR . '../' . PATH_SEPARATOR . ini_get('include_path'));
include_once("include/header.php");
?>

    <div class="row">
        <div class="col-md-4">
            <map name="imap2">
                <area shape="rect" coords="129   15  190   83" href="NE/latest.html" title="NE">
                <area shape="rect" coords="20   7  95  69" href="NW/latest.html" title="NW">
                <area shape="rect" coords="146   83  199  149" href="SE/latest.html" title="SE">
                <area shape="rect" coords="3   69   61  134" href="SW/latest.html" title="SW">
                <area shape="rect" coords="61   98  146  149" href="GAB/latest.html" title="GAB">
                <area shape="rect" coords="88  149  160  189" href="SO/latest.html" title="SO">
            </map>
            <img src="http://oceancurrent.imos.org.au/misc/imap2.gif" usemap="#imap2">

            <div>
                <h2>Ocean Colour</h2>
                <h5>(experimental)</h5>
                <ul class="list-unstyled arrowed">
                    <li>Geostrophic Currents</li>
                    <li>Sea level</li>
                    <li>3 day average SST</li>
                    <li>1993 till Now ..</li>
                </ul>
            </div>
        </div>
        <div class="col-md-8">
            <div id="graphContainer"></div>
        </div>
    </div>
<?
include_once("include/footer.php");
?>