$(function() {
    $(document).on("scroll", function() {
        if ($(document).scrollTop() > 200) {
            $("header").attr("typeB", "");
        } else {
            $("header").removeAttr("typeB");
        }
    });
    $(document).trigger("scroll");
});