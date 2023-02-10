
$(document).ready(function(){

    $("#itemCard0").click( function (ev){
     location.href="../databaseForm/subirDataForm.php";
    });

    $("#itemCard1").click( function (ev){
        location.href="../databaseForm/subirDataForm.php";
    });

    $("#itemCard2").click( function (ev){
        alert(" se ha pulado el tercero ");
    });

    $("#itemCard3").click( function (ev){
        alert(" se ha pulado el cuarto");
    });

});