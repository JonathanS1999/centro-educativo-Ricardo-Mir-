<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php
	$urlNav="";
     if ($index==2){
		$urlNav="../../";
	}
	?>

	<link rel="stylesheet" type="text/css" href=<?php echo '"'.$urlNav. 'css/footPage/styleFoot.css"' ?>>
	<title></title>
</head>
<body>

<!-- Pie de pagina , muestra informacion general del centro educativo -->

<footer class="myfooter fontWhite">
	<div>
		<h4>C E B G Ricardo Miro</h4>
		<h5>Administradores</h5>
		<h5>Nuestra historia</h5>
		<h5>Logros</h5>
		<h5>Proyectos</h5>
	</div>
	<div>
		<h4>Contacto</h4>
		<h5>Direccion: Calle segunda Vista Hermosa,<br/> Corregimiento de Pueblo Nuevo ,<br/> detras del KFC 
		    de transistmica al frente de Auto Centro</h5>
		<h5>cebgricardomiro51@hotmail.com</h5>
		<h5>517-6476</h5>
		<h5>xxxx-xxxx</h5>
	</div>
	<div>
		<h4>Redes Sociales</h4>
		<img class="icons" src=<?php echo '"' . $urlNav . 'images/rsocial/facebook.webp"'; ?> />
		<img class="icons" src=<?php echo '"' . $urlNav . 'images/rsocial/instagram.webp"'; ?> />
		<img class="icons" src=<?php echo '"' . $urlNav . 'images/rsocial/youtube.png"'; ?> />
	</div>

	<div class="divMinEd">
		<div class="centerDiv">
			<div>
				<img class="logoRepPa" src=<?php echo '"' . $urlNav . 'images/mineduc/bandera.png"'; ?>  >
				<div class="divMinEd">
					<div class="mineducMargin">
						<h5>REPUBLICA DE PANAMA</h5>
						<h5>GOBIERNO NACIONAL</h5>
					</div>
					<div class="centerDiv2  mineducMargin">
						<h5>MINISTERIO DE</h5>
						<h5>EDUCACION</h5>
					</div>
				</div>
			</div>
			
		</div>
	</div>

</footer>
</body>
</html>