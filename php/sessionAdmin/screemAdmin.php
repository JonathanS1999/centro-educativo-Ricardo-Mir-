<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Administrador</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../../css/adminUser/screemAmin.css'>
    <script type="text/javascript" src="../../jquery/jquery-3.6.0.js"></script>
    <script src='../../js/eventsItemsAdmin.js'></script>
</head>
<body>


<div class="container_ADMIN">
<div class="navBar"> </div>

<div class="containerItemsAdmin">

<?php
$arrayNameItems = array("noticias","proyectos", "galeria","autoridades" );
$arrayIcons=array("../../images/icons/admin/notices.webp","../../images/icons/admin/proyectos.jpg",
"../../images/icons/admin/galery.webp","../../images/icons/admin/autorities.jpg");
for ($i = 0; $i < count($arrayNameItems); $i++){
    $id = "itemCard" . $i;
    include("itemCardAdmin.php");
}
?>

</div>
</div>
    
</body>
</html>