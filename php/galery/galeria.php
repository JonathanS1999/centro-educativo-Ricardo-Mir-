<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>galeria</title>
	<link rel="stylesheet" type="text/css" href="../css/style1.css">
</head>

<body>

<?php
include("navBar.php");
?>

<?php
$itemGalery=0;
?>

<div class="containercard">
<?php
include("itenCardGalery.php")
?>
</div>

<div class="containercard">
<?php
include("itenCardGalery.php")
?>
</div>


<?php
include("footPage.php");
?>

</body>
</html>