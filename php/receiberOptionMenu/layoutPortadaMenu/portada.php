<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<?php
	$url="../../";
	?>
	<link rel="stylesheet" type="text/css" href=<?php echo '"'.$url.'/css/portadaMenuNav/portadaMenuNav.css"'; ?>>
</head>
<body>

<div class="containerPortadaMenu">

	<div class="topPortada">
	</div>

	<img src=
	<?php
	if ($isChangePort){
		echo "'../../".$noticeDetail["image_url"]."'";
	}else{
		echo "'../../images/portada2.jpg'";
	}
	
	?>>

	<div class="bottomPortada">

		<div class="itemBTPleft">
			<h4>Información</h4>
		</div>

		<div class="bottomPath">
			<a class="homeclass"  href="../../index.php" > </a>

			<div class="centerPath">
			<?php
			 for($i=0; $i<count($arrayPATH); $i++){
				echo '<a href="'.$arrayPATH[$i].'">'.$arrayPATHName[$i].'</a>';
			 }
			?>
			</div>
		</div>
		
	</div>

</div>
</body>
</html>