<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../../css/galery/layoutContainer.css'>
</head>
<body>




<?php
     include("../../database/ParameterConection.php");
    class ViewImagesInGalery extends  ParameterConection {

      function getImages(){

          try {
            
               $conection = new PDO('mysql:host='. self::$host. '; dbname='.self::$database , self::$user_db, self::$paswword);
               $conection->exec('SET CHARACTER SET UTF8');
               $sql = 'SELECT * FROM photos;';
               $result = $conection->prepare($sql);
               $result->execute();
			         $count=$result->rowCount();

              echo " <div class='layoutGaleryMenu'>";

               $increment = 0;
         
               while ($notices = $result->fetch(PDO::FETCH_ASSOC)){

                if ($increment>2){
                  echo "</div>";
                  echo " <div class='layoutGaleryMenu'>";
                    $increment = 0;
                }

                include("../galery/containerGalery/itemGalery.php");
                $increment++;

               }

               if ( $increment ==0){
                echo "<h3> no hay imagenes en la galeria";
               }

             echo "</div>";
              
           }catch(Exception $e){
               die("error ".$e->getMessage());
           }finally{
               $conection = null;
           }
      }
    }
    
    $viewImages=new ViewImagesInGalery();
    $viewImages->getImages();
    
    ?>
    
</body>
</html>