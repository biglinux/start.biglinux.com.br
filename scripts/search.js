$(function () {
    
    var form = $("#search form");
    var search = $("#search #googlesearch");
    var button = $("#search i.search");
    var textSearch = $("#search input[type=text]");

    if (search.val().trim() == ''){
        search.focus();
    }

    search.googleSuggest(); 
    search.on("autocompleteselect", function(event, ui){
        setInterval(function () {
            form.submit();
        }, 100);
    });

    search.on('keydown', function(e) {
        if (e.which == 13 && search.val().trim() == ''){
            e.preventDefault();
        }
    });

    form.on('submit', function () { 
        window.location.href = "search/" + encodeURI(search.val());
        return false;
    });

    button.on("click", function(){
        if(search.val().trim() != ""){
            form.submit();
        }
    });

});