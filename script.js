$(function(){


// google suggestions
var form = $("#search form");
var search = $("#search #googlesearch");
search.googleSuggest(); 
search.on( "autocompleteselect", function(event, ui){
    form.submit();
});


});