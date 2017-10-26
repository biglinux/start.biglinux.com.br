$(function () { 
    var results = $("#results");
    var resize = function () {
        var height = $(window).height();
        console.log("resize: " + height);
        results.attr("height", height-75);
    }
    $(window).on('resize', resize);
    resize();
});