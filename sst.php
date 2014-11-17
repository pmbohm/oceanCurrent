<?
$title = "SST";
ini_set('include_path', './' . PATH_SEPARATOR . '../' . PATH_SEPARATOR . ini_get('include_path'));
include_once("include/header.php");
?>


    <div class="row">
        <h3 class="greyHeader">Sea Surface Temperature Maps</h3>
    </div>
    <div class="row">
        <div class="col-md-4">
            <article>
                <map name="imap1">
                    <area shape="rect" coords="4  63  35  89" href="Ningaloo/latest.html" title="Ningaloo">
                    <area shape="rect" coords="-4   89   17  130" href="Perth/latest.html" title="Perth">
                    <area shape="rect" coords="-4   89   30  107" href="Perth/latest.html" title="Perth">
                    <area shape="rect" coords="4  121   43  150" href="CLeeu/latest.html" title="CLeeu">
                    <area shape="rect" coords="113  153  169  168" href="Adelaide/latest.html" title="Adelaide">
                    <area shape="rect" coords="169  140  204  168" href="Syd-Hob/latest.html" title="Syd-Hob">
                    <area shape="rect" coords="209   73  230  105" href="Brisbane/latest.html" title="Brisbane">
                    <area shape="rect" coords="187   80  208  104" href="Brisbane2/latest.html" title="Brisbane2">
                    <area shape="rect" coords="206  105  230  135" href="LordHoweS/latest.html" title="LordHoweS">
                    <area shape="rect" coords="174  116  206  140" href="SNSW/latest.html" title="SNSW">
                    <area shape="rect" coords="17  44  48  63" href="NWS/latest.html" title="NWS">
                    <area shape="rect" coords="143  168  191  189" href="Tas/latest.html" title="Tas">
                    <area shape="rect" coords="43  121   70  150" href="AlbEsp/latest.html" title="AlbEsp">
                    <area shape="rect" coords="70  111   89  147" href="RechEyre/latest.html" title="RechEyre">
                    <area shape="rect" coords="89  111  113  140" href="EGAB/latest.html" title="EGAB">
                    <area shape="rect" coords="161   31  196   58" href="CGBR/latest.html" title="CGBR">
                    <area shape="rect" coords="143    2  187   31" href="NGBR/latest.html" title="NGBR">
                    <area shape="rect" coords="-35 -15   9  19" href="XmasI/latest.html" title="XmasI">
                    <area shape="rect" coords="73   -2  107   25" href="TimorP/latest.html" title="TimorP">
                    <area shape="rect" coords="48  27  73  59" href="Broome/latest.html" title="Broome">
                    <area shape="rect" coords="17  107   36  121" href="DonPer/latest.html" title="DonPer">
                    <area shape="rect" coords="113  125  145  152" href="SAgulfs/latest.html" title="SAgulfs">
                    <area shape="rect" coords="174   58  213   80" href="SGBR/latest.html" title="SGBR">
                    <area shape="rect" coords="195  104  206  116" href="Coffs/latest.html" title="Coffs">
                </map>
                <div>
                    <h2>SST High-resolution zoom-ins</h2>
                    <img src="http://oceancurrent.imos.org.au/misc/imap1.gif" usemap="#imap1"><? // todo fix these links for production ?>
                    <ul class="list-unstyled arrowed">
                        <li>Geostrophic Currents</li>
                        <li>Snapshot SST</li>
                        <li>Radar</li>
                        <li>2004 till Now ..</li>
                    </ul>
                </div>
            </article>
            <article>
                <map name="imap2">
                    <area shape="rect" coords="129   15  190   83" href="NE/latest.html" title="NE">
                    <area shape="rect" coords="20   7  95  69" href="NW/latest.html" title="NW">
                    <area shape="rect" coords="146   83  199  149" href="SE/latest.html" title="SE">
                    <area shape="rect" coords="3   69   61  134" href="SW/latest.html" title="SW">
                    <area shape="rect" coords="61   98  146  149" href="GAB/latest.html" title="GAB">
                    <area shape="rect" coords="88  149  160  189" href="SO/latest.html" title="SO">
                </map>
                <div>
                    <h2>SST Regional</h2>
                    <img src="http://oceancurrent.imos.org.au/misc/imap2.gif" usemap="#imap2"><? // todo fix these links for production ?>
                    <!-- todo these should be relative -->
                    <ul class="list-unstyled arrowed">
                        <li>Geostrophic Currents</li>
                        <li>Sea level</li>
                        <li>3 day average SST</li>
                        <li>1993 till Now ..</li>
                    </ul>
                </div>
            </article>
            <article>
                <map name="imap3">
                    <area shape="rect" coords="7  27  91  64" href="sst_n/latest.html" title="sst_n">
                    <area shape="rect" coords="7  111   84  144" href="sst_s/latest.html" title="sst_s">
                    <area shape="rect" coords="88   67  162  101" href="sst_anom/latest.html" title="sst_anom">
                    <area shape="rect" coords="141   27  205   44" href="ht/latest.html" title="ht">
                    <area shape="rect" coords="118  111  205  144" href="uv/latest.html" title="uv">
                </map>
                <div>
                    <h2>Large area 6 day averages</h2>
                    <img src="http://oceancurrent.imos.org.au/misc/imap3.gif" usemap="#imap3"><? // todo fix these links for production ?>
                    <ul class="list-unstyled arrowed">
                        <li>Large area plots</li>
                        <li>Geostrophic Currents</li>
                        <li>Sea level</li>
                        <li>6 day average SST</li>
                    </ul>
                </div>
            </article>
        </div>
        <div class="col-md-8">
            <div id="graphContainer">
                <h4>Click on the map to see the graphs</h4>
                <a href="<?= $BASEDIR ?>whatsshown.php" class="btn btn-primary " type="button">Whats Shown in these maps <span
                        class="badge">GO</span></a>
            </div>
        </div>
    </div>
<?
include_once("include/footer.php");
?>