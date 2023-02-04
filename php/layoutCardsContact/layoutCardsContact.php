<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../../css/layoutCardsContact/layoutCardsContact.css'>
</head>
<body>

<div class="hourAT">
<h4 class="h4AT"> Horario de atención </h4>
<h5 class="h5AT"> 7:00 AM - 2:00 PM</h5>
<div>

<div class="containerCardContacts">

<div class="containerCardContacts2">

  <div class="item1Contac">

    <?php
    $arrayInfoContactos = array("../../images/iccorreo.jpg","correo","cebgricardomiro51@hotmail.com");
    include("../itemCardContacts/itemCardContac.php")
    ?>

  </div>

  <div class="item1Contac2">

<?php
$arrayInfoContactos = array("../../images/ictelefono.png","telefono","517-6476");
include("../itemCardContacts/itemCardContac.php")
?>

</div>

<div class="item1Contac2">

<?php
$arrayInfoContactos = array("../../images/icwhatsap.png","movil","6573-7738");
include("../itemCardContacts/itemCardContac.php")
?>

</div>

<div class="item1Contac">

<?php
$arrayInfoContactos = array("../../images/ubicacion.png","ubicación","Calle Segunda Vista Hermosa, corregimiento de Pueblo Nuevo, detrás del KFC de tránsistmica, al frente de Auto Centro");
include("../itemCardContacts/itemCardContac.php")
?>

</div>

  


</div>

</div>
    
</body>
</html>