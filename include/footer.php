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
                    not monitored 24/7 (being research infrastructure rather than operational).</p>
            </div>

            <div class="col-md-8">
                <p>Use of this web site and information available from it is subject to our
                    <a href="http://imos.org.au/imostermsofuse0.html">Conditions of use</a>
                </p>

                <p>&copy; 2014 IMOS</p>

                <a href="#" iframe-data="<? echo $BASEDIR ?>oceancurrentHTMs/install.htm" class="btn" id="openBtn">Open modal TEST!! </a>
            </div>

        </footer>
    </div>
</div>


<? // modal frame for graphs/charts/maps ?>
<div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-lg modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
        <iframe id="iframe-container" src="" style="zoom:0.60" frameborder="3" height="250" width="99.6%"></iframe>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="<? echo $BASEDIR ?>js/bootstrap.min.js"></script>
<script src="<? echo $BASEDIR ?>js/oceancolour.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<? echo $BASEDIR ?>js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>