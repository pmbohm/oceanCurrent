<?
$title = "Source data";

ini_set('include_path', './' . PATH_SEPARATOR . '../' . PATH_SEPARATOR . ini_get('include_path'));
include_once("include/header.php");

?>
    <h3>Sea Surface Height Anomaly along ground-tracks of satellite altimeters</h3>
    We use the <a href="RADS_last10/latest.html">[last 10 day's data]</a> from
    <a href="JA1_RADS/latest.html">[Jason-1]</a>,
    <a href="JA2_RADS/latest.html">[Jason-2]</a>,
    <a href="CR2_RADS/latest.html">[Cryosat-2]</a>,
    <a href="SRL_RADS/latest.html">[SARAL]</a> and
    <a href="ENV_RADS/latest.html">[Envisat (until April 2012)]</a>
    along with tidegauges (see below) to make maps of sea surface height anomaly for the Australasian region.
    These <a href="<? echo $BASEDIR ?>glossary.php#altimeter" target="blank">altimetry</a> data are now sourced from the
    <a href="http://ibis.grdl.noaa.gov/SAT/NearRealTime/" target="blank">NOAA Laboratory for Satellite Altimetry</a>
    via the <a href="http://rads.tudelft.nl/rads/rads.shtml" target="blank">Radar Altimeter Database System (RADS)</a>.
    In the plots linked above, some data points (sometimes whole tracks) are outlined in magenta, signifying that they
    have been rejected by our automatic <a href="passmean/index.php">quality
    control</a>. At present this includes the very-most
    recent days' data from some satellites because a sufficiently-accurate estimate of the satellite's orbit is not available.
    The switch to RADS has allowed us to make use of newer versions of some of the quantities that need to be estimated
    in order to calculate sea surface height anomaly from radar range. This has resulted in closer agreement between the
    satellites, and a reduction of the combined estimate of sea surface height anomaly (particularly in the tropical
    west Pacific, by 0.1m), bringing the satellite-based estimate into
    <a href=../profiles/map/20111209.html> closer
        agreement </a> with the Argo estimates of steric anomaly. (This result needs further investigation.
    More information will be provided in the
    <a href=../misc/technical.htm>technical details</a> section when available.)
    <p>
        Maps made prior to 9 December 2011 used data from individual sources:
        Envisat <a href="../glossary.htm#IGDR" target="blank">IGDR</a> and GDR from ESA, Topex/Poseidon, Jason-1 and
        Jason-2 IGDR and GDR from AVISO and/or <a href="http://podaac.jpl.nasa.gov/" target="blank"> Physical
            Oceanography DAAC at NASA Jet Propulsion Laboratory </a>, and GFO NGDR-Ms and GDRs from <a
            href=http://ibis.grdl.noaa.gov/SAT/gfo/ target="blank">NOAA/LSA</a>. We also used the low-latency NRTSSHA
        product for Jason-1 and <a href="ftp://podaac.nasa.gov/allData/envisat/preview/L3/" target="blank"> Envisat</a>
        generated by the Orbiter and Radio Metric Systems Group at JPL.
    <p>
    <h3>Sea Surface Temperature</h3>
    The <a href=http://imos.org.au/srs.html>Satellite Remote Sensing
    Facility</a> of IMOS, through the Bureau of Meteorology, produces a variety of data products derived from the AVHRR
    sensor on the NOAA satellites. The high-resolution images shown on this website use the L3U product. We monitor the
    availability over the last 30 days and region-specific coverage of this data set using our
    <a href=../L3U_pcg/latest.html>[<b>SST data coverage
            monitoring</b>]</a> system. The analysis is repeated three times a day. In the upper panel, red indicates
    high data density while blue can mean either cloudy conditions, or lack of data from the satellites. The lower panel
    shows the availability of data from individual NOAA satellites.
    <h3>Australian National Moorings Network</h3>
    <a href=http://data.aims.gov.au/moorings/>Northern Australian shelf moorings (AIMS site)</a>.<br>
    <a href=http://www.csiro.au/tasman/nrsweb/>National Reference Stations (CSIRO site)</a>.
    <p>
    <h3>MODIS Chlorophyll-a</h3>
    As of June 2014, these data are now sourced from a <a
    href=http://rs-data1-mel.csiro.au/thredds/catalog/imos-srs/oc/aqua/catalog.html>CSIRO thredds server</a>. See the
    <a href=http://imos.org.au/srs.html>Satellite Remote Sensing Facility</a> page for details.
    <p>
    <h3>Sea Surface Height Anomaly from tidegauges</h3>
    To be written. Links:<br>
    <a href="http://www.bom.gov.au/oceanography/projects/ntc/ntc.shtml" target="blank">National Tidal Centre</a><br>
    <a href="http://www.epa.qld.gov.au/tides" target="blank">Queensland EPA</a> <br>
    <a href="http://www.mhl.nsw.gov.au/" target="blank">Manly Hydraulics Laboratory</a><br>
    <a href="http://www.transport.wa.gov.au/imarine/19263.asp" target="blank">WA Department of Transport</a>

    <h3>Surface Drifting buoys</h3>
    <a href="http://www.aoml.noaa.gov/phod/dac/dacdata.html" target="blank"> Drifting Buoy Data Assembly Center</a>
    <hr>
    <b>Data product intercomparisons</b> (work-in-progress)<br>
    CSIRO 3-day composite and IMOS L3S_3day (day-only and/or night-only averages). The latter will replace the former as the source data for the larger-scale maps shown on this website.
    <br>
    <a href=L3S_3d_SW_t/>[SW]</a>
    <a href=L3S_3d_d_CGAB_t/>[GAB d]</a>
    <a href=L3S_3d_n_CGAB_t/>[GAB n]</a>
    <a href=L3S_3d_CGAB_t/>[GAB]</a>
    <a href=L3S_3d_SE_t/>[SE]</a>

    <h3>Argo</h3>
    The latest Argo data are downloaded daily from the <a href=ftp://ftp.ifremer.fr/ifremer/argo/latest_data/> ARGO GDAC
    FTP
    site</a>.



<?

include("include/footer.php");
?>