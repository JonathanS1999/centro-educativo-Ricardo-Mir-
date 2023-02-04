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
$argAutorities = array(0,1);
?>

<?php
include("navBar.php");
?>


<div class="containercard">
<?php
include("itemCardAtorities.php")
?>
</div>

<div class="containercard">
<?php
$argAutorities = array(2);
include("itemCardAtorities.php")
?>
</div>


<?php
include("footPage.php");
?>

</body>
</html>