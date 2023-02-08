<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<?php
	$varUrlMV = "";
	if($index==2){
		$varUrlMV = "../../";
	}
	?>
	<link rel="stylesheet" type="text/css" href=<?php echo '"'.$varUrlMV.'css/notices/itemCardNotice.css"';?>>
</head>
<body>
	<div class="itemNI">

							<div class="topContentNI">
								<img src=<?php echo "'".$notices['image_url']."'"; ?> />
							</div>

							<div class="fechaNI">

									<div class="elementRightFeha">
										
									</div>

									<div class="insideDivFecha">
										<div>
											<h4> Miercoles 8 de febrero, 2023</h4>
										</div>
									</div>

								<img src=<?php echo '"'.$varUrlMV.'images/icons/calendar.webp"';?>/>
								
							</div>

							<div class="bottomCardNI">
										<div class="centerContentNI">
										 	<h4 class="centerContentNI"> 
												
											 <?php
											 echo $notices['title'];
											 ?>

											</h4>
										</div>
										<div class="centerContentNI">
										 	<p class="centerContentNI">
												<?php
												   echo $notices['description'];
                                                 ?>
											</p>
										</div>
										<div class="centerContentNI">
											<button>Continuar leyendo</button>
										</div>
						    </div>
				
    </div>


</body>
</html>