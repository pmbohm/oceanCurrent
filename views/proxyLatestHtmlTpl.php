<?php echo $debug ?><?php echo $error ?>


<?php if ($notARegion) { ?>
    <h3>Map of '<?php echo $folderName ?>' <span><?php echo $imgNameDate ?></span></h3>
<?php
} else {
    ?>
    <h3>Map of the '<?php echo $folderName ?>' region. <span><?php echo $imgNameDate ?></span></h3>
<?php } ?>

<nav class="navbar navbar-default mapNavbar" role="navigation">
    <div class="container">
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
            <ul class="pager mapPager">
                <li class="previous"><a class="" href="<?php echo $folderName ?>/<?php echo $previous ?>"
                                        onclick="setProxiedHtms('latest','<?php echo $folderName ?>/<?php echo $previous ?>');return false;"
                                        alt="Previous available time period for <?php echo $folderName ?>"
                                        title="Previous available time period for <?php echo $folderName ?>">
                        <span aria-hidden="true">&larr;</span> Previous</a></li>
                <li><a href="<?php echo $datePickerUrl ?>" alt="date picker" onclick="setProxiedHtms('index','<?php echo$datePickerUrl?>');return false;">Date Picker</a></li>
                <li class="next"><a class="" href="<?php echo $folderName ?>/<?php echo $next ?>"
                                    onclick="setProxiedHtms('latest','<?php echo $folderName ?>/<?php echo $next ?>');return false;"
                                    alt="Next available time period for <?php echo $folderName ?>"
                                    title="Next available time period for <?php echo $folderName ?>">Next
                        <span aria-hidden="true">&rarr;</span></a></li>
            </ul>
        </nav>
        <?php //.navbar-collapse ?>
    </div><?php //.container-fluid ?>
</nav>

<ul class="nav navbar-right nav-pills mini-nav">
    <li role="presentation" class="dropdown">
    <a href="#"
       data-toggle="modal"
       data-target="#basicModal"
       role="button"
       onClick="setModelImageUrl('<?php echo $imageUrl ?>')" >
        <span class="glyphicon glyphicon-resize-full" aria-hidden="true"></span> see full size </a></li>
</ul>


<div class="mapImage">
    <a href="#"
       data-toggle="modal"
       data-target="#basicModal"
       onClick="setModelImageUrl('<?php echo $imageUrl ?>')">
        <img src="<?php echo $imageUrl ?>" alt="Loading <?php echo $imageUrl ?>">
    </a>
</div>
<script>
    imgSizer();
</script>
