<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../../css/notices/layoutContainerAllNotices.css'>
</head>
<body>

    <?php
    $showAllNotices=true;

    include("ParameterConection.php");

    class ViewNotices extends  ParameterConection {

      function getNoytices(){

          try {

            
               $conection = new PDO('mysql:host='. self::$host. '; dbname='.self::$database , self::$user_db, self::$paswword);
   
               $conection->exec('SET CHARACTER SET UTF8');
   
               $sql = 'SELECT * FROM dataproyectnotices;';
   
               $result = $conection->prepare($sql);
   
               $result->execute();
   
               while ($notices = $result->fetch(PDO::FETCH_ASSOC)){
                   echo "url= ".$notices['image_url'];
               }
   
              
           }catch(Exception $e){
               die("error ".$e->getMessage());
           }finally{
               $conection = null;
           }

      }
    
    }
    

    $viewNotices=new ViewNotices();
    $viewNotices->getNoytices();

    echo "<h2> si pasa por aqui noticias </h2>";

    ?>

    <div class="layoutContainerAllNotices">
        <?php
        include("../notices/itemCardNotice.php");
        include("../notices/itemCardNotice.php");
        include("../notices/itemCardNotice.php");
        include("../notices/itemCardNotice.php");
        ?>
   </div> 

   
   <div class="layoutContainerAllNotices">
        <?php
        include("../notices/itemCardNotice.php");
        include("../notices/itemCardNotice.php");
        include("../notices/itemCardNotice.php");
        include("../notices/itemCardNotice.php");
        ?>
   </div>

   
   <div class="layoutContainerAllNotices">
        <?php
        include("../notices/itemCardNotice.php");
        include("../notices/itemCardNotice.php");
        include("../notices/itemCardNotice.php");
        include("../notices/itemCardNotice.php");
        ?>
   </div>
    
</body>
</html>