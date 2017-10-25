$(function(){

    // variaveis
    var form = $("#search form");
    var search = $("#search #googlesearch");
    var button = $("#search i.search");

    search.focus();

    search.googleSuggest(); 
    search.on( "autocompleteselect", function(event, ui){
        form.submit();
    });

    search.on('keydown', function(e) {
        if (e.which == 13 && search.val().trim() == '') {
            e.preventDefault();
        }
    });

    button.on("click", function(){
        if(search.val().trim() != ""){
            form.submit();
        }
    });

});