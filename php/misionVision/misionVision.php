<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Misión visión </title>

	<?php
	$varUrlMV = "";
	if($index==2){
		$varUrlMV = "../../";
	}
	?>

	<link rel="stylesheet" type="text/css" href=<?php echo '"'.$varUrlMV.'css/misionVision/misionVision.css"';?>>
</head>
<body>

<div class="containerMainMisionVision">

<div class="titleMisionVision"> 
<div><h4>Misión y Visión</h4></div>
</div>
		

<div class="containerMisionVision">
	
	<div class="divMisionVision">
		
		<div class="insideContainer">
			
			<div class="justContentMV">
				<div class="div1">
					<img src= <?php echo '"' . $varUrlMV . 'images/icons/mision.png"';?>>
				</div>
				<div class="div2">
					<h3>Misión</h3>
					<p> Garantizamos el desarrolllo integral de los estudiantes atendiendo a la diversidad mediante la aplicación de estrategias metodológicas, conviertiendolas en personas eficientes y eficaces
			   		 </p>
		   		</div>
		    </div>

		    <div class="justContentMV">
				<div class="div1">
					<img src=<?php echo '"' .$varUrlMV.'images/icons/trofeo.png"';?>>
				</div>
				<div class="div2">
					<h3>Visión</h3>
					<p>Ser una institución lider en servicios educativos que se proyecte hacia un proceso de enseñanza integral, en su formación de valores demostrando las competencias
			   		 </p>
		   		</div>
		    </div>



		  </div><!-- fin insideContainer -->
	</div>


 	 <img class="imgMisionVision" src=<?php echo '"'.$varUrlMV.'images/galeria/img1.jpg"';?>>


</div>
</div>
</body>
</html>