<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<?php

	$urlNav="";// direccion de todos los menus 
	$urlLocal="";// direccion del layout que muestra informacion
	$varUrl="";// controla desde donde se ha accedido estando en un submenu
	$urlNavArray="";

	if(isset($_GET['view'])){
			$urlNav="../../";
			$urlLocal=$url;
			$urlNavArray=array("../","../../");
		   $varUrl=2;
	}else{
		if($index==1){// estoy en la pagina principal
		$urlNav="";
		$urlNavArray=array("php/","");
		}

		$varUrl=1;
	}

?>
	<link rel="stylesheet" type="text/css" 
	href=<?php echo '"'.$urlNav. 'css/navBar/styleNavBar.css"' ?>>
	<title></title>
</head>
<body>
	
<div class="backgroundStileHead">


<header class="header">

	<div class="aligment">

		<div class="center-align">
			   <div class="center-align-icon">
				<img class="icons" src= <?php echo '"' . $urlNav . 'images/iccorreo.jpg"'; ?> >
			</div>
				<div class="center-align">
					<h3 class="h3-d1">cebgricardomiro51@hotmail.com</h3>
			   </div>
	   </div>
	</div>

	<div class="aligment">
		<div class="center-align">
			  <div class="center-align-icon">
				<img class="icons" src= <?php echo '"' . $urlNav . 'images/ictelefono.png"'; ?> >
			  </div>  
				<div class="center-align">
					<h3 class="h3-d1">517-6476</h3>
			   </div>
	   </div>
	</div>

	<div class="aligment">
		<div class="center-align">
			   <div class="center-align-icon">
				<img class="icons" src= <?php echo '"' . $urlNav . 'images/icwhatsap.png"'; ?> >
			   </div>
				<div class="center-align">
					<h3 class="h3-d1">6573-7738</h3>
			   </div>
	   </div>
	</div>


	<div class="aligment">
		<div class="center-align">
			  <div class="center-align-icon">
				<img class="icons" src= <?php echo '"' . $urlNav . 'images/icons/calendar.webp"'; ?> >
			  </div>
				<div class="center-align2">
						<h5>Horario de atención</h5>
	<h3 class="h3-d1">7:00 AM - 2:00 PM</h3>
			   </div>
	   </div>
	</div>




	<div class="aligment">
		<div class="center-align">
			  <div class="center-align-icon">
				<img class="icons" src= <?php echo '"' . $urlNav . 'images/ubicacion.png"'; ?> >
			  </div>
				<div class="center-align2">
						<h4> Panamá, calle 2da</h4>
						<h4>Vista Hermosa</h4>
			   </div>
	   </div>
	</div>



	<div class="aligmentRightIcons" >
		<div>
		<img class="icons" src=<?php echo '"' . $urlNav . 'images/rsocial/facebook.webp"';?>/>
	   </div>
		<div>
		<img class="icons" src=<?php echo '"' . $urlNav . 'images/rsocial/instagram.webp"';?>/>
		</div>
		<div>
		<img class="icons" src=<?php echo '"' . $urlNav . 'images/rsocial/youtube.png"';?>/>
		</div>
	</div>
</header>

<div class="div2">

<img class="logo" src=<?php echo '"' . $urlNav . 'images/insignia.png"'; ?>/>

<div class="centerTitle" >
   <h4 class="schoolTitle">C E B G <br/> Ricardo Miró</h4>
</div>

<?php $urlOptionSelected='"' . $urlNavArray[0] . 'receiberOptionMenu/reciberOptionsMenu.php?view='.$varUrl;
?>

<nav>
	<ul class="menuNav">

		<?php

		 ?>
		<li class="li-a"><a href= <?php echo '"' . $urlNavArray[1] . 'index.php"'; ?> >Inicio</a></li>
		<li class="li-a"><a href="#">CEBG Ricardo M</a>
			<ul class="submenu">
				<li class="li-a"> <a href=<?php echo $urlOptionSelected.'&op=mv"'; ?>>Misión y Visión </a></li>
				<li class="li-a"> <a href=<?php echo $urlOptionSelected.'&op=ht"'; ?>>Historia</a></li>
				<li class="li-a"> <a href=<?php echo $urlOptionSelected.'&op=at"'; ?>>Autoridades</a></li>
				<li class="li-a"> <a href=<?php echo '"' . $urlNavArray[0] . 'location.php"'; ?>>Ubicación</a></li>
			</ul>
		</li>
		
		<li class="li-a"><a href="#">Espacio Informativo</a>
      <ul class="submenu">
				<li class="li-a"> <a href=<?php echo $urlOptionSelected.'&op=nt"'; ?>>Noticias</a></li>
				<li class="li-a"> <a href=<?php echo $urlOptionSelected.'&op=nt"'; ?>>Proyectos</a></li>
				<li class="li-a"> <a href=<?php echo $urlOptionSelected.'&op=nt"'; ?>>Póliza y seguro</a></li>
			</ul>
		</li>
		<li class="li-a"><a href="#" >Oferta Academica</a>
			<ul class="submenu">
				<li class="li-a"> <a href=<?php echo $urlOptionSelected.'&op=ad"'; ?>>Admisión</a></li>
				<li class="li-a"> <a href="#">Tramites de matricula</a></li>
			</ul>

		</li>
		<li class="li-a"><a href= <?php echo $urlOptionSelected.'&op=co"'; ?>>Contactos</a></li>
		<li class="li-a"><a href= <?php echo $urlOptionSelected.'&op=ga"'; ?>>Galeria</a></li>
	</ul>
</nav>

</div>

</div>



</body>
</html>