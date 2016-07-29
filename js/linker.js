$(function() {
    $(".link").click(function() {
        document.location.href = $(this).attr("href");
    });
    $("#facebook,#twitter").click(function(e) {
        e.preventDefault();
        var win = window.open($(this).attr("href"), '_blank');
        win.focus();
    });

    $("#menuIcon").on("click mouseup",function() {
        $("#linkerMenu").addClass("left");
    });
    $("#returnMenu").on("click",function() {
        $("#linkerMenu").removeClass("left");
    });
    $(".container,#road,#text_0").on("click",function() {
        $("#linkerMenu").removeClass("left");
    });

});