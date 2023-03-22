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


<?php
    $showAllNotices=true;
	$notices;
	if (!class_exists('ParameterConection')){
    include("../../database/ParameterConection.php");
	}

    class ViewNotices extends  ParameterConection {
		private $cantNotices=3;
		function setCantNotices($cant){
			$this->cantNotices=$cant;
		}

      function getNoytices(){

          try {
            
               $conection = new PDO('mysql:host='. self::$host. '; dbname='.self::$database , self::$user_db, self::$paswword);
               $conection->exec('SET CHARACTER SET UTF8');
               $sql = 'SELECT * FROM dataproyectnotices where tipo=0 order by id desc;';
               $result = $conection->prepare($sql);
               $result->execute();
			   $count=$result->rowCount();

			   if ( $count ==0){
				echo " <h3> No hay noticias para mostrar </h3>";
			   } else {
			   $cantNoticeInContainer=$this->cantNotices;

			   $module=($count%$cantNoticeInContainer);
			   $auxMas=(int)($count/$cantNoticeInContainer);

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

			echo "<i id='arrorLeftControlNT' class='fa-sharp fa-solid fa-chevron-left'></i> ";


			   echo "<div width='" . ($auxMas*100)."%'   class='slider-container'  >";
			   
			   $count=0;
			   $arrayDiv=  array("<div class='container-box'>" , "</div>");
			   echo $arrayDiv[0];
			   $index=1;
               while ($notices = $result->fetch(PDO::FETCH_ASSOC)){

				if ($count==$cantNoticeInContainer){
					echo $arrayDiv[1];
					echo $arrayDiv[0];
					$count=0;
				}

				$id=$notices["id"];
				   include("../notices/itemCardNotice.php");

				   $count++;
               }


			


			   echo $arrayDiv[1];

			   echo "</div>";

			   echo  "<i id='arrorRightControlNT' class='fa-sharp fa-solid fa-chevron-right'></i> ";


			}
			  
   
              
           }catch(Exception $e){
               die("error ".$e->getMessage());
           }finally{
               $conection = null;
           }

      }
    
    }
    

    $viewNotices=new ViewNotices();
	if(isset($_GET["cn"])){
		$cantNotices=$_GET["cn"];
		if($cantNotices<500){
			$viewNotices->setCantNotices(1);
		}else if($cantNotices<800){
			$viewNotices->setCantNotices(2);
		}
	}
    $viewNotices->getNoytices();

    ?>


</div><!--fin main-container-layout-slider-->
</body>
</html>