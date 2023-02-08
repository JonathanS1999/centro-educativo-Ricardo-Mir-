<?php

include ("../../database/ParameterConection.php");
class IniciarSesion extends ParameterConection{

    static function verifiPaswd($user, $passwd){

        try {

            
            $conection = new PDO('mysql:host='. self::$host. '; dbname='.self::$database , self::$user_db, self::$paswword);

            $conection->exec('SET CHARACTER SET UTF8');

            $sql = 'SELECT user FROM administrators where user=? and PASSW=? ';

            $result = $conection->prepare($sql);

            $result->execute(array($user, $passwd));

            while ($user = $result->fetch(PDO::FETCH_ASSOC)){
                echo " si esxite el usuario ".$user['user'];
            }

           

            
            
        }catch(Exception $e){
            die("error ".$e->getMessage());
        }finally{
            $conection = null;
        }
    }

}


if( isset($_POST["user"])){

    $user = $_POST["user"];
    $passw = $_POST["password"];
    IniciarSesion::verifiPaswd($user,$passw);

}



?>