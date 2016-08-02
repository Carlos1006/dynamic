$(function() {
    var viewer = $("#fullscren");
    $(".img").click(function() {
        viewer.css("background-image", $(this).css("background-image")).fadeIn(200);
    });
    $("#crossIcon,#fullscren").click(function() {
        viewer.fadeOut(200);
    });
    $(".platinum,.gold").on("click", function() {
        var object = $(this);
        var name = "Simestruck ";
        var url = "../rsc/pdf/";
        if (object.hasClass("platinum")) {
            name += "Platinum";
            url += "FOLLETO SIMESTRUCK PLATINUM.CMYK_ES.pdf";
        } else if (object.hasClass("gold")) {
            name += "Gold";
            url += "FOLLETO SIMESTRUCK GOLD.CMYK_ES.pdf";
        }
        var link = document.createElement("a");
        link.download = name;
        link.href = url;
        link.click();
    });
    $(".ejemplo").on("click", function() {
        var name = "Socrates.pdf";
        var url = "../rsc/pdf/"+name;
        var link = document.createElement("a");
        link.download = name;
        link.href = url;
        link.click();
    });
});