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
        $(this).attr("href", function (index, old) {
            $(this).attr("onclick", "setProxiedHtms('latest','" + encodeURIComponent(old) + "');return false;");
        });
    });
}(jQuery);

function setProxiedHtms(attr,val) {
    var data = {'request': attr, 'val': val };
    $.get("proxy.php", data, function (res, status) {
        if (status == "success") {
            $('#proxiedPagesContainer').html(res);
        }
    });
}

// markup local links that go to a place in a local page. using a hash
// excludes hashes just used as placeholders
+function ($) {
    $('a').each(function () {
        var href = $(this).attr("href");
        if (href) {
            if (href.indexOf('#') >= 0 && href.length > 3) {
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