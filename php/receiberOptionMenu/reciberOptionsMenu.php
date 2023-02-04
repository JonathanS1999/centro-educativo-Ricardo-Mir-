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
	include("layoutPortadaMenu/portada.php");
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
			case "ad":
				include("../admision/admision.php");
				break;
			case "ga":
				include("../galery/containerGalery/layoutGalery.php");
				include("../galery/containerGalery/layoutGalery.php");
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