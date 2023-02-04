<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>item card autorities</title>
	<?php
		$varIT_AT = "";
		if($index==2){
			$varIT_AT = "../../";
		}
		?>
	<link rel="stylesheet" type="text/css" href=<?php echo '"'.$varIT_AT.'css/autorities/styleCardAutorities.css"';?>>
</head>
<body>

<?php
 $prevPath=$varIT_AT;
?>

<?php
$arrayImg=array($prevPath."images/autoridades/director.PNG",$prevPath."images/autoridades/subDirectorTecnicoDocente.PNG",
	$prevPath."images/autoridades/subDirectorTecnicoAdministrativo.PNG");
$arrayNames=array("Yeneyra Dominguez","Dania Cebrián","Miroslava Zambrano");
$arrayCargo=array("Director","Subdirector tecnico docente ","Subdirector tecnico  administrativo");
$item=rand(0,3);
for($i=0 ; $i < count($argAutorities); $i++ ){

?>

<div class="card">
		<img src="<?php echo "". $arrayImg[$argAutorities[$i]]; ?>"/>
		<h4><?php echo "". $arrayNames[$argAutorities[$i]]; ?></h4>
		<h5><?php echo "". $arrayCargo[$argAutorities[$i]]; ?></h5>
</div>

<?php

}

?>



</body>
</html>