<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css">
</head>
<body>

<?php
 $prevPath="";
?>

<?php
$arrayImg=array($prevPath."images/galeria/img1.jpg",$prevPath."images/galeria/img2.jpg",$prevPath."images/galeria/img3.jpg",
	$prevPath."images/galeria/img4.jpg",$prevPath."images/galeria/img5.jpg",$prevPath."images/galeria/img6.jpg", $prevPath."images/colegio.PNG");


$inic=0;
$finish=4;
if ($itemGalery>0){
$inic=4;
$finish=count($arrayImg);
}

for($i=$inic;$i<$finish;$i++){


?>
	<div class="cardIns">
		<img src="<?php echo "". $arrayImg[$i]; ?>"/>
	</div>
<?php

}

$itemGalery=count($arrayImg);
?>
</body>
</html>