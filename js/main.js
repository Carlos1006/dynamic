var globalOffsetTop = {
    0: 0,
    1: 0,
    2: 0,
    3: 0,
    4: 0,
    5: 0
};
var currentLayer = 0,
    scrollable = true,
    timeOut = 0,
    duration = 1000;
$(window).on('beforeunload', function() {
    $(window).scrollTop(0);
});
$(window).on("load", function() {
    linker();
    $(window).scrollTop(0);
    $(".scroller_item").on("click", function() {
        $(".scroller_item").removeAttr("selected");
        $(this).attr("selected", "");
        currentLayer = parseInt($(this).attr("index"));
        scrollTo();
    });
    $(document).bind('mousewheel', function(e) {
        if (scrollable) {
            if (e.originalEvent.wheelDelta / 120 > 0) {
                if (currentLayer > 0) {
                    currentLayer--;
                }
            } else {
                if (currentLayer < 5) {
                    currentLayer++;
                }
            }
            scrollable = false;
            $(".scroller_item").removeAttr("selected");
            $(".scroller_item[index='" + currentLayer + "']").attr("selected", "");
            scrollTo();
        }
    });
    $(window).resize(setPagesOffsets);
    initParticles();
    setPagesOffsets();
});

function setPagesOffsets() {
    $(".container").each(function(i) {
        globalOffsetTop[i] = $(this).offset().top;
        if (i == currentLayer) {
            $('html, body').scrollTop(globalOffsetTop[currentLayer]);
        }
    });
};

function scrollTo() {
    window.clearTimeout(timeOut);
    window.setTimeout(function() {
        if (currentLayer != 0) {
            $("header").attr("typeB", "");
        } else {
            $("header").removeAttr("typeB");
        }
    }, duration / 2);
    $('html, body').stop().animate({
        scrollTop: globalOffsetTop[currentLayer]
    }, {
        duration: duration,
        specialEasing: {
            scrollTop: "easeInOutQuint"
        },
        complete: function() {
            scrollable = true;
        }
    });
};

function linker() {
    $(".link").click(function() {
        document.location.href = $(this).attr("href");
    });
}