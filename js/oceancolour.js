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

function setGraph(encodedURIComponent) {
    var data = {'ocrequest': encodedURIComponent};
    $.get("proxy.php", data, function (data, status) {
        if (status == "success") {
            $('#graphContainer').html(data);
            //console.log("Data: " + data + "\nStatus: " + status);
        }
    });

}