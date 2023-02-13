
$(document).ready(function(){

    $("#itemCard0").click( function (ev){
     location.href="../databaseForm/subirDataForm.php?op=0";
    });

    $("#itemCard1").click( function (ev){
        location.href="../databaseForm/subirDataForm.php?op=1";
    });

    $("#itemCard2").click( function (ev){
        location.href="../databaseForm/subirImagesGalery.php";
    });

    $("#itemCard3").click( function (ev){
        location.href="../databaseForm/subirAutorities.php";
    });

    $("#itemCard4").click( function (ev){
        location.href="../databaseForm/subirInstalaciones.php";
    });

});