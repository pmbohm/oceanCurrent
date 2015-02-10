<?php echo $debug ?>

<div id="indexPageLinks">
    <h2>Date Index for <?php echo $relativeFolderPath ?></h2>
    <?php echo $html ?>
</div>
<script>
    +function ($) {
        // intercept anchor tags and send to our proxy where needed
        $('#indexPageLinks a').each(function () {
            var href = $(this).attr('href');
            if (href) {
                // links to fli files are excluded
                if (href.indexOf('.fli') == -1) {
                    setProxiedHtmOnClickAction($(this), '<?php echo $relativeFolderPath ?>');
                }
            }
        });
    }(jQuery);
</script>