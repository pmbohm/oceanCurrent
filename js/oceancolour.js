if (typeof jQuery === 'undefined') {
    throw new Error('Bootstrap\'s JavaScript requires jQuery')
}



+function ($) {

    // area image maps intercept and send to our proxy
    $('area').each(function () {

        $(this).attr("href", function (index, old) {
            $(this).attr("onclick", "setGraph('" + encodeURIComponent(old) + "');return false;");
        });
    });

}(jQuery);

//showing of modal popup
+function ($) {
    // todo implement
    $('#openBtn').click(function () {

        $('#basicModal').on('show.bs.modal', function () {
            $('#iframe-container').attr(
                "src",
                $('#openBtn').attr("iframe-data")
            );
        });
        $('#basicModal').modal({
            show: true,
            keyboard: true
        });
    });
}(jQuery);


// bind .load() to each image when the DOM's ready NOT WORKING !!!!!
+function ($) {
    // fade in each image individually as they are downloaded
    $(document).on('load', 'img.slowLoad', null, function() {
        console.log("image on load");
        $(this).fadeIn('slow');
    });

    $('.slowLoad').on('load', '.slowLoad', function(){
        console.log("image on load");
    });

}(jQuery);


// markup local links that go to a place in a local page. using a hash
// excludes hashes just used as placeholders
+function ($) {
$('a').each(function(){
        var href = $(this).attr("href");
        if(href.indexOf('#') >= 0 && href.length > 3) {
        $(this).addClass('anchor');
    }
});
}(jQuery);

function setGraph(encodedURIComponent) {
    var data = {'ocrequest': encodedURIComponent};
    $.get("proxy.php", data, function (data, status) {
        if (status == "success") {
            $('#graphContainer').html(data);
        }
    });
}

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