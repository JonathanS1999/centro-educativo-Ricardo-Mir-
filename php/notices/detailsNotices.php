<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>history</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../../css/history/history.css'>
</head>
<body>

<div class="containerHistory">

<?php
if (!class_exists('ParameterConection')){
    include("../../database/ParameterConection.php");
}

    class ViewDetails extends  ParameterConection {

      function getNoticeId($id,$arrayPATHName , $arrayPATH){

          try {
            
               $conection = new PDO('mysql:host='. self::$host. '; dbname='.self::$database , self::$user_db, self::$paswword);
               $conection->exec('SET CHARACTER SET UTF8');
               $sql = 'SELECT * FROM dataproyectnotices where id=?;';
               $result = $conection->prepare($sql);
               $result->execute(array($id));

                while ($noticeDetail = $result->fetch(PDO::FETCH_ASSOC)){
                    $isChangePort=true;
                    
                    include("layoutPortadaMenu/portada.php");
                    echo "<div class='containerHistory'>";
                    echo "<div class='. titleHistory'>
                    <h4> " . $noticeDetail["title"] . "</h4>
                    </div>";

                   echo " <div class='msjContent'>
                   <p> ".$noticeDetail["description"] ."</p> </div>";
                   echo "</div>";

                  }

          }catch(Exception $exception){

          }
        }
    }

if(isset($_GET["id"])){
   $id=$_GET["id"];
   $notDetails= new ViewDetails();
   $notDetails->getNoticeId($id, $arrayPATHName , $arrayPATH);
}

?>

    
</body>
</html>