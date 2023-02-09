<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>slider Index</title>
	<link rel="stylesheet" type="text/css" href="css/layoutSlider/sliderLayout.css">
</head>
<body>
<script src="js/controllerSliderNoticesIndex.js">
	</script>

<div class="main-container-layout-slider">

<i id="arrorLeftControlNT" class="fa-sharp fa-solid fa-chevron-left"></i> 


<?php
    $showAllNotices=true;
	$notices;
    include("database/ParameterConection.php");

    class ViewNotices extends  ParameterConection {

      function getNoytices(){

          try {
            
               $conection = new PDO('mysql:host='. self::$host. '; dbname='.self::$database , self::$user_db, self::$paswword);
               $conection->exec('SET CHARACTER SET UTF8');
               $sql = 'SELECT * FROM dataproyectnotices;';
               $result = $conection->prepare($sql);
               $result->execute();
			   $count=$result->rowCount();
			   $module=($count%3);
			   $auxMas=(int)($count/3);

			   if ($module>0){
				$auxMas++;
			   }

			   
			   
			   echo " <style>

			   .slider-container{
				width: ".($auxMas*100)."%;
				height: 100%;
				display: flex;
				margin: 0 auto;
				transition: margin-left 1s;
				animation: slide 15s infinite alternate ease-in-out;
			    }
				
				.slider-container .container-box{
					display: flex;
					width: 100%;
					height: 100%;
				}

				";

			echo "</style>"; 


			   echo "<div width='" . ($auxMas*100)."%'   class='slider-container'  >";
			   
			   $count=0;
			   $arrayDiv=  array("<div class='container-box'>" , "</div>");
			   echo $arrayDiv[0];
			   $index=1;
               while ($notices = $result->fetch(PDO::FETCH_ASSOC)){

				if ($count==3){
					echo $arrayDiv[1];
					echo $arrayDiv[0];
					$count=0;
				}

				   include("php/notices/itemCardNotice.php");

				   $count++;
               }

			   echo $arrayDiv[1];

			   echo "</div>";
   
              
           }catch(Exception $e){
               die("error ".$e->getMessage());
           }finally{
               $conection = null;
           }

      }
    
    }
    

    $viewNotices=new ViewNotices();
    $viewNotices->getNoytices();

    ?>
 <i id="arrorRightControlNT" class="fa-sharp fa-solid fa-chevron-right"></i> 

</div><!--fin main-container-layout-slider-->
</body>
</html>