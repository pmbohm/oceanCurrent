<?php
$title = "Whats Shown";
ini_set('include_path', './' . PATH_SEPARATOR . '../' . PATH_SEPARATOR . ini_get('include_path'));
include_once("include/header.php");
?>

    <h2>What's shown</h2>

    <div class="alert alert-info">January 2015: This page is under reconstruction due to site updates
    </div>
    <div class="alert alert-info">June 2012 comment: The site has had a number of recent additions, namely the ACORN
        (HF radar),
        ANMN (moorings), SOOP(ship) and MODIS (chlorophyll) data, that are not yet described here.
    </div>

    <article>
        <h3>SST High-resolution zoom-ins  <a href="<?php echo  $BASEDIR ?>sst.php" class="btn btn-primary inlineButton" type="button">SST Maps <span
                    class="badge">GO</span></a></h3>

        <p>These local-scale, single-panel maps of sea surface temperature and currents are designed for being viewed as
            animations.
            For every overpass of a NOAA satellite, we generate a new image frame which is the previous one updated only
            where there
            are data of good quality in clear-sky regions. If those clear-sky regions are large and last for several
            satellite overpasses,
            animation of the imagery reveals the ocean currents clearly. Where the clear-sky regions are small and
            transient, however,
            this process leads to a messy patchwork of little value. View the animation (reached via the [Date Index]
            link)
            several times and you will see the varying quality and usefullness of the images as the weather swings
            between clear and cloudy.
            Please note that day-time satellite passes, especially in warmer regions, can be affected by a 'warm skin'
            effect that occurs
            if there is very little wind. Am affected image shows an accurate measurement of sea <em>surface</em>
            temperature, but for
            visualizing the ocean currents, we would prefer, unfortunately, to see the temperature just below the
            surface. <b>Dec 2011 update</b>:
            These animations now use the <a
                href=http://aodaac2-cbr.act.csiro.au:8080/thredds/catalog/imos/GHRSST/L3U/catalog.html>L3U</a>
            SST data produced by the BoM for the <a href=http://imos.org.au/srs.html>IMOS Satellite Remote Sensing
                Facility</a>.
            One benefit of using the L3U is that we can now produce high-resolution maps and animations for more regions
            around Australia.
            Another is that a 'quality level' is provided. We are using pixels of quality level 3, 4 or 5. On the colour
            bar you now see 'XX% ql>=3',
            meaning that the latest image had usable data for XX% of the area shown. Note that if a satellite pass does
            not yield at least 10%
            new data for the region shown, then the partially-updated image is not saved. Its data will be seen in the
            next image saved
            (except where it is overwritten by newer data). So when you click through images, bear in mind that the
            frame-to-frame change
            only occurred in the time interval between the two satellite passes for those few locations that had new
            data at both times.
            Note also that if heavy cloud persists for days, this filtering can make it seem that the website is not
            updating.
        </p>
        <p>
            To view the animations you will need software to play fli-format files, eg Quicktime or Aawin <a
                href=<?php echo $BASEDIR ?>install.htm>[help]</a>.
            The animations are all updated <b> three times</b> a day, and show the last 14 days of imagery. The
            individual frames are
            also provided for users with only low-bandwidth connections, and for printing.
        <p>
            Overlain on the temperature imagery are the <a href=<?php echo $BASEDIR ?>glossary.htm#GSL>sea level</a> (contours
            at 0.1m; see description below), t
            he geostrophic current velocity derived from that, and the positions of Surface Velocity Programme drifters
            and deep-drifting, surface-profiling Argo floats <a href="<?php echo $BASEDIR ?>sourcedata/">[FFI]</a>. The arrows
            show how far the water at the base of the arrow would move in 24h.
            Note that the sea level information is a few days older than the latest temperature image, because it takes
            many days for the <a href=<?php echo $BASEDIR ?>glossary.htm#altimeter>altimeters</a> to sample the globe.
        </p>
        <p><b>December 2011 update</b>: this gridded sea level anomaly and derived geostrophic velocity is now produced by
            CSIRO for the <a href=http://imos.org.au/srs.html>IMOS Satellite Remote Sensing Facility</a> and is
            <a href="http://opendap-vpac.arcs.org.au/thredds/catalog/IMOS/OceanCurrent/GSLA/NRT00/catalog.html">
                available</a>.
        <p>
            Some example animations of clear-sky periods:<br>
            <a href=<?php echo $BASEDIR ?>misc/Ningaloo2007.AVI> [Ningaloo, 7 Nov 2007 - AVI format]</a>
            <a href=<?php echo $BASEDIR ?>misc/Syd20070315.fli> [Sydney, 15 March 2007 - fli format]</a>
            <a href=<?php echo $BASEDIR ?>misc/Syd20070315.AVI> [Sydney, 15 March 2007 - AVI format]</a>
    </article>

    <article>
        <h4>Regional maps<?php // todo ?> <a href="<?php echo $BASEDIR ?>sst.php" class="btn btn-primary inlineButton" type="button">SST Maps <span
                    class="badge">GO</span></a></h4>
        <p>The colour-coded field is a map of tidal-residual, <a href=<?php echo $BASEDIR ?>glossary.htm#isostatic>isostatically-adjusted</a>
            <a href=<?php echo $BASEDIR ?>glossary.htm#GSLA> sea level anomaly</a>, valid for the analysis date <b>T_a</b>
            shown, which is normally five days ago. By 'tidal residual', we mean that the (relatively) rapid
            oscillations of sea level associated with tides are excluded. By 'anomaly', we mean the difference from the
            long-term average. The atmospheric pressure map (blue contours are lows, white contours are high) used for
            making the isostatic adjustment is shown because features of the circulation (eg near the coast, or under a
            tropical cyclone) can sometimes be explained by the winds.
        </p>
        <p>How do we know that the ocean has areas where the water is raised or lowered by half a meter or so, for 100's
            of km?. If you look closely, you will see lines of little white, magenta or black dots. These lines show
            where satellites carrying <a href=<?php echo $BASEDIR ?>glossary.htm#altimeter><b>radar altimeters</b></a> have
            flown over, measuring the distance from the satellite down to the water. That distance is a little shorter
            where the sea level is raised a bit. The fact that that difference can be accurately measured is a great
            triumph of engineering, and is one of the key breakthroughs responsible for the present revolution in ocean
            observation. The colour of the dot indicates when the satellite flew over. White means more recently than
            <b>T_a</b>, magenta means the three days previous, black means longer ago.
        <p>
            The <b>four</b> satellites presently (December 2011) flying altimetry missions are called Jason-1, Jason-2,
            EnviSat and CryoSat. The bar plot shows the history, from 7 days before, to 3 days after <b>T_a</b>, of the
            daily number of observations made by each of these, within the region shown. (More precisely, each sea level
            'observation' is a 2km-wide average along 25km of the flight path). The satellites can't sample the whole
            world every day because they can only measure directly beneath them. To make a complete 'quasi-synoptic'
            map, we must therefore use data that is up to 10 days old. The ocean changes more slowly than the
            atmosphere, so that is OK. The older data points are down-weighted compared to the newer ones in making the
            map. Where there is only old data or no data at all, the estimated anomaly relaxes to zero and the map is
            obviously least useful.
        <p>
            The other (and much older) way of measuring sea level is by tide gauge. Australia has many of these in ports
            all around the country <a href="<?php echo $BASEDIR ?>sourcedata/">[FFI]</a>. We include these data in our maps by
            averaging-out the tides and making the same atmospheric pressure correction as with the altimeter estimates,
            then interpolating the results at many points along the coastline between the gauges. Both the observed and
            interpolated coastal observations are shown on the map. Coastal sea level changes more rapidly than
            deep-ocean sealevel, so it is just as well that the coastal observations are made much more frequently than
            those by satellite over the deep sea.
        <h4>Regional maps</h4>
        <p>The right panel shows the sea level map again, but this time as total sea level, ie, the anomaly plus an <a
                href=<?php echo $BASEDIR ?>glossary.htm#CAST>CAST2008</a> estimate of the mean surface dynamic height with
            respect to 2000m included. Being overlain on SST, it is shown just as white contour lines. The result is the
            oceanographer's weather-map, with sea level taking the place of air pressure, and ocean current taking the
            place of the wind. The physics associated with the earth's rotation is analogous to weather systems: <a
                href=<?php echo $BASEDIR ?>glossary.htm#geostrophic>geostrophic</a> currents run with the high on their left
            in the southern hemisphere. Black arrow heads depict the direction and strength of the ocean currents.
            Reference should be made to the distribution (left panel) of the available data in order to judge the
            reliability of these estimates. Where no recent data are available, this map will show our estimate of the
            time-mean sealevel slopes and currents (the reliability of which also varies regionally depending on
            numerous factors).
        </p>
        <p>The colour-coded field is a map of Sea Surface Temperature (SST) which is formed by compositing single images
            over a three-day period, in order to obtain a relatively cloud-free map without averaging-out useful detail.
        </p>
        <p>The SST map is best for precisely locating where the ocean currents are, while the sea level map is good for
            resolving ambiguities of which way the currents are generally flowing, and whether they are weak or strong.
            The accuracy of both maps is instructively judged by comparing them with the trajectories and speeds of
            Surface Velocity Program (SVP) drifters <a href="<?php echo $BASEDIR ?>sourcedata/">[FFI]</a>, which are shown in
            magenta. Drifters can sometimes travel at up to twice the speed that we estimate from the sea level maps
            because they measure the velocity at a point, while the map shows the average over many kilometers and a
            period of days.
        </p>
        <p>
            <b>Please note:</b> neither the satellite nor the coastal sealevel near-real-time data streams are fully
            quality-controlled, and <b>errors do occur</b>.
        </p>
    </article>


    <article>
        <h4>Large Area Australasian maps <a href="<?php echo  $BASEDIR ?>sst.php" class="btn btn-primary inlineButton" type="button">SST Maps <span
                    class="badge">GO</span></a></h4>
        <p>When you enter this series of maps of the Australasian region, you are first shown a map of the Sea Surface
            Temperature seasonal anomaly. This is the difference of SST (composited over 6 days) from the <a
                href=<?php echo  $BASEDIR ?>glossary.htm#CARS>CARS2009</a> atlas estimate for the time of year. Also shown are
            contours of isostatically-adjusted sea level, geostrophic current velocities and drifters as described
            above.
        </p>
        <p>[sst_s] and [sst_n]: These links take you to plots of the 6-day composite of SST, with appropriate (for the
            time
            of year) temperature scales for the southern and northern waters, respectively.
        </p>
        <p>[ht] shows the sea level height anomaly map overlaid with the data used in its estimation, as well as
            atmospheric
            pressure.
        </p>
        <p>[uv] shows the sea level with the <a href=<?php echo $BASEDIR ?>glossary.htm#CAST>CAST2008</a> estimate of the mean
            surface dynamic height with respect to 2000m included, and the geostrophic surface velocity field.
        </p>
        </p>
    </article>


<?php
include("include/footer.php");
?>