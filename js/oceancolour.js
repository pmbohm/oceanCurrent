if (typeof jQuery === 'undefined') {
    throw new Error('Bootstrap\'s JavaScript requires jQuery')
}


+function ($) {

    // area image maps intercept and send to our proxy
    $('area').each(function () {

        $(this).attr("href", function (index, old) {
            $(this).attr("target", "thisframe");
            return "proxy.php?request=" + encodeURIComponent(old);
        });
    });

}(jQuery);


+function ($) {
    $('#openBtn').click(function () {

        $('#basicModal').on('show.bs.modal', function () {

            console.log($('#openBtn').attr("iframe-data"));
            $('#iframe-container').attr(
                "src",
                $('#openBtn').attr("iframe-data")
            );
            console.log($('#iframe-container').attr("src"));

        });
        $('#basicModal').modal({
            show: true,
            keyboard: true,
            });


    });
}(jQuery);