<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<?php
	$url="../../";
	?>
	<link href=<?php echo '"'.$url.'css/body/styleBody.css"' ?> 
	type="text/css" rel="stylesheet"/>
</head>
<body>

<?php
$index=2;
include('../navBar/navBar.php');
?>

<?php
if (isset($_GET["op"]) ) {
	$opt = $_GET["op"];
	include("controller.php");

	$arrayPATHName = getPathName($opt);
	$arrayPATH=getPath($opt);

	if(!isset($_GET["id"])){
		$isChangePort=false;
		include("layoutPortadaMenu/portada.php");
	}
	
}
?>
<?php
if(isset($_GET["op"])){

	$opt=$_GET["op"];

	switch($opt){
			case "mv":
				include("../misionVision/misionVision.php");
				break;
			case "at":
				include("../autorities/layoutAutorities.php");
				break;
			case "ht":
				include("../history/history.php");
				break;
			case "co":
				include("../layoutCardsContact/layoutCardsContact.php");
				include("../layoutRedesSociales/redesSociales.php");
				break;
			case "nt":
				include("../notices/layoutContainerAllNotices.php");
				break;
			case "pr":
				include("../notices/layoutContainerAllNotices.php");
				break;
			case "ntdt":
				include("../notices/detailsNotices.php");
				break;
			case "oa1": $noticeDetail=array("image_url"=>"images/galeria/img1.jpg");
			            $title=array("preescolar");
						$description=array("El preescolar se ofrece en 
						escuelas públicas e incorporadas, con maestros 
						capacitados y programas educativos acordes 
						a las necesidades y características de los niños.");
						include("../academicOffer/detailsOfertAcademic.php");
						break;
			case "oa2": $noticeDetail=array("image_url"=>"images/galeria/img1.jpg");
						$title=array("primaria");
						$description=array("Primaria ha sido creado para que los niños aprendan,
						 refuercen y repasen las materias del colegio de forma amena. Para ello, 
						hemos creado un montón de recursos");
						include("../academicOffer/detailsOfertAcademic.php");
						break;
			case "oa3": $noticeDetail=array("image_url"=>"images/galeria/img1.jpg");
						$title=array("premedia");
						$description=array("La Educación Pre-media es la etapa final de la
						 Educación Básica General y 
						comprende los grados de séptimo, octavo y noveno grado. Durante estos 
						niveles continuará
						 y profundizará la formación 
						integral del educando, con ");
						include("../academicOffer/detailsOfertAcademic.php");
						break;
			case "ad":
				include("../admision/admision.php");
				break;
			case "mp":
					include("../maps/maps.php");
					break;
			case "ga":
				$arrayLinks=array("'reciberOptionsMenu.php?view=2&op=ga&tg=1'",
				"'reciberOptionsMenu.php?view=2&op=ga&tg=0'",
				"'reciberOptionsMenu.php?view=2&op=ga&tg=2'");
				include("../galery/containerGalery/layoutGalery.php");
				break;
	}

}

?>



<?php 
include("../footPage/footPage.php");
?>

</body>
</html>