<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>subir data </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>

<form action="" method="post" enctype="multipart/form-data">
    <table>
        <tr>
        <td><label for="imagen" >Imagen
        </label> </td>
        <td><input type="file" name="imagen"  required="required" />  </td>
        <tr>


        <tr>
        <td>
            <input type="text"  required="required" name="title"/>
        </td>
        </tr>

        <tr>
        <td>
            <textarea name="areatexto"  required="required" > </textarea>
        </td>
        </tr>
            
        <tr>
        <td>
        <input type="submit" value="publicar" name="btn"/> 
        </td> 
        </tr>
    

    </table>
</form>

<?php
include("../../dataBase/subirData.php");
?>

</body>
</html>