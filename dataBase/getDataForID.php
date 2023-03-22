<?php
if (!class_exists('ParameterConection')){
include("ParameterConection.php");
}


class GetDataForID extends ParameterConection{

    private  $textNotice="";
    private $textTitle="";
    private $urlImage="";
    private $tag="";
    private $tg=0;

    function setVideo($tg){
        $this->tg=$tg;
    }
    private $arrayJSON="";
    function consultDataServer($id,$sql){
        
        try {
            
            $conection = new PDO('mysql:host='. self::$host. '; dbname='.self::$database , self::$user_db, self::$paswword);

            $conection->exec('SET CHARACTER SET UTF8');

            $result = $conection->prepare($sql);
            $result->execute(array($id));
            if($this->tg==2){
                while ($noticeDetail = $result->fetch(PDO::FETCH_ASSOC)){
                    $this->setArrayJSON($noticeDetail);
                    $this->setTag($noticeDetail["link"]);
                }
            }else{

                while ($noticeDetail = $result->fetch(PDO::FETCH_ASSOC)){
                    $this->setArrayJSON($noticeDetail);
                    $this->setTextDesc($noticeDetail["description"]);
                    $this->setTitle($noticeDetail["title"]);
                    $this->setUrlImage($noticeDetail["image_url"]);
                }
            }

        }catch(Exception $e){
            die("error ".$e->getMessage());
        }finally{
            $conection = null;
        }

    }


    function consultAutoritiesServer($id){
        
        try {
            
            $conection = new PDO('mysql:host='. self::$host. '; dbname='.self::$database , self::$user_db, self::$paswword);

            $conection->exec('SET CHARACTER SET UTF8');
            $sql="SELECT * FROM AUTORIDADES WHERE ID=?";
            $result = $conection->prepare($sql);
            $result->execute(array($id));

           
                while ($noticeDetail = $result->fetch(PDO::FETCH_ASSOC)){
                    $this->setArrayJSON($noticeDetail);
                    
                    $this->setTextDesc($noticeDetail["nombre"]);
                    $this->setTitle($noticeDetail["cargo"]);
                    $this->setUrlImage($noticeDetail["image_url"]);

                }

        }catch(Exception $e){
            die("error ".$e->getMessage());
        }finally{
            $conection = null;
        }

    }
    private function setArrayJSON($array){
        $this->arrayJSON=$array;
    }

    public function getArrayJson(){
        return  $this->arrayJSON;
    }

    private function setTextDesc($text){
        $this->textNotice=$text;
    }
    private function setTitle($text){
        $this->textTitle=$text;
    }
    private function setUrlImage($url){
        $this->urlImage=$url;
    }

    private function setTag($text){
        $this->tag=$text;
    }


    private function getTextDesc(){
        return $this->textNotice;
    }
    private function getTextTitle(){
       return  $this->textTitle;
    }

    private function getImageUrl(){
        return  $this->urlImage;
     }

     private function getLinkVideo(){
        return $this->tag;
     }

    function getNotice(){
        return $this->getTextDesc();
    }

    function getTitle(){
        return $this->getTextTitle();
    }

    function getImage(){
        return $this->getImageUrl();
    }
    function getLink(){
        return $this->getLinkVideo();
    }
}