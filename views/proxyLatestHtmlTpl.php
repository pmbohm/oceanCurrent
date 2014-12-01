<?php echo $debug ?><?php echo $error ?>

<?php
   // todo There needs to be a variable set in the area tag to identify a region
   // <area title="uv" href="uv/latest.html" coords="118,111,205,144" shape="rect" region="true"
   //
?>
<?php if ($regionalMap) { ?>
    <h3>Map of the '<?php echo $relativeFolderPath ?>' region. <span><?php echo $imgNameDate ?></span></h3>
<?php
} else {
    ?>
    <h3>Map of '<?php echo $relativeFolderPath ?>' <span><?php echo $imgNameDate ?></span></h3>
<?php } ?>

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
        <ul class="pager mapPager">
            <li class="previous"><a class="" href="<?php echo $relativeFolderPath ?>/<?php echo $previous ?>"
                                    onclick="setProxiedHtms('<?php echo $relativeFolderPath ?>/<?php echo $previous ?>');return false;"
                                    alt="Previous available time period for <?php echo $relativeFolderPath ?>"
                                    title="Previous available time period for <?php echo $relativeFolderPath ?>">
                    <span aria-hidden="true">&larr;</span> Previous</a></li>
            <li><a href="<?php echo $datePickerUrl ?>" alt="date picker"
                   onclick="setProxiedHtms('<?php echo $datePickerUrl ?>');return false;">Date Picker</a></li>
            <li class="next"><a class="" href="<?php echo $relativeFolderPath ?>/<?php echo $next ?>"
                                onclick="setProxiedHtms('<?php echo $relativeFolderPath ?>/<?php echo $next ?>');return false;"
                                alt="Next available time period for <?php echo $relativeFolderPath ?>"
                                title="Next available time period for <?php echo $relativeFolderPath ?>">Next
                    <span aria-hidden="true">&rarr;</span></a></li>
        </ul>
    </nav>
    <?php //.navbar-collapse ?>
</nav>
<ul class="nav navbar-right nav-pills mini-nav">
    <li role="presentation" class="dropdown">
        <a href="#"
           data-toggle="modal"
           data-target="#basicModal"
           role="button"
           onClick="setModelImageUrl('<?php echo $imageUrl ?>')">
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
