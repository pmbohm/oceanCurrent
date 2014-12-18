<?php echo $debug ?><?php echo $error ?>

<div class="voffset4"></div>
<h5><?php echo $imgNameDate ?></h5>

<nav class="navbar navbar-default mapNavbar" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <nav class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="pager zeroMargin">
            <li class="previous"><a class="" href="<?php echo $relativeFolderPath ?>/<?php echo $previous ?>"
                                    onclick="setProxiedHtms('<?php echo $relativeFolderPath ?>/<?php echo $previous ?>');return false;"
                                    alt="Previous available time period for <?php echo $relativeFolderPath ?>"
                                    title="Previous available time period for <?php echo $relativeFolderPath ?>">
                    <span aria-hidden="true">&larr;</span> Previous</a></li>
            <li class="previous"><a class="" href="<?php echo $relativeFolderPath ?>/<?php echo $next ?>"
                                    onclick="setProxiedHtms('<?php echo $relativeFolderPath ?>/<?php echo $next ?>');return false;"
                                    alt="Next available time period for <?php echo $relativeFolderPath ?>"
                                    title="Next available time period for <?php echo $relativeFolderPath ?>">Next
                    <span aria-hidden="true">&rarr;</span></a></li>
            <li class="next"><a href="<?php echo $datePickerUrl ?>" alt="date picker"
                   onclick="setProxiedHtms('<?php echo $datePickerUrl ?>');return false;">Date Picker</a></li>

        </ul>
    </nav>
    <?php //.navbar-collapse ?>
</nav>
<ul class="nav navbar-right nav-pills mini-nav">
    <li role="presentation" class="dropdown">
        <a href="#"
           data-toggle="modal"
           data-target="#featuredMapModal"
           role="button">
            <span class="glyphicon glyphicon-resize-full" aria-hidden="true"></span> see full size </a></li>
</ul>
<div class="mapImage">
    <a href="#"
       data-toggle="modal"
       data-target="#featuredMapModal">
        <img src="<?php echo $imageUrl ?>" alt="Loading <?php echo $imageUrl ?>">
    </a>
</div>
<script>
    imgSizer("div#proxiedPagesContainer");
    fitModal2Window();
    if (<?php echo $popup ?>) {
        $('#featuredMapModal').modal({'show':true});
    }
</script>

<?php // modal frame for graphs/charts/maps ?>
<div class="modal" id="featuredMapModal" tabindex="-1" role="dialog" aria-labelledby="featuredMapModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h5 class="modal-title" id="fullImageLabel"></h5>
                <ul class="pager zeroMargin">
                    <li class="previous"><a class="" href="<?php echo $relativeFolderPath ?>/<?php echo $previous ?>"
                                            onclick="setProxiedHtms('<?php echo $relativeFolderPath ?>/<?php echo $previous ?>','','true');return false;"
                                            alt="Previous available time period for <?php echo $relativeFolderPath ?>"
                                            title="Previous available time period for <?php echo $relativeFolderPath ?>">
                            <span aria-hidden="true">&larr;</span> Previous</a></li>
                    <li class="previous"><a class="" href="<?php echo $relativeFolderPath ?>/<?php echo $next ?>"
                                            onclick="setProxiedHtms('<?php echo $relativeFolderPath ?>/<?php echo $next ?>','','true');return false;"
                                            alt="Next available time period for <?php echo $relativeFolderPath ?>"
                                            title="Next available time period for <?php echo $relativeFolderPath ?>">Next
                            <span aria-hidden="true">&rarr;</span></a>

                    </li>
                    <li class="previous">
                        <span> &nbsp;
                            <label class="checkbox-inline">
                                <input id="forceFitToggle" checked data-toggle="toggle" type="checkbox"> Fit Images
                            </label>
                            <script>
                                createForceFitToggle();
                            </script>
                        </span>
                    </li>
                    <li><h4 class="modal-title" > (<?php echo $imgNameDate ?>) &nbsp; <a href="<?php echo $imageUrl ?>" target="_blank" alt="open in new tab" >
                                <?php echo $imageUrl ?></a></h4></li>

                </ul>
            </div>
            <div class="modal-body">
                <img src="<?php echo $imageUrl ?>" alt="<?php echo $imageUrl ?>" title="<?php echo $imageUrl ?>">
            </div>
        </div>
    </div>
</div>
