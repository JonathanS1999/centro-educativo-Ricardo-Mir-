<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Layout index </title>
	<link rel="stylesheet" type="text/css" href="css/instalaciones/layoutIndexInstalaciones.css">
</head>
<body>
<script src="js/eventBtnInsta.js"></script>
	<div class="containerLayoutIndexInstalaciones1">

	<div class="containerLayoutIndexInstalaciones2">
		
		<div class="containerTitleLayoutIndIns">
			<div> <h4>Nuestras instalaciones </h4></div>
		</div>

		<div class="containerLayoutInsideIndIns">

			<div class="miniGaleryIndIns">
				<?php
				include("php/instalaciones/layoutInstalaciones.php");
				?>
			</div>

			<div class="descriptionInfoIndIns">

				<div class="descriptionInfoIndIns2">

						<div class="centerInfoIndIns">
							<p>
								Nuestro centro cuenta con un edificio de dos pisos y planta baja, kiosko, laboratorio de informática, laboratorio de ciencias naturales, taller de artes industriales, gimnasio, cancha, parque infantil para pre escolar, parque de juegos, biblioteca, salón para capacitaciones.
							</p>
						</div>

						<div class="centerInfoIndIns">
							<div><button id="btnInstalaciones"> + Ver mas </button></div>
						</div>

				</div>
			</div>
			
		</div>

	</div>
	</div>

</body>
</html>