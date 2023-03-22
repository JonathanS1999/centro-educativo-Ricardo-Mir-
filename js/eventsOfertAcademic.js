
$(document).ready(function(){

    $("#preEscolarar").click( function (ev){
     location.href="php/receiberOptionMenu/reciberOptionsMenu.php?view=1&op=oa1&id=0";
    });

    $("#primaria").click( function (ev){
        location.href="php/receiberOptionMenu/reciberOptionsMenu.php?view=1&op=oa2&id=0";
    });

    $("#preMedia").click( function (ev){
        location.href="php/receiberOptionMenu/reciberOptionsMenu.php?view=1&op=oa3&id=0";
    });

});