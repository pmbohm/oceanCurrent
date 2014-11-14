<?= $debug ?>

<? if ($notARegion) { ?>
    <h3>Map of '<?= $folderName ?>' <span><?= $imgNameDate ?></span></h3>
<?
} else {
    ?>
    <h3>Map of the '<?= $folderName ?>' region. <span><?= $imgNameDate ?></span></h3>
<? } ?>



<nav class="navbar navbar-default" role="navigation">
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
            <a class="navbar-brand" href="<?= $datePicker ?>" alt="date picker">Date Picker</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a class="navbar-brand" href="<?= $folderName ?>/<?= $previous ?>"
                       onclick="setGraph('<?= $folderName ?>/<?= $previous ?>');return false;"
                       alt="Previous available time period for <?= $folderName ?>"
                       title="Previous available time period for <?= $folderName ?>">Previous</a>
                </li>
                <li><a class="navbar-brand" href="<?= $folderName ?>/<?= $next ?>"
                       onclick="setGraph('<?= $folderName ?>/<?= $next ?>');return false;"
                       alt="Next available time period for <?= $folderName ?>"
                       title="Next available time period for <?= $folderName ?>">Next</a>
                </li>
            </ul>
        </div><? //.navbar-collapse ?>
    </div><? //.container-fluid ?>
</nav>
<img class="slowLoad" src="<?= $imageUrl ?>" alt="Loading <?= $imageUrl ?>">
