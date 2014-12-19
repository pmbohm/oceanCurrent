<?php
$title = "SST";
ini_set('include_path', './' . PATH_SEPARATOR . '../' . PATH_SEPARATOR . ini_get('include_path'));
include_once("include/header.php");
?>
<map name="imap1">
    <area shape="rect" coords="63   -2  107   31" href="TimorP/latest.html" alt="TimorP" title="Timor Passage-Darwin">
    <area shape="rect" coords="46  27  81  59" href="Broome/latest.html" alt="Broome" title="Broome">
    <area shape="rect" coords="-35 -15   9  19" href="XmasI/latest.html" alt="XmasI" title="Christmas Is.">
    <area shape="rect" coords="17  48  48  75" href="NWS/latest.html" alt="NWS" title="NW shelf">
    <area shape="rect" coords="9  58  39  92" href="Ningaloo/latest.html" alt="Ningaloo" title="Ningaloo">
    <area shape="rect" coords="28  112   36  119" href="Rottnest/latest.html" alt="Rottnest" title="Rottnest Is">
    <area shape="rect" coords="17  107   36  121" href="DonPer/latest.html" alt="DonPer" title="Dongara-Perth">
    <area shape="rect" coords="5   88   39  130" href="Perth/latest.html" alt="Perth" title="Shark Bay-Perth">
    <area shape="rect" coords="5   88   39  130" href="Perth/latest.html" alt="Perth" title="Perth">
    <area shape="rect" coords="9  107   43  145" href="CLeeu/latest.html" alt="CLeeu" title="Cape Leeuwin">
    <area shape="rect" coords="113  127  145  152" href="SAgulfs/latest.html" alt="SAgulfs" title="SA gulfs">
    <area shape="rect" coords="88  113  128  140" href="EGAB/latest.html" alt="EGAB" title="Eastern GAB">
    <area shape="rect" coords="70  113  124  146" href="RechEyre/latest.html" alt="RechEyre"
          title="Esperance-Eyre Pen.">
    <area shape="rect" coords="117  121  169  173" href="Adelaide/latest.html" alt="Adelaide"
          title="Adelaide-Melbourne">
    <area shape="rect" coords="194  104  204  113" href="Coffs/latest.html" alt="Coffs" title="Coffs Harbour">
    <area shape="rect" coords="180  116  206  145" href="SNSW/latest.html" alt="SNSW" title="Southern NSW">
    <area shape="rect" coords="191   80  209  104" href="Brisbane2/latest.html" alt="Brisbane2" title="Brisbane">
    <area shape="rect" coords="178   58  213   87" href="SGBR/latest.html" alt="SGBR" title="Southern GBR">
    <area shape="rect" coords="161   31  196   64" href="CGBR/latest.html" alt="CGBR" title="Central GBR">
    <area shape="rect" coords="143    2  189   34" href="NGBR/latest.html" alt="NGBR" title="Northern GBR">
    <area shape="rect" coords="187   73  222  121" href="Brisbane/latest.html" alt="Brisbane"
          title="Brisbane-Newcastle">
    <area shape="rect" coords="182  105  230  135" href="LordHoweS/latest.html" alt="LordHoweS"
          title="Lord Howe Is.-Sydney">
    <area shape="rect" coords="169  121  204  173" href="Syd-Hob/latest.html" alt="Syd-Hob" title="Sydney-Hobart">
    <area shape="rect" coords="143  155  191  189" href="Tas/latest.html" alt="Tas" title="Tasmania">
    <area shape="rect" coords="26  121   74  147" href="AlbEsp/latest.html" alt="AlbEsp" title="Albany-Esperance">

</map>
<map name="imap2">
    <area shape="rect" coords="129   15  190   83" href="NE/latest.html" alt="NE" title="North East">
    <area shape="rect" coords="20   7  95  69" href="NW/latest.html" alt="NW" title="North West">
    <area shape="rect" coords="146   83  199  149" href="SE/latest.html" alt="SE" title="South East">
    <area shape="rect" coords="3   69   61  134" href="SW/latest.html" alt="SW" title="South West">
    <area shape="rect" coords="61   98  146  149" href="GAB/latest.html" alt="GAB" title="South">
    <area shape="rect" coords="88  149  160  189" href="SO/latest.html" alt="SO" title="Southern Ocean">
</map>
<map name="imap3">
    <area shape="rect" coords="4  46  84  86" href="sst_n/latest.html" alt="sst_n"
          title="Sea Surface Temperature (Northern region)">
    <area shape="rect" coords="4  132   84  172" href="sst_s/latest.html" alt="sst_s"
          title="Sea Surface Temperature (Southern region)">
    <area shape="rect" coords="77   84  144  116" href="sst_anom/latest.html" alt="sst_anom"
          title="Sea Surface Temperature anomaly (Australasian region)">
    <area shape="rect" coords="138   46  207   78" href="ht/latest.html" alt="ht"
          title="gridded sea level anomaly from altimeters">
    <area shape="rect" coords="117  154  207  186" href="uv/latest.html" alt="uv"
          title="Surface current (from sea level anomaly plus time-mean velocity)">
</map>

<div class="row">
    <div class="col-md-4">
        <h3 class="highlightedHeader">Sea Surface Temperature Maps</h3>
        <div class="panel-group" id="accordian" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" data-toggle="collapse"  data-parent="#accordian" data-target="#zoomInsContent" >
                    <h4 class="panel-title">
                        <a class="external" href="#"
                           aria-expanded="true"
                           aria-controls="zoomInsContent">
                            Zoom Ins
                        </a>
                    </h4>
                </div>
                <div id="zoomInsContent" class="panel-collapse collapse in" role="tabpanel"
                     aria-labelledby="zoomIns">
                    <div class="panel-body">
                        <img class="highlight" src="http://oceancurrent.imos.org.au/misc/imap1.gif" usemap="#imap1">
                        <?php // todo fix these links for production ?>
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab"  data-toggle="collapse" data-parent="#accordian" data-target="#midSizeContent">
                    <h4 class="panel-title">
                        <a class="external" href="#"
                           aria-expanded="false"
                           aria-controls="midSizeContent">
                            Mid Size
                        </a>
                    </h4>
                </div>
                <div id="midSizeContent" class="panel-collapse collapse" role="tabpanel"
                     aria-labelledby="midSize">
                    <div class="panel-body">
                        <img class="highlight" src="http://oceancurrent.imos.org.au/misc/imap2.gif" usemap="#imap2">
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab"  data-toggle="collapse" data-parent="#accordian" data-target="#largeAreaContent">
                    <h4 class="panel-title">
                        <a class="external" href="#"
                           aria-expanded="false"
                           aria-controls="largeAreaContent">
                            Large Area
                        </a>
                    </h4>
                </div>
                <div id="largeAreaContent" class="panel-collapse collapse" role="tabpanel"
                     aria-labelledby="largeArea">
                    <div class="panel-body">
                        <img class="highlight" src="http://oceancurrent.imos.org.au/misc/imap3.gif" usemap="#imap3">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8">
        <div id="proxiedPagesContainer">
            <div class="voffset4"></div>
            <h4>Choose and then click on a map to see the graphs</h4>
            <a href="<?php echo $BASEDIR ?>whatsshown.php" class="btn btn-primary " type="button">Whats Shown in
                these maps <span
                    class="badge">GO</span></a>
        </div>
    </div>
</div>

<?php
include_once("include/footer.php");
?>
