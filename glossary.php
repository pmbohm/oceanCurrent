<?
$title = "Glossary";
ini_set('include_path', './' . PATH_SEPARATOR .  '../' . PATH_SEPARATOR . ini_get('include_path'));
include_once("include/header.php");
?>

    <b>Some explanation of oceanographic terminology, techniques and principles</b>
    <p>
    <dl>

        <dt> <a name= "altimeter"> altimeter </a>
        <dd>
            <img align=right src="misc/orbit720.gif">
            A satellite altimeter measures the range from the satellite to the sea surface directly below using a very precise radar. The orbital position of the satellite is also known very precisely because altimetry satellites use a combination of GPS, DORIS and laser ranging to carefully monitor the orbit of the satellite. The difference of the range and the orbit is the height (averaged over space - the 2km-radius footprint of the radar, and time - 1Hz averages are about 7km apart) of the sea surface (effectively relative to the center of the Earth). Amazingly, the <a href=#SSH>sea surface height </a> can be determined to centimeter accuracy, once a number of corrections are made, e.g. for the wet troposphere path delay, the sea-state bias and the instrumental bias. The Topex/Poseidon and Jason missions are in orbits that take 10 days to finish re-sampling a criss-crossing pattern of ascending (/) and descending (\) passes sampling ground tracks which are about 250km apart at mid-latitudes. <a href=misc/orbit.fli> [play orbit movie; shows half a 10-d cycle] </a>. The ERS and Envisat ground tracks are about 160km apart at mid-latitudes, but are re-sampled only every 35 days. The GFO mission is intermediate, with a 17-d repeat cycle. <a href=misc/tr1996.fli> [play movie of Topex/Poseidon and ERS along-track sea level measurements off WA]</a>. More information: <br>
            <a href="http://sealevel.jpl.nasa.gov/" target="blank">Sea Level at NASA JPL</a> <br>
            <a href="http://www.aviso.oceanobs.com/en/home/index.html" target="blank"> AVISO</a> <br>
            <a href="http://ibis.grdl.noaa.gov/SAT/index.html" target="blank">NOAA</a> <br>
            <a href="http://www.eumetsat.int/Home/Main/Satellites/Jason-2/index.htm?l=en" target="blank">EuMetSat Jason-2</a> <br>
            <a href="http://www.esa.int/esaEO/SEMWYN2VQUD_index_0_m.html" target="blank">ESA  Envisat</a>
            <a href="http://www.esa.int/SPECIALS/Cryosat/index.html" target="blank">ESA CryoSat</a> <br>
            <a href="http://www.altimetry.info/" target="blank">ESA/CNES altimetry tutorial</a>

        <dt> <a name="AVHRR"> AVHRR </a>
        <dd> Advanced Very High Resolution Radiometer. A sensor carried by the <a href=http://www.noaa.gov/>US National Ocean and Atmosphere Administration (NOAA)</a> satellites which oceanographers use to measure Sea Surface Temperature (SST). The pixel size is about 1km and accuracy about +/-0.6&#176C. The NOAA satellites broadcast the data continuously, so any groundstation that can see the satellite can receive the data. Several satellite passes per day are tracked, received, processed and
            archived at <a href=http://www.dola.wa.gov.au/home.nsf/(FrameNames)/Satellite+Images> WASTAC </a> in Perth, <a href=http://www.bom.gov.au>Bureau of Meteorology</a> in Melbourne, <a href=http://www.marine.csiro.au/~lband/index.html> CSIRO</a> in Hobart and <a href=http://www.auslig.gov.au/acres/index.htm> ACRES</a> in Alice Springs.

        <dt> <a name="CAST2008"> CAST2008 Mean Dynamic Topography</a>
        <dd> This is an estimate of the Mean Dynamic Topography made by Ken Ridgway and colleagues at CSIRO. It results from running the Bluelink global ocean model (OFAM) with very strong nudging to the three-dimensional, seasonally varying, <a href=#CARS>CARS</a> climatological temperature and salinity fields.

        <dt> <a name="CARS"> CARS - the CSIRO Atlas of Regional Seas</a>
        <dd>The name is no longer very appropriate, since the <a href=http://www.marine.csiro.au/~dunn/cars2009/>CARS2009 </a> version of this season-resolving hydrographic atlas covers the entire globe. It is produced by interpolating all available in-situ observations of hydrographic properties onto a regular three-dimensional grid. The result is a set of harmonic constants for the yearly and semi-annual components of the variability as well as the all-time mean. The sudden increase in the amount of data provided by the <a href=../profiles/map/latest.html>Argo</a> programme means that the atlas is not really a long-term average so it is best to interpret it as simply an average of all available data, binned by time-of-year, but not year itself.

        <dt> <a name="CTW"> Coastal Trapped Wave</a>
        <dd> otherwise known as a topographic Rossby Wave, a Coastal Trapped Wave is a large-scale, sub-inertial wave with the striking property of only propagating <em>along</em> the continental margin, rather than in whatever direction it is forced. In the southern hemisphere, a CTW propagates with the coast on its left. CTWs generated by cyclones off the north-west shelf can be tracked all the way to Victoria. CTWs generated in the Great Australian Bight have an effect at Sydney. Real-world CTWs have properties in common with two sorts of idealised waves. The propagation speed of (barotropic) Continental Shelf Waves depends on the width and slope of the continental margin, while (baroclinic) Internal Kelvin Waves propagate along vertical (by definition) boundaries in the presence of stratification. Thus, the phase (and group) speed of the CTW is determined by the shape of the shelf and the strength of the stratification, and ranges from 10m/s (e.g. where the shelf is very wide) to 1m/s or even less in some places. Pulses of current, sometimes up to 0.5m/s, accompany the sea level signal and there is also an effect on the depth of the thermocline that mirrors the sea level signal. Harmonic solutions (i.e. periodic in time) of the CTW equations comprise a number of discrete wavenumbers for each frequency. High mode-number solutions have progressively shorter along-shelf wavelengths (and therefore lower phase speed) and progressively more antinodes in the across-shelf amplitudes of sea level, velocity and thermocline displacement.

        <dt> <a name="Coriolis"> Coriolis force</a>
        <dd> the `pseudo-force' on an object moving with respect to a rotating frame of reference. A cannon shell appears to veer left in the southern hemisphere, and right in the northern hemisphere.

        <dt> <a name="Ekman"> Ekman velocity</a>
        <dd> A steady wind blowing over the open ocean causes the surface layer of water to move at a velocity (called the 'Ekman velocity') which is such that the <a href=#Coriolis> Coriolis force</a> on the layer balances the force of the wind. Hence, a wind from the south drives an Ekman velocity towards the west, in the southern hemisphere. The thickness of this layer is variable, with 30-50m being fairly typical. The Ekman velocity is additional to whatever velocity the surface layer was moving at before the wind commenced, and takes a day or two to settle down to being at right angles to the wind. The oscillations that follow a sudden change of the wind stress are called inertial oscillations.

        <dt> <a name="GSLA"> Gridded Sea Level Anomaly</a>
        <dd> This is the name used on this website for the gridded maps of <a href=#SLA>Sea Level Anomaly</a> that we make by combining the data from many <a href=#altimeter> altimeters </a> and tide gauges. Being a two-dimensional map, it is possible to use the very simple and surprisingly-accurate <a href=#geostrophic>geostrophic</a> equations to determine the surface velocity field associated with the surface pressure gradient caused by the gradient of GSLA (as distinct, for example, from the <a href=#ekman>Ekman velocity</a> and the Stokes drift). Most of the graphics, however, show the velocity field determined from <a href=#GSL>Gridded Sea Level</a>.

        <dt> <a name="GSL"> Gridded Sea Level</a>
        <dd>  Gridded Sea Level (GSL) is the name we use for our estimate of the Dynamic Topography obtained by adding the <a href=#CAST2008>CAST2008 Mean Dynamic Topography</a> to <a href=#GSLA>Gridded Sea Level Anomaly (GSLA)</a>. Geostrophic currents computed from GSL include the time-mean and are therefore much more directly comparable with in-situ measurements of surface current velocity such as those determined from the trajectories of <a href=#GLD>surface drifters</a>. Why do we need to use CAST2008? While the <a href=#geoid> geoid</a> remains unknown with sufficient spatial resolution, the only way to remove the influence of the geoid from altimetric measurements of the Sea Surface Height is to subtract the long-term-mean of the observations, which, unfortunately, also subtracts the time-mean component of the Dynamic Topography.

        <dt> <a name="geostrophic">  geostrophic </a>
        <dd> balance of pressure gradient and the <a href=#Coriolis>Coriolis force</a>. In the southern hemisphere, a northward current is geostrophically balanced by sea level slope rising to the west. Similarly, an anti-clockwise rotating body of water, or 'eddy' has elevated sea level in the centre. <b>Slowly-varying</b> (ie, over several days and over 'large', e.g. 50km or more, distances) currents are invariably close to being geostrophic, so by measuring either the current velocity or the slope of sea level, the other can be calculated. The same principle applies in meteorology: the wind blows anticlockwise around a high pressure system in the southern hemisphere, and clockwise around a low, or cyclonic, system. More rapidly-varying (in time or space) sea level slopes are much less likely to be geostrophic, so estimation of velocity from sea level requires many other factors to be taken into account, such as the wind stress, curvature of the sea level gradients, etc.

        <dt> <a name="geoid"> geoid </a>
        <dd> The surface to which the ocean would conform if all the ocean currents came to rest. It is a very irregular surface, with highs and lows of 30m or more that mirror the small-scale and large-scale irregularities of the Earth's gravity, due, for example, to variations of the depth of the ocean. The difference between the Mean Sea Surface (MSS) and the geoid is called the Mean Dynamic Topography.

        <dt> <a name="IGDR"> Interim Geophysical Data Record</a>
        <dd> The name given to the several-day-old altimetry data product that first made it possible in ~2000 to use altimetry for near-real-time applications. The key difference between the hours-old FGDR data stream and the months-old GDR data stream is the accuracy of the orbit.

        <dt> <a name="IB"> Inverse barometer</a>
        <dd> To a fairly good approximation, a local reduction of atmospheric pressure of 10hPa leads to a sea level rise of 10cm. This rise of sea level will be recorded by tidegauges and satellites but needs to be removed in order to monitor the internal dynamics of the ocean, because the important quantity is the total pressure just below the ocean surface, which is the atmospheric pressure plus the hydrostatic pressure due to any local elevation of the sea surface.

        <dt> <a name="isostatic"> isostatic adjustment </a>
        <dd> When we refer to 'isostatically-adjusted' sea level, we mean we have subtracted the 'inverse barometer' response of sea level to fluctuations of local atmospheric pressure.

        <dt> <a name="SLA"> Sea Level Anomaly</a>
        <dd>This is the commonly used, abbreviated name for the quantity from which the time-varing component (ie, the 'anomaly' or difference from the time-mean) of the <a href=#geostrophic> geostrophic</a> current velocity can be computed.  Sometimes the terms 'subtidal' and 'adjusted' are also pre-pended to make it unambiguous that the variations of sea level due, respectively, to the high frequency tides (diurnal, semi-diurnal, ter-diurnal, etc) and <a href=#IB> inverse barometer effect </a> are <b>not</b> included. SLA can be derived from tidegauge and/or altimeter along-track measurements of <a href=#SSH>Sea Surface Height</a>. The very irregular timing and spacing of SLA data make it very attractive to use the data after it has been mapped onto a regular grid, interpolated to a point in time. We call this product <a href=#GSLA>Gridded Sea Level Anomaly</a>.

        <dt> <a name="SSH"> Sea Surface Height</a>
        <dd>The spatial structure of the Sea Surface Height is mostly due to the undulations of the <a href=#geoid>geoid</a>. Only a small part of the variability is due to the mean and time-varying components of the 'dynamic topography' associated with ocean circulation. The shape of the geoid is not known precisely, but we can assume that it does not vary much with time. The average over time of the altimetric sea surface height (the Mean Sea Surface) is the sum of the geoid and the mean dynamic topography. By subtracting the MSS from altimeter measurements of the Sea Surface Height we are therefore left with the variable part of the dynamic topography. From this we subtract model estimates of the high frequency signals due to tides and the <a href=#IB>inverse barometer </a> effect, leaving an estimate of the <a href=#SLA>Sea Level Anomaly</a> which can be used to map the time-varying part of the highs and lows of the ocean surface around which the transient component of <a href=#geostrophic> geostrophic</a> currents flow.

        <dt> <a name="SST"> SST </a>
        <dd> Sea Surface Temperature. Usually measured either continuously from ship
            at the depth of the engine water intake, or remotely by satellite (see <a href=#AVHRR>AVHRR</a>) or airplane.

        <dt> <a name="synTS"> synTS </a>
        <dd>short for 'synthetic temperature and salinity'. This data product is also described on this website as 'Satellite adjusted climatology' as explained at <a href=profiles/whatsshown.htm>[what's shown]<a>. The synTS method is described by <a href=misc/references.htm>Ridgway and Dunn (2010)</a>.

                    <dt> <a name="GLD"> Surface Drifter</a>
                    <dd>The principle method for validating our altimetric surface velocity estimates is by comparing them to the velocity of Surface Drifters, or <a href="http://www.aoml.noaa.gov/phod/dac/dacdata.php">Global Lagrangian Drifters</a>. These buoys are tracked by the Argos positioning system (not to be confused with the Argo floats) and have a 10m long sea-anchor at the end of a 10m wire, to minimise their down-wind velocity, thus reducing their sensitivity to those components of the surface current velocity to which the altimeters are blind.

                    <dt> <a name="upwelling"> upwelling </a>
                    <dd> when water is drawn to the surface from great depth. It is a very significant phenomenon because it makes nutrients that have settled to depth become available again to phytoplankton living within the depth of penetration of sunlight. Various
                        forces drive upwelling. At the coast, alongshore winds that have the coast on their right in the southern hemisphere drive the surface waters away from the coast in the Ekman layer. That water has to be replaced, so it rises from below. The place where this happens most strongly in Australia is known as the Bonney Coast, between Portland and Robe.

                    <dt> <a name="wind stress"> wind stress </a>
                    <dd> The effect on the ocean of the wind increases greatly as the wind velocity increases. The wind stress is a measure of this effect and is approximately proportional to the square of the wind velocity.

    </dl>

<?

include("include/footer.php");
?>
