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
if (!class_exists('ParameterConection')){
     include("../../database/ParameterConection.php");
}
    class ViewImagesInGalery extends  ParameterConection {

      private static $ADMIN=false;

      function getImages($sql,$tg){

          try {
            
               $conection = new PDO('mysql:host='. self::$host. '; dbname='.self::$database , self::$user_db, self::$paswword);
               $conection->exec('SET CHARACTER SET UTF8');
               $result = $conection->prepare($sql);
               $result->execute();
			         $count=$result->rowCount();

              echo " <div class='layoutGaleryMenu'>";

               $increment = 0;

               $admin=ViewImagesInGalery::$ADMIN;
               $index=2;
         
               while ($notices = $result->fetch(PDO::FETCH_ASSOC)){

                if ($increment>2){
                  echo "</div>";
                  echo " <div class='layoutGaleryMenu'>";
                    $increment = 0;
                }

                $linkEdit="'../databaseForm/subirImagesGalery.php?tg=$tg&update=".$notices['id']."'";
                $linkDelete="'../databaseForm/subirImagesGalery.php?tg=$tg&del=".$notices['id']."'";
                $id=$notices['id'];
                if($tg==2){
                   include("../galery/containerGalery/itemVideo.php");
                   $increment=3;
                }else{
                   include("../galery/containerGalery/itemGalery.php");
                }
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

      function setAdmin($admin){
        ViewImagesInGalery::$ADMIN=$admin;
      }

    }
    
    $viewImages=new ViewImagesInGalery();

    if(isset($_GET["tg"])){
      $tipoGaleria=$_GET["tg"];
      $sql="";

        if(isset($admin)){
          $viewImages->setAdmin($admin);
        }

      switch($tipoGaleria){
        case 0:
                  echo "<div class='menuGalery'>
                  <a class='center' href=$arrayLinks[0]> Nuestras instalaciones </a>
                  <a class='centerNOW' href=$arrayLinks[1]> Fotos  </a>
                  <a class='center' href=$arrayLinks[2]> Videos </a>
                  </div>";
                 $sql="SELECT * FROM photos";
                 $viewImages->getImages($sql,$tipoGaleria);
                 break;
        case 1: 
                  echo "<div class='menuGalery'>
                       <a class='centerNOW' href=$arrayLinks[0]> Nuestras instalaciones </a>
                       <a class='center' href=$arrayLinks[1]> Fotos  </a>
                       <a class='center' href=$arrayLinks[2]> Videos </a>
                       </div>";
                  $sql="SELECT * FROM instalaciones";
                   $viewImages->getImages($sql,$tipoGaleria);
                  break;
        case 2:
                  echo "<div class='menuGalery'>
                  <a class='center' href=$arrayLinks[0]> Nuestras instalaciones </a>
                  <a class='center' href=$arrayLinks[1]> Fotos  </a>
                  <a class='centerNOW' href=$arrayLinks[2]> Videos </a>
                  </div>";
                 $sql="SELECT * FROM videos order by id desc ";
                 $viewImages->getImages($sql,$tipoGaleria);
                 break;
      }
    }

    
    ?>
    
</body>
</html>