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
	<script src="https://kit.fontawesome.com/2f997e9f9a.js" crossorigin="anonymous"></script>

<div class="main-container-layout-sliderFP">

<i id="arrorLeftControl" class="fa-sharp fa-solid fa-chevron-left"></i> 

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

 <i id="arrorRightControl" class="fa-sharp fa-solid fa-chevron-right"></i> 

</div>
</body>
</html>