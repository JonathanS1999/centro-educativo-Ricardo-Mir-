<?php
if (!class_exists('ParameterConection')){
include("ParameterConection.php");
}


class GetDataForID extends ParameterConection{

    private  $textNotice="";
    private $textTitle="";
    private $urlImage="";

    function consultDataServer($id,$sql){
        
        try {
            
            $conection = new PDO('mysql:host='. self::$host. '; dbname='.self::$database , self::$user_db, self::$paswword);

            $conection->exec('SET CHARACTER SET UTF8');

            $result = $conection->prepare($sql);
            $result->execute(array($id));

                while ($noticeDetail = $result->fetch(PDO::FETCH_ASSOC)){
                    $this->setTextDesc($noticeDetail["description"]);
                    $this->setTitle($noticeDetail["title"]);
                    $this->setUrlImage($noticeDetail["image_url"]);
                }

            
            
        }catch(Exception $e){
            die("error ".$e->getMessage());
        }finally{
            $conection = null;
        }

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


    private function getTextDesc(){
        return $this->textNotice;
    }
    private function getTextTitle(){
       return  $this->textTitle;
    }

    private function getImageUrl(){
        return  $this->urlImage;
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

}