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
   
    include("../../database/ParameterConection.php");

    class ViewNoticesAll extends  ParameterConection {

      function getNoytices($sql){

          try {

            
               $conection = new PDO('mysql:host='. self::$host. '; dbname='.self::$database , self::$user_db, self::$paswword);
   
               $conection->exec('SET CHARACTER SET UTF8');

   
               $result = $conection->prepare($sql);
   
               $result->execute();

               $arrayDiv=array( "<div class='layoutContainerAllNotices'>", "</div>");
               echo $arrayDiv[0];

               $count=0;
               $index=2;

               while ($notices = $result->fetch(PDO::FETCH_ASSOC)){
                   if($count==3){
                    echo $arrayDiv[1];
                    echo $arrayDiv[0];
                    $count=0;
                   }
                   include("../notices/itemCardNotice.php");
                   $count++;
               }

               echo $arrayDiv[1];
   
              
           }catch(Exception $e){
               die("error ".$e->getMessage());
           }finally{
               $conection = null;
           }

      }
    
    }
    

    $viewNotices=new ViewNoticesAll();
    $sql="";
    if($opt=="pr"){
        $sql='SELECT * FROM dataproyectnotices where tipo=1;';
        $viewNotices->getNoytices($sql);
    }else{
        $sql='SELECT * FROM dataproyectnotices where tipo=0;';
        $viewNotices->getNoytices($sql);
    }
    
    ?>


    
</body>
</html>