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

      function getImages($sql){

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
                $linkEdit="'../databaseForm/subirImagesGalery.php?tg=0&update=".$notices['id']."'";
                $linkDelete="'../databaseForm/subirImagesGalery.php?tg=0&del=".$notices['id']."'";
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
        case 1 : 
                echo "<div class='menuGalery'>
                     <a class='centerNOW' href='reciberOptionsMenu.php?view=2&op=ga&tg=1'> Nuestras instalaciones </a>
                     <a class='center' href='reciberOptionsMenu.php?view=2&op=ga&tg=2'> Fotos  </a>
                     <a class='center' href='#'> Videos </a>
                     </div>";
                $sql="SELECT * FROM instalaciones";
                 $viewImages->getImages($sql);
                break;
        default :
                  echo "<div class='menuGalery'>
                  <a class='center' href='reciberOptionsMenu.php?view=2&op=ga&tg=1'> Nuestras instalaciones </a>
                  <a class='centerNOW' href='reciberOptionsMenu.php?view=2&op=ga&tg=2'> Fotos  </a>
                  <a class='center' href='#'> Videos </a>
                  </div>";
                 $sql="SELECT * FROM photos";
                 $viewImages->getImages($sql);
                 break;
      }
    }

    
    ?>
    
</body>
</html>