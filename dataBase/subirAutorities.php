<?php
if(!class_exists("ParameterConection")){
    include("ParameterConection.php");
}

class SubirData extends ParameterConection{


    function setDataServer($url_image, $cargo, $nombre){

        
        try {
            
            $conection = new PDO('mysql:host='. self::$host. '; dbname='.self::$database , self::$user_db, self::$paswword);

            $conection->exec('SET CHARACTER SET UTF8');

            $sql = 'insert into autoridades(image_url, cargo , nombre ) values ( ? , ? , ? );';

            $result = $conection->prepare($sql);

            $result->execute(array($url_image, $cargo, $nombre));

            echo " se ha insertado con exito ";
            
            
        }catch(Exception $e){
            die("error ".$e->getMessage());
        }finally{
            $conection = null;
        }

    }

}

if(isset($_POST['btn'])){

    $nombre_imagen = $_FILES['imagen'] ['name'];
    $tipo_imagen = $_FILES['imagen']['type'];
    $tam_imagen = $_FILES['imagen']['size'];
    $cargo = $_POST['cargo'];
    $nombre = $_POST['nombre'];

    if($tipo_imagen=="image/jpeg" || $tipo_imagen=="image/jpg" || $tipo_imagen=="image/png" || $tipo_imagen=="image/gif"){

    if ($tam_imagen < 5000000){
        $carpetaDestino = $_SERVER['DOCUMENT_ROOT'] . '/centroEdu/centro-educativo-Ricardo-Mir-/images/autoridades/';
            $img_url = $carpetaDestino . $nombre_imagen;
        move_uploaded_file($_FILES['imagen']['tmp_name'], $img_url);
        $subirDatos = new SubirData();
        $subirDatos->setDataServer("images/autoridades/".$nombre_imagen, $cargo, $nombre ); 

    }else{
        echo " la imagen es demasiado grande";
    }
 }else{
    echo " por favor  selecciona una imagen";
 }

}else{
    echo " no pasa por btn";
}

?>