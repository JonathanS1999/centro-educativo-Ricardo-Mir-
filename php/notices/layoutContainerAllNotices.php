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
   
    if (!class_exists('ParameterConection')){
        include("../../database/ParameterConection.php");
    }

    class ViewNoticesAll extends  ParameterConection {

        private static $ADMIN=false;

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
               $admin=ViewNoticesAll::$ADMIN;
               while ($notices = $result->fetch(PDO::FETCH_ASSOC)){
                   if($count==3){
                    echo $arrayDiv[1];
                    echo $arrayDiv[0];
                    $count=0;
                   }
                   
                   $linkEdit="'../databaseForm/subirDataForm.php?op=0&update=".$notices['id']."'";
                   $linkDelete="'../databaseForm/subirDataForm.php?op=0&del=".$notices['id']."'";
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

       function setAdmin($admin){
        ViewNoticesAll::$ADMIN=$admin;
      }
    
    }
    

    $viewNotices=new ViewNoticesAll();
    $sql="";

    if($opt=="pr"){
        $sql='SELECT * FROM dataproyectnotices where tipo=1;';
        if(isset($admin)){
            $viewNotices->setAdmin($admin);
        }
        $viewNotices->getNoytices($sql);
    }else{
         if(isset($admin)){
             $viewNotices->setAdmin($admin);
         }
        $sql='SELECT * FROM dataproyectnotices where tipo=0;';
        $viewNotices->getNoytices($sql);
    }
    
    ?>


    
</body>
</html>