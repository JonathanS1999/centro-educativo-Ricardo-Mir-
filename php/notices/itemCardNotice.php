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
								<img src=<?php echo "'".$varUrlMV."".$notices['image_url']."'"; ?> />
							</div>

							<div class="fechaNI">

									<div class="elementRightFeha">
										
									</div>

									<div class="insideDivFecha">
										<div>
											<h4> 
											<?php
											echo "".$notices['fecha'];
											?></h4>
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
												    $noticeDescription=$notices['description'];
												   if(strlen($noticeDescription)>120 || str_word_count($noticeDescription)>20){
													echo substr($noticeDescription,0,120) . " ...";
												   }else{
													echo $noticeDescription;
												   }
                                                 ?>
											</p>
										</div>
										<div class="centerContentNI">
											<a href=<?php 
											if ($index==2){
												echo "'reciberOptionsMenu.php?view=1&op=ntdt&id=".$notices['id']."'";
											}else{
											 echo "'php/receiberOptionMenu/reciberOptionsMenu.php?view=1&op=ntdt&id=".$notices['id']."'";
										      }
										  ?>> 

										  <?php
										  if(isset($admin)){
										  if(!$admin){
											echo "Continuar leyendo";
										  }
										}else{
											echo "Continuar leyendo";
										}
												
												?>
											</a>
										</div>

										<?php
										if(isset($admin)){
										if($admin){
											include("optionsItemAdminin.php");
										}
									    }
								   		?>

										
						    </div>
				
    </div>


</body>
</html>