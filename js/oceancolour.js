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


// markup local links that go to a place in the page. using a hash
+function ($) {
$('a').each(function(){
        if($(this).attr("href").indexOf('#') >= 0) {
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