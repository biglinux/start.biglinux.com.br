$(function () { 
    var results = $("#results");
    var webq = $("#webq");
    
    var resize = function () {
        var height = $(window).height();
        console.log("resize: " + height);
        results.attr("height", height - 110);
        results.css('display', 'block');
    }
    
    $(window).on('resize', resize);
    resize();

    results.on("DOMAttrModified", function (event) {
        console.log(event);
        if (event.attrName == "src") {
            var url = results.attr('src');
            console.log(url, url.startsWith('https://duckduckgo.com/?q='));
            window.location.href = url;
        }
    });

    /*adblockDetect(function (adblockDetected) {
        if (webq.length == 1 && adblockDetected) {
            swal('AdBlock Detectado', 'Esse site utiliza alguns recursos externos e para que funcione corretamente é necessário desabilitar o AdBlock', 'error');
        }
    });*/
    
});