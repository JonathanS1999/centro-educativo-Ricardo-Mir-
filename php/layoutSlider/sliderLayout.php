<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>slider Index</title>
	<link rel="stylesheet" type="text/css" href="css/layoutSlider/sliderLayout.css">
</head>
<body>

<div class="main-container-layout-slider">
<!--<div class="slider-container">-->




<?php
    $showAllNotices=true;
	$notices;
    include("database/ParameterConection.php");

    class ViewNotices extends  ParameterConection {



		function getCountNtices(){
			/*
			$count=0;
			try {

            
				$conection = new PDO('mysql:host='. self::$host. '; dbname='.self::$database , self::$user_db, self::$paswword);
				$conection->exec('SET CHARACTER SET UTF8');
				$sql = 'select COUNT(id) from dataproyectnotices;';
				$result = $conection->prepare($sql);
				$result->execute();
				$result->rowCount();
				$count=$result->rowCount();
				echo "<h2> "
	
			   
			}catch(Exception $e){
				die("error ".$e->getMessage());
			}finally{
				$conection = null;
			}
			return $count;*/
		}

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
			   echo "<h2> width: ".($auxMas*100)."% </h2>";
			   
			   echo " <style>
			   .slider-container{
				width: ".($auxMas*100)."%;
				height: 100%;
				display: flex;
				margin: 0 auto;
				padding: 10px;
				background: orangered;
				animation: slide 30s infinite alternate ease-in-out;
			    }
			 
			   </style>";
			   

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


<!--</div>--fin slider-container -->
</div><!--fin main-container-layout-slider-->
</body>
</html>