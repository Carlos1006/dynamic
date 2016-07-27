var main, container;
$(function() {
    main = $("#main");
    container = $(".container");
    $(window).resize(windowsResize);

    function windowsResize() {
        adjustLayers();
    };

    function adjustLayers() {
        var windowHeight = $(window).innerHeight();
        if (windowHeight >= 600) {
            container.height(windowHeight);
            adjustMainVideo();
            adjustScroller();
        }
    }

    function adjustMainVideo() {
        var video = main.find("video");
        if (main.innerWidth() <= main.innerHeight()) {
            video.addClass("height");
        } else if (main.find("video").hasClass("height")) {
            video.removeClass("height");
        }
    }

    function adjustScroller() {
        var scroller = $("#scroller");
        var newHeight = parseInt($(window).innerHeight() * 0.59997);
        scroller.innerHeight(newHeight);
    }
    var windowHeight = $(window).innerHeight();
    container.height(windowHeight);
    adjustMainVideo();
    adjustScroller();
});