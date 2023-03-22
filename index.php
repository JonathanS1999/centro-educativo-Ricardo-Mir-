<!DOCTYPE html>
<html lang="es">
<head>
<title>C E B G Ricardo Miro</title>
<link href="css/body/styleBody.css" type="text/css" rel="stylesheet" />
</head>
<script type="text/javascript" src="jquery/jquery-3.6.0.js"></script>
<body>

<?php
$index=1;
include('php/navBar/navBar.php');
?>

<?php
include('php/firstPresentation/firstPresentation.php');
?>

<?php
include("php/misionVision/misionVision.php");
?>

<?php
include("php/porqueEstudiar/porqueEstudiar.php");
?>

<?php
include("php/academicOffer/academicOfferIndex.php");
?>

<?php
include("php/horarioEscolar/horarioEscolar.php");
?>

<?php
include("php/notices/layoutNoticesIndex.php");
?>

<?php
include("php/instalaciones/layoutIndexInstalaciones.php");
?>

<?php
if (!class_exists('ParameterConection')) {
    include("database/ParameterConection.php");
}
include("php/autorities/layoutAutorities.php");
?>

<?php
include("php/footPage/footPage.php");
?>

</body>

</html>