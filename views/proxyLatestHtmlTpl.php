<?= $debug ?><?= $error ?>


<? if ($notARegion) { ?>
    <h3>Map of '<?= $folderName ?>' <span><?= $imgNameDate ?></span></h3>
<?
} else {
    ?>
    <h3>Map of the '<?= $folderName ?>' region. <span><?= $imgNameDate ?></span></h3>
<? } ?>

<nav class="navbar navbar-default mapNavbar" role="navigation">
    <div class="container-fluid">
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
                <li class="previous"><a class="" href="<?= $folderName ?>/<?= $previous ?>"
                                        onclick="setProxiedHtms('latest','<?= $folderName ?>/<?= $previous ?>');return false;"
                                        alt="Previous available time period for <?= $folderName ?>"
                                        title="Previous available time period for <?= $folderName ?>">
                        <span aria-hidden="true">&larr;</span> Previous</a></li>
                <li><a href="<?= $datePickerUrl ?>" alt="date picker" onclick="setProxiedHtms('index','<?=$datePickerUrl?>');return false;">Date Picker</a></li>
                <li class="next"><a class="" href="<?= $folderName ?>/<?= $next ?>"
                                    onclick="setProxiedHtms('latest','<?= $folderName ?>/<?= $next ?>');return false;"
                                    alt="Next available time period for <?= $folderName ?>"
                                    title="Next available time period for <?= $folderName ?>">Next
                        <span aria-hidden="true">&rarr;</span></a></li>
            </ul>
        </nav>
        <? //.navbar-collapse ?>
    </div><? //.container-fluid ?>
</nav>

<ul class="nav navbar-right nav-pills mini-nav">
    <li role="presentation" class="dropdown">
    <a href="#"
       data-toggle="modal"
       data-target="#basicModal"
       role="button"
       onClick="setModelImageUrl('<?= $imageUrl ?>')" >
        <span class="glyphicon glyphicon-resize-full" aria-hidden="true"></span> see full size </a></li>
</ul>


<div class="mapImage">
    <a href="#"
       data-toggle="modal"
       data-target="#basicModal"
       onClick="setModelImageUrl('<?= $imageUrl ?>')">
        <img src="<?= $imageUrl ?>" alt="Loading <?= $imageUrl ?>">
    </a>
</div>
<script>
    imgSizer();
</script>
