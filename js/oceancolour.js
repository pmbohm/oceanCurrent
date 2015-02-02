if (typeof jQuery === 'undefined') {
    throw new Error('Bootstrap\'s JavaScript requires jQuery')
}

var session = {
    'forceFit': 'off',
    'resizeDoneOnce': false
};

+function ($) {
    // area image maps intercept and send to our proxy
    $('area').each(function () {
        setProxiedHtmOnClickAction($(this));
    });

}(jQuery);


// markup local links that go to a place in a local page. using a hash
// excludes hashes just used as placeholders
+function ($) {
    $('a').each(function () {
        var href = $(this).attr("href");
        var notBootstrap = $(this).attr('class') != "external";
        if (href) {
            if (href.indexOf('#') >= 0 && href.length > 3 && notBootstrap) {
                $(this).addClass('anchor');
            }
        }
    });
}(jQuery);

//
/*
 * highlighting of imagemaps
 *
 <img src="http://davidlynch.org/projects/maphilight/docs/demo_simple.png" class="map " usemap="#simple" >
 <map name="simple">
 <area href="#" shape="poly" coords="47,62,123,67,134,72,135,118,50,160" >
 </map>

 Example using rectangle
 <area shape="rect" coords="146,83,199,149" href="SE/latest.html" title="SE">
 *
 *
 * */
+function ($) {
    $('img.highlight').maphilight({
        //'alwaysOn': true,
        'fillColor': 'FF7251',
        'fillOpacity': 0.4,
        'strokeColor': 'FF532A',
        'strokeOpacity': 1,
        'strokeWidth': 2
    });
}(jQuery);


// resize large maps to fit container
function mainPageMapResizer() {
    var max_width = $('div#proxiedPagesContainer').width();
    var selector = 'div#proxiedPagesContainer > div.mapImage img';

    // Make in memory copy of image to avoid css issues
    $(selector).load(function () {
        width = this.width;   // Note: $(this).width() will not
        height = this.height; // work for in memory images.

        if (width > max_width) {

            //Set variables for manipulation
            var new_width = max_width;
            if (!session.resizeDoneOnce) {
                //Shrink the image and add link to full-sized image
                $(this).removeClass("displayNone");
                $(this).animate(
                    {width: new_width},
                    'slow',
                    function () {
                        $(this).removeAttr("style"); //added by animate
                        $(this).attr("width", "100%"); // follow browser resizing
                        $(this).attr("title", "This image has been scaled down.\nClick to see full size");
                    }
                )
            }
            else {
                $(this).removeClass("displayNone");
                $(this).attr("width", "100%");
                $(this).attr("title", "This image has been scaled down.\nClick to see full size");
            }
            session.resizeDoneOnce = true;
        }
        else{
            $(this).removeClass("displayNone");
        }
    });
}

function setForceFit(value) {
    session.forceFit = (value) ? "on" : "off";
}

function createForceFitToggle() {

    $('#forceFitToggle').bootstrapToggle({
        'size': 'mini',
        'on': "Fit",
        'off': "Full"
    });
    $('#forceFitToggle').bootstrapToggle(session.forceFit); // set the state
    $('#forceFitToggle').change(function () {
        setForceFit($(this).prop('checked'));
        fitFeaturedMapModal2Window();
    });
}

function fitFeaturedMapModal2Window() {
    // todo make this fit width and height. Eg phone screen portrait aspect


    if (session.forceFit == "on") {
        $('#featuredMapModal .modal-body').css('height', $(window).height() - 100); // set immediately
        // set on show
        $('#featuredMapModal').on('show.bs.modal', function () {
            $('.modal-body').css('height', $(window).height() - 100);
        });
        $('#featuredMapModal .modal-content .modal-body img').attr("height", "100%");
    }
    else {
        $('#featuredMapModal .modal-content .modal-body img').removeAttr("height");
        $('.modal-body').css('height', '');
    }
}

function setProxiedHtmOnClickAction(thisAnchorId, folderName) {

    var isARegionalMap = thisAnchorId.attr("region"); // todo these tags need to be added to be appropriate <area> tags
    folderName = (folderName != '') ? folderName : undefined;

    thisAnchorId.attr("href", function (index, theHref) {

        var vals = [folderName, theHref].filter(function (n) {
            return n != undefined
        }); // clears out undefined

        var relUrl = vals.join("/");
        if (relUrl.indexOf('../') >= 0) {
            relUrl = getAbsolutePath("", relUrl);
        }

        thisAnchorId.attr("onclick", "setProxiedHtms('" + encodeURIComponent(relUrl) + "','" + isARegionalMap + "');return false;");

    });
}

// http://stackoverflow.com/questions/14780350/convert-relative-path-to-absolute-using-javascript
function getAbsolutePath(base, relative) {
    var stack = base.split("/");
    var parts = relative.split("/");
    stack.pop();
    // remove current file name (or empty string)
    // (omit if "base" is the current folder without trailing slash)
    for (var i = 0; i < parts.length; i++) {
        if (parts[i] == "." || parts[i] == "")
            continue;
        if (parts[i] == "..")
            stack.pop();
        else
            stack.push(parts[i]);
    }
    return stack.join("/");
}

function setProxiedHtms(relUrl, region, popup) {

    var data = {'relUrl': relUrl, 'regionalMap': region, 'popup': popup};
    $.ajax({
        url: "proxy.php",
        data: data,
        success: function (res, status) {
            if (status == "success") {
                $('#proxiedPagesContainer').html(res);
            }
        }
    });
}

function parseQueryFromUrl(str) {
    if(typeof str != "string" || str.length == 0) return {};
    var s = str.split("&");
    var s_length = s.length;
    var bit, query = {}, first, second;
    for(var i = 0; i < s_length; i++)
    {
        bit = s[i].split("=");
        first = decodeURIComponent(bit[0]);
        if(first.length == 0) continue;
        second = decodeURIComponent(bit[1]);
        if(typeof query[first] == "undefined") query[first] = second;
        else if(query[first] instanceof Array) query[first].push(second);
        else query[first] = [query[first], second];
    }
    return query;
}

//http://stackoverflow.com/questions/12243898/how-to-select-all-text-in-contenteditable-div
jQuery.fn.selectText = function(){
    var doc = document;
    var element = this[0];
    if (doc.body.createTextRange) {
        var range = document.body.createTextRange();
        range.moveToElementText(element);
        range.select();
    } else if (window.getSelection) {
        var selection = window.getSelection();
        var range = document.createRange();
        range.selectNodeContents(element);
        selection.removeAllRanges();
        selection.addRange(range);
    }
};
