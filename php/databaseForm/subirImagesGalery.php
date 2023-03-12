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
    $sql="SELECT * FROM PHOTOS WHERE ID=?;";
    $getData->consultDataServer($idUpdate,$sql);
    $updateUrl="setUpdate=".$idUpdate;
 }

?>
<div class="containerForm">

<div class="centerTitle" > <h3> Editar imagenes de galeria </h3> </div>

<div class="containerForm2">

<form class="form" action=<?php echo "'subirImagesGalery.php?tg=".$tg."&".$updateUrl."'"; ?> method="post" enctype="multipart/form-data">
    <table>
        <tr>
        <td>
            <label for="imagen" >Imagen</label> 
            <?php
            if(isset($getData)){
                echo "<img src='../../".$getData->getImage()."' class='imageUpdate' />";
            }
            ?>
            <input type="file" name="imagen"  <?php
                                                if(!isset($getData)){
                                                    echo 'required="required"';
                                                }  ?>/>  
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

        <tr>
        <td>
            <div>
            <label> descripción </label> </br>
            <textarea name="areatexto"  required="required" ><?php if(isset($getData)){ echo "".$getData->getNotice(); }?></textarea>
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
if(!isset($_GET['setUpdate'])){
include("../../dataBase/subirImagesGalery.php");
}else{
    $table="photos";
    include("../../dataBase/UpdateDataId.php");
}
?>

<?php
if(isset($_GET['del'])){

    $delID=$_GET["del"];
    include("../../dataBase/deleteData.php");
    $deleteData=new DeleteData();
    $sql1='SELECT * FROM photos where id=?;';
    $sql2='delete from photos where id=?';
    $deleteData->setDeleteDataServer($delID,$sql1,$sql2);

}
?>

<?php
$admin=true;
include("../galery/containerGalery/layoutGalery.php");
?>
</div>
</body>
</html>