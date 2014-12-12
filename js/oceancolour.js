if (typeof jQuery === 'undefined') {
    throw new Error('Bootstrap\'s JavaScript requires jQuery')
}

function setModelImageUrl(imgUrl) {
    $('#basicModal #fullImage')
        .attr('src', imgUrl)
        .attr('alt', imgUrl)
        .attr('title', imgUrl);
    $('#basicModal #fullImageLabel').html(imgUrl);
}

// resize large maps to fit container
function imgSizer() {
    var selectorContainer = "div#proxiedPagesContainer";
    var max_width = $(selectorContainer).width();
    var selector = 'div#proxiedPagesContainer > div.mapImage img';

    // Make in memory copy of image to avoid css issues
    $(selector).load(function () {
        width = this.width;   // Note: $(this).width() will not
        height = this.height; // work for in memory images.

        if (width > max_width) {

            //Set variables for manipulation
            var new_width = max_width;

            //Shrink the image and add link to full-sized image
            $(this).animate(
                {width: new_width},
                'slow',
                function () {
                    $(this).removeAttr("style"); //added by animate
                    $(this).attr("width", "100%"); // follow browser resizing
                    $(this).attr("title", "This image has been scaled down.\nClick to see full size");
                }
            );
        }
    });
}

+function ($) {
    // area image maps intercept and send to our proxy
    $('area').each(function () {
        setProxiedHtmOnClickAction($(this));
    });

}(jQuery);

function setProxiedHtmOnClickAction(thisAnchorId, folderName) {

    var isARegionalMap = thisAnchorId.attr("region"); // todo these tags need to be added to be appropriate <area> tags
    folderName = (folderName != '') ? folderName: undefined;

    thisAnchorId.attr("href", function (index, theHref) {

        var vals = [folderName, theHref].filter(function(n){ return n != undefined }); // clears out undefined

        var relUrl = vals.join("/");
        if (relUrl.indexOf('..') >= 0) {
            relUrl = getAbsolutePath("", relUrl); // todo tydy this and provide a link to the 'latest'
            console.log("todo provide a link to the latest!!");
        }

        thisAnchorId.attr("onclick", "setProxiedHtms('" + encodeURIComponent(relUrl) + "','" + isARegionalMap + "');return false;");

    });
}

// http://stackoverflow.com/questions/14780350/convert-relative-path-to-absolute-using-javascript
function getAbsolutePath(base, relative) {
    var stack = base.split("/");
    var parts = relative.split("/");
    stack.pop(); // remove current file name (or empty string)
                 // (omit if "base" is the current folder without trailing slash)
    for (var i=0; i<parts.length; i++) {
        if (parts[i] == ".")
            continue;
        if (parts[i] == "..")
            stack.pop();
        else
            stack.push(parts[i]);
    }
    return stack.join("/");
}

function setProxiedHtms(relUrl,region) {
    var data = {'relUrl': relUrl, 'regionalMap': region };
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