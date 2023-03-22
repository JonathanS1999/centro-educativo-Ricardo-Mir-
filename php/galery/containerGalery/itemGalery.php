<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>

    <?php
	$varUrlMV = "";
	if($index==2){
		$varUrlMV = "../../";
	}
	?>

    <link rel='stylesheet' type='text/css' media='screen' href='../../css/galery/itemGalery.css'>
</head>
<body>

    <div class="itemGaleryContainer">
         <img src=<?php echo "'../../".$notices['image_url']."'"; ?> />
        <h4>
            
        <?php
		echo $notices['title'];
		?>
        </h4>
        <p>
            <?php
			 echo $notices['description'];
             ?>
             
        </p>
        

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