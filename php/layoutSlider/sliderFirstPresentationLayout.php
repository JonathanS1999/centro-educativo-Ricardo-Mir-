<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>slider Index</title>
	<link rel="stylesheet" type="text/css" href="css/sliderLayoutFirstPresentation/sliderLayoutFirstPresentation.css">
</head>
<body>
	<script src="js/controllerSlider.js">
	</script>

<div class="main-container-layout-sliderFP">

<img  src="images/icons/arrows/arrowLeft.png" id="arrorLeftControl"/>

<div class="slider-containerFP">

	<div class="container-boxFP">
	          <img src="images/portada2.jpg">
	</div>

	<div class="container-boxFP">
	           <?php
					include("php/layoutItemCardAdmisionSlider/layoutItemCardAdmisionSlider.php");
				?>
	</div>

	
</div>

<img src="images/icons/arrows/arrowRight.png" id="arrorRightControl"/>

</div><!--fin main-container-layout-slider-->
</body>
</html>