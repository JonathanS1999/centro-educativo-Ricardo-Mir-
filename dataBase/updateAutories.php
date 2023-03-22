<?php
if (!class_exists('ParameterConection')){
    include("ParameterConection.php");
}

class UpdateDataAutorities extends ParameterConection{

    function updateDataServer( $array , $sql){

        try {
            
            $conection = new PDO('mysql:host='. self::$host. '; dbname='.self::$database , self::$user_db, self::$paswword);

            $conection->exec('SET CHARACTER SET UTF8');

            $result = $conection->prepare($sql);
    
            $result->execute($array);
           
        }catch(Exception $e){
            die("error ".$e->getMessage());
        }finally{
            $conection = null;
        }

    }






     function getImageUrl($id,$sql){
        try {
            
            $conection = new PDO('mysql:host='. self::$host. '; dbname='.self::$database , self::$user_db, self::$paswword);
            $conection->exec('SET CHARACTER SET UTF8');

            $result = $conection->prepare($sql);
            $result->execute(array($id));

                while ($noticeDetail = $result->fetch(PDO::FETCH_ASSOC)){
                    return $noticeDetail["image_url"];
                }
            
        }catch(Exception $e){
            die("error ".$e->getMessage());
        }finally{
            $conection = null;
        }
    }

}

if(isset($_POST['id'])){
    $actualizarDatos = new UpdateDataAutorities();
    $id=$_POST['id'];

    $nombre_imagen = $_FILES['imagen'] ['name'];
    $tipo_imagen = $_FILES['imagen']['type'];
    $tam_imagen = $_FILES['imagen']['size'];
    $cargo = $_POST['cargo'];
    $nombre = $_POST['nombre'];

    if(!strcmp($nombre_imagen,"")){
        $array=array($cargo,$nombre,$id);
        $sql="update autoridades set cargo=? , nombre=?  where id=?";
        $actualizarDatos->updateDataServer( $array,$sql);

    }else{
        $sql = "SELECT image_url from autoridades where id=?;";
        
        unlink("../../".$actualizarDatos->getImageUrl($id,$sql));

        if($tipo_imagen=="image/jpeg" || $tipo_imagen=="image/jpg" || $tipo_imagen=="image/png" || $tipo_imagen=="image/gif"){

            if ($tam_imagen < 5000000){
                $carpetaDestino = $_SERVER['DOCUMENT_ROOT'] . '/centroEdu/centro-educativo-Ricardo-Mir-/images/notices/';
                    $img_url = $carpetaDestino . $nombre_imagen;
                move_uploaded_file($_FILES['imagen']['tmp_name'], $img_url);
                
                $array=array("images/notices/".$nombre_imagen ,$cargo,$nombre,$id);
                $sql="update autoridades set image_url=? , cargo=? , nombre=? where id=?";
                $actualizarDatos->updateDataServer( $array,$sql);
        
            }else{
                echo " la imagen es demasiado grande";
            }
         }else{
            echo " por favor  selecciona una imagen";
         }
    }

}else{
    echo "estamos teniendo problemas para atulizar";
}

?>