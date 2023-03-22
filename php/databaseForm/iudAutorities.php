
<?php

   if(isset($_POST["actionBase"])){
    $action=$_POST["actionBase"];
    switch($action){
        
        case 1: include("../../dataBase/subirAutorities.php");
                 break;
        case 2: if(isset($_POST['del'])){
                     $delID=$_POST["del"];
                     include("../../dataBase/deleteData.php");
                     $deleteData=new DeleteData();
                     $sql = 'delete from autoridades where id=?';
                     $deleteData->setDeleteInServer($delID,$sql);
                     }  
               break;
        case 3: $idUpdate=$_POST["select"];
                 include("../../dataBase/getDataForID.php");
                 $getData= new GetDataForID();
                 $getData->consultAutoritiesServer($idUpdate);
                 echo json_encode($getData->getArrayJson());
                 break;
        case 4: 
          $table="autoridades";
          include("../../dataBase/updateAutories.php");
    }
    
   }

?>