<?
$title = "Ocean colour products";
ini_set('include_path', './' . PATH_SEPARATOR . '../' . PATH_SEPARATOR . ini_get('include_path'));
include_once("include/header.php");
?>

    <div class="row">
        <div class="col-md-4">
            <h3>Prepared maps and animations</h3>
            <map name="imapchl">
                <area shape="rect" coords="4  63  35  89" href="Ningaloo_chl/latest.html" title="Ningaloo">
                <area shape="rect" coords="-4   89   17  130" href="Perth_chl/latest.html" title="Perth">
                <area shape="rect" coords="-4   89   30  107" href="Perth_chl/latest.html" title="Perth">
                <area shape="rect" coords="4  121   43  150" href="CLeeu_chl/latest.html" title="CLeeu">
                <area shape="rect" coords="113  153  169  168" href="Adelaide_chl/latest.html" title="Adelaide">
                <area shape="rect" coords="169  140  204  168" href="Syd-Hob_chl/latest.html" title="Syd-Hob">
                <area shape="rect" coords="209   73  230  105" href="Brisbane_chl/latest.html" title="Brisbane">
                <area shape="rect" coords="187   80  208  104" href="Brisbane2_chl/latest.html" title="Brisbane2">
                <area shape="rect" coords="206  105  230  135" href="LordHoweS_chl/latest.html" title="LordHoweS">
                <area shape="rect" coords="174  116  206  140" href="SNSW_chl/latest.html" title="SNSW">
                <area shape="rect" coords="17  44  48  63" href="NWS_chl/latest.html" title="NWS">
                <area shape="rect" coords="143  168  191  189" href="Tas_chl/latest.html" title="Tas">
                <area shape="rect" coords="43  121   70  150" href="AlbEsp_chl/latest.html" title="AlbEsp">
                <area shape="rect" coords="70  111   89  147" href="RechEyre_chl/latest.html" title="RechEyre">
                <area shape="rect" coords="89  111  113  140" href="EGAB_chl/latest.html" title="EGAB">
                <area shape="rect" coords="161   31  196   58" href="CGBR_chl/latest.html" title="CGBR">
                <area shape="rect" coords="143    2  187   31" href="NGBR_chl/latest.html" title="NGBR">
                <area shape="rect" coords="-35 -15   9  19" href="XmasI_chl/latest.html" title="XmasI">
                <area shape="rect" coords="73   -2  107   25" href="TimorP_chl/latest.html" title="TimorP">
                <area shape="rect" coords="48  27  73  59" href="Broome_chl/latest.html" title="Broome">
                <area shape="rect" coords="17  107   28  121" href="DonPer_chl/latest.html" title="DonPer">
                <area shape="rect" coords="28  113   34  118" href="Rottnest_chl/latest.html" title="Rottnest">
                <area shape="rect" coords="113  125  145  152" href="SAgulfs_chl/latest.html" title="SAgulfs">
                <area shape="rect" coords="174   58  213   80" href="SGBR_chl/latest.html" title="SGBR">
                <area shape="rect" coords="195  104  206  116" href="Coffs_chl/latest.html" title="Coffs">
                <area shape="default" href="MODIScomp/latest.html" title="MODIScomp">
            </map>
            <div>
                <h2>Ocean Colour</h2>
                <img src="http://oceancurrent.imos.org.au/misc/imapchl.gif" usemap="#imapchl">
                <ul class="list-unstyled arrowed">
                    <li>Geostrophic Currents</li>
                    <li>Chlorophyll a</li>
                    <li>2002-now</li>
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
include_once("include/footer.php");
?>