</div>
</div>
<div class="jumbotronFooter">
    <div class="container">
        <footer class="row">
            <div class="col-md-4">
                <p>If you've found this information useful, see something wrong, or have a suggestion, please let us
                    know.
                    All feedback is very welcome. For help and information about this site
                    please contact <a href="mailto:info@emii.org.au">info@emii.org.au</a>, noting that our systems are
                    not monitored 24/7 (being research infrastructure rather than operational).
                </p>
            </div>
            <div class="col-md-8">
                <p>Use of this web site and information available from it is subject to our
                    <a href="http://imos.org.au/imostermsofuse0.html">Conditions of use</a>
                </p>
                <p>&copy; 2014 IMOS</p>

            </div>
        </footer>
    </div>
</div>

<?php // modal frame for graphs/charts/maps ?>
<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h5 class="modal-title" id="fullImageLabel"></h5>
            </div>
            <div class="modal-body">
                <img id="fullImage" src="">
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<?php echo $BASEDIR ?>js/bootstrap.js"></script>
<script src="<?php echo $BASEDIR ?>js/imgLiquid-min.js"></script>
<script src="<?php echo $BASEDIR ?>js/maphilight.js"></script>
<script src="<?php echo $BASEDIR ?>js/oceancolour.js"></script>

<script>
    +function ($) {
        $('#imap2').maphilight();
    }(jQuery);
</script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo $BASEDIR ?>js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>