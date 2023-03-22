
<?php

   if(isset($_POST["actionBase"])){
    $action=$_POST["actionBase"];
    switch($action){
               
        case 1:  
                  $op=$_POST['op'];
                  echo " OPTION".$op;
                  include("../../dataBase/subirData.php");;
                  break;
            
        case 2: 
                        if(isset($_POST['del'])){
                        $delID=$_POST["del"];
                        include("../../dataBase/deleteData.php");
                        $deleteData=new DeleteData();
                        $sql1='SELECT * FROM dataproyectnotices where id=?;';
                        $sql2='delete from dataproyectnotices where id=?';
                        $deleteData->setDeleteDataServer($delID,$sql1,$sql2);
                       }       
                  break;
               
        case 3: 
                 $idUpdate=$_POST["select"];
                 include("../../dataBase/getDataForID.php");
                 $getData= new GetDataForID();
                 $sql='SELECT * FROM dataproyectnotices where id=?;';
                 $getData->consultDataServer($idUpdate,$sql);
                 echo json_encode($getData->getArrayJson());
                 break;
      
        case 4: $table="dataproyectnotices";
                include("../../dataBase/UpdateDataId.php");
    }
    
   }

?>