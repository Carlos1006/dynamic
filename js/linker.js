$(function() {
    $(".link").click(function() {
        document.location.href = $(this).attr("href");
    });
    $("#facebook,#twitter").click(function(e) {
        e.preventDefault();
        var win = window.open($(this).attr("href"), '_blank');
        win.focus();
    });
});