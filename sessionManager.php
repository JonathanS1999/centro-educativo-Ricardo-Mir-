<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Iniciar Sesión</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css'  href='css/sessionManager/sessionManager.css'>
</head>
<body>

<div class="popup-out-window">

<?php
 include("php/sessionAdmin/adminSession.php");
?>

	<div class="popup-container">

		<div class="container-form">
			<div class="div-title"><h5 class="title">Sesión</h5></div>
			<form class="form" method="post">
				<label>Usuario</label>
				<input type="text" name="user">
				<label>contraseña</label>
				<input type="password" name="password">
				<div class="container-buttons">
					<div>
					<input type="submit" class="btnsession" value="Enviar datos" name="btn">
				    </div>
				    <div>
					<input type="submit" class="btnolv" value="¿ Olvidó su contraseña ?" name="getpassw">
				    </div>
				</div>
			</form>
		</div>
		
	</div>
</div>
    
</body>
</html>