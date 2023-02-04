<!DOCTYPE html>
<html>
<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title></title>
		<?php
		$varUrlAT = "";
		if($index==2){
			$varUrlAT = "../../";
		}
		?>
		<link rel="stylesheet" type="text/css" href=<?php echo '"'.$varUrlAT.'css/autorities/layoutAutorities.css"';?>>
</head>
<body>

<?php
$argAutorities = array(0,1 ,2);
?>
<div class="containerMainLayoutAutorities">

	<div class="titleLayoutAutorities">
		<div><h4> Autoridades</h4></div>
	</div>

	<div class="containercard">
	<?php
	include("itemCardAtorities.php");
	?>
	</div>
	
</div>

</body>
</html>