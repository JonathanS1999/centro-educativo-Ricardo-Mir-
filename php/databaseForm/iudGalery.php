
<?php

   if(isset($_POST["actionBase"])){
    $action=$_POST["actionBase"];
    $tg=$_POST["tg"];
    switch($action){
        case 1:  echo(" estamos insertando en la base de datos");
            switch($tg){
            case 0: $table="photos";
                    break;
            case 1: $table="instalaciones";
                    break;
            case 2: $table="videos";
                    break;
            }
            include("../../dataBase/subirImagesGalery.php");
            break;
        case 2 : if(isset($_POST['del'])){

                    $delID=$_POST["del"];
                    include("../../dataBase/deleteData.php");
                    $deleteData=new DeleteData();
                    switch($tg){
                        case 0: $sql1='SELECT * FROM photos where id=?;';
                                $sql2='delete from photos where id=?';
                                $deleteData->setDeleteDataServer($delID,$sql1,$sql2);
                                break;
                        case 1: $sql1='SELECT * FROM instalaciones where id=?;';
                                $sql2='delete from instalaciones where id=?';
                                $deleteData->setDeleteDataServer($delID,$sql1,$sql2);
                                break;
                        case 2:
                                $sql = 'delete from videos where id=?';
                                $deleteData->setDeleteInServer($delID,$sql);
                                break;
                    }
                }
            break;
        case 3:
                    $idUpdate=$_POST["select"];
                    include("../../dataBase/getDataForID.php");
                    $getData= new GetDataForID();
                    $sql="";
                        switch($tg){
                            case 0:$sql="SELECT * FROM PHOTOS WHERE ID=?;";
                                break;
                            case 1:$sql="SELECT * FROM instalaciones WHERE ID=?;";
                                break;
                            case 2:$sql="SELECT * FROM videos WHERE ID=?;";
                                break;
                        }
                        if($tg==2){
                            $getData->setVideo($tg);
                        }
                    $getData->consultDataServer($idUpdate,$sql);
                    echo json_encode($getData->getArrayJson());
                    break;
        case 4: 
                    switch($tg){
                        case 0: $table="photos";
                                break;
                        case 1:$table="instalaciones";
                                break;
                        case 2:$table="videos";
                                break;
                        }
                    include("../../dataBase/UpdateDataId.php");
    }
}

?>