<?php
if (!class_exists('ParameterConection')){
    include("ParameterConection.php");
}

class DeleteData extends ParameterConection{

    function setDeleteDataServer($id,$sql1,$sql2){
        try {

            include("getDataForID.php");

            $deleteUrlImage=new GetDataForID();
            $deleteUrlImage->consultDataServer($id,$sql1);

            $conection = new PDO('mysql:host='. self::$host. '; dbname='.self::$database , self::$user_db, self::$paswword);

            $conection->exec('SET CHARACTER SET UTF8');

            $sql = 'delete from dataproyectnotices where id=?';

            $result = $conection->prepare($sql2);

            $result->execute(array($id));

            unlink("../../".$deleteUrlImage->getImage());
            
        }catch(Exception $e){
            die("error ".$e->getMessage());
        }finally{
            $conection = null;
        }
    }

    function setDeleteInServer($id,$sql){
        try {

            $conection = new PDO('mysql:host='. self::$host. '; dbname='.self::$database , self::$user_db, self::$paswword);

            $conection->exec('SET CHARACTER SET UTF8');

            $result = $conection->prepare($sql);

            $result->execute(array($id));
            
        }catch(Exception $e){
            die("error ".$e->getMessage());
        }finally{
            $conection = null;
        }
    }
}


?>