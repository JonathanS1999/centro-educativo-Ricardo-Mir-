$(document).ready(function(){
    addLayoutNotices();
});

function addLayoutNotices(){
    var width=window.innerWidth;
    $.get('php/layoutSlider/sliderLayout.php?cn='+width, function(data) { 
        $('#containerCardsNotices').append(data);
    });
}