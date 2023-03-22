<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>subir data </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css'  href='../../css/styleformAdmin/styleForm.css'>
</head>
<body>
<?php
if(isset($_GET['tg'])){
 $tg=$_GET['tg'];
}

 $updateUrl="";
 if(isset($_GET["update"])){
    $idUpdate=$_GET["update"];
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
    $updateUrl="setUpdate=".$idUpdate;
 }

?>
<div class="containerForm">

<div class="centerTitle" > <h3> Editar galeria </h3> </div>

<div class="containerForm2">

<form class="form" action=<?php echo "'subirImagesGalery.php?tg=".$tg."&".$updateUrl."'"; ?> method="post" enctype="multipart/form-data">
    <table id="table">
        <tr>
            <?php if (isset($tg)){
                if($tg!=2){

                ?>
        <td>
            <label for="imagen" >Imagen</label> 
            <?php
            if(isset($getData)){
                echo "<img src='../../".$getData->getImage()."' class='imageUpdate' />";
            }
            ?>
            <div class="ajustTextFile">
            <input type="file" name="imagen"  <?php
                                                if(!isset($getData)){
                                                    echo 'required="required"';
                                                }  ?>/>  </div>
        </td>
        </tr>


        <tr>
        <td>
            <div>
            <label> titulo </label> </br>
            <input type="text"  required="required" name="title" value=<?php
            if(isset($getData)){
            echo "'".$getData->getTitle()."'";
             }
             else{
                echo "''";
             }
             ?>/>
            </div>
        </td>
        </tr>

        <?php 
            }
         }
        ?>
        <tr>
        <td>
            <div>
            <label> 
            <?php if (isset($tg)){
                if($tg!=2){
                    echo "descripción";
                }else{
                    echo "Inserta la etiqueta del video";
                }
             }
                ?>
          </label> </br>
            <textarea name="areatexto"  required="required" ><?php if(isset($getData)){ if($tg==2){echo "".$getData->getLink();}else{ echo "".$getData->getNotice();} }?></textarea>
            </div>
        </td>
        </tr>
            
        <tr>
            <td>
            <input class="btnForm" type="submit" value="publicar" name="btn"/> 
            </td> 
        </tr>
    

    </table>
</form>
</div>

<?php
$table="";
if(!isset($_GET['setUpdate'])){
    switch($tg){
        case 0: $table="photos";
                break;
        case 1: $table="instalaciones";
                break;
        case 2: $table="videos";
                break;
        }
        include("../../dataBase/subirImagesGalery.php");
}else{
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
?>

<?php
if(isset($_GET['del'])){

    $delID=$_GET["del"];
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
?>

<?php
$admin=true;
$arrayLinks=array("subirImagesGalery.php?tg=1","subirImagesGalery.php?tg=0","subirImagesGalery.php?tg=2");
include("../galery/containerGalery/layoutGalery.php");
?>
</div>
</body>
</html>