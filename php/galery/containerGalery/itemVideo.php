<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title></title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../../css/galery/itemVideo.css'>
</head>
<body>
<?php
	$varUrlMV = "";
	if($index==2){
		$varUrlMV = "../../";
	}
	?>
	
    <div class="containerItemVideo">
        <div class="containerItemVideo2">
           <?php echo "".$notices['link'].""; ?>
		</div>

         <?php 
										if(isset($admin)){
										if($admin){
											include("../notices/optionsItemAdminin.php");
										}
									    }
                                        
								   		?>
    </div>

    
</body>
</html>