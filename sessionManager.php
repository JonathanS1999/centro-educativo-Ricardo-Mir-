<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css'  href='css/sessionManager/sessionManager.css'>
</head>
<body>

<div class="popup-out-window">

	<div class="popup-container">

		<div class="container-form">
			<div class="div-title"><h5 class="title">Sesión</h5></div>
			<form class="form" action="php/sessionAdmin/adminSession.php" method="post">
				<label>User</label>
				<input type="text" name="user">
				<label>Password</label>
				<input type="text" name="password">
				<div class="container-buttons">
					<div>
					<input type="submit" class="btnsession" value="Enviar datos" name="">
				    </div>
				    <div>
					<input type="submit" class="btnolv" value="¿ Olvidó su contraseña ?" name="">
				    </div>
				</div>
			</form>
		</div>
		
	</div>
</div>
    
</body>
</html>