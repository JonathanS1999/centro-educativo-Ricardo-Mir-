<?php
if (!class_exists('ParameterConection')){
    include("ParameterConection.php");
}

class UpdateData extends ParameterConection{
    private $table="";
    function __construct($table){
        $this->table=$table;
    }


    function updateDataServerText( $atr1, $atr2 , $id){

        try {
            
            $conection = new PDO('mysql:host='. self::$host. '; dbname='.self::$database , self::$user_db, self::$paswword);

            $conection->exec('SET CHARACTER SET UTF8');

            $sql = "update $this->table set title=? ,  description=? where id=?;";

            $result = $conection->prepare($sql);
    
            $result->execute(array($atr1, $atr2, $id));
           
        }catch(Exception $e){
            die("error ".$e->getMessage());
        }finally{
            $conection = null;
        }

    }



    function updateDataServerImage($url_image, $title, $description , $id ){

        
        try {
            
            $conection = new PDO('mysql:host='. self::$host. '; dbname='.self::$database , self::$user_db, self::$paswword);

            $conection->exec('SET CHARACTER SET UTF8');

            $sql = "update $this->table set image_url=? , title=? ,  description=? where id=?;";

            $result = $conection->prepare($sql);

            $result->execute(array($url_image, $title, $description, $id));

            
        }catch(Exception $e){
            die("error ".$e->getMessage());
        }finally{
            $conection = null;
        }
        
    }


    function updateDataServerTag($id,$tag){

        try {
            
            $conection = new PDO('mysql:host='. self::$host. '; dbname='.self::$database , self::$user_db, self::$paswword);

            $conection->exec('SET CHARACTER SET UTF8');

            $sql = "update $this->table set link=? where id=?;";

            $result = $conection->prepare($sql);
    
            $result->execute(array( $tag, $id));
           
        }catch(Exception $e){
            die("error ".$e->getMessage());
        }finally{
            $conection = null;
        }

    }



     function getImageUrl($id){
        try {
            
            $conection = new PDO('mysql:host='. self::$host. '; dbname='.self::$database , self::$user_db, self::$paswword);
            $conection->exec('SET CHARACTER SET UTF8');

            $sql = "SELECT image_url from $this->table where id=?;";

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
    $actualizarDatos = new UpdateData($table);
    $id=$_POST['id'];

    if(!isset($tg)){
        $tg=-1;
    }

    if($tg==2){
        $tag = $_POST['areatexto'];
        $actualizarDatos->updateDataServerTag($id,$tag);
    }else{
    $nombre_imagen = $_FILES['imagen'] ['name'];
    $tipo_imagen = $_FILES['imagen']['type'];
    $tam_imagen = $_FILES['imagen']['size'];
    $title = $_POST['title'];
    $description = $_POST['areatexto'];


    if(!strcmp($nombre_imagen,"")){

        $actualizarDatos->updateDataServerText( $title, $description , $id);

    }else{
        
        unlink("../../".$actualizarDatos->getImageUrl($id));

        if($tipo_imagen=="image/jpeg" || $tipo_imagen=="image/jpg" || $tipo_imagen=="image/png" || $tipo_imagen=="image/gif"){

            if ($tam_imagen < 5000000){
                $carpetaDestino = $_SERVER['DOCUMENT_ROOT'] . '/centroEdu/centro-educativo-Ricardo-Mir-/images/notices/';
                    $img_url = $carpetaDestino . $nombre_imagen;
                move_uploaded_file($_FILES['imagen']['tmp_name'], $img_url);
                $actualizarDatos->updateDataServerImage("images/notices/".$nombre_imagen, $title, $description , $id ); 
        
            }else{
                echo " la imagen es demasiado grande";
            }
         }else{
            echo " por favor  selecciona una imagen";
         }
    }
}
}

?>