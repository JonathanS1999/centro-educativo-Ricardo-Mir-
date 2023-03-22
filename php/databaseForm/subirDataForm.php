<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>subir data </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css'  href='../../css/styleformAdmin/styleForm.css'>
    <script type="text/javascript" src="../../jquery/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="../../js/eventEditNoticesProyects.js"></script>
</head>
<body>

<div class="containerForm">

<div class="centerTitle" > <h3> title </h3> </div>

<div class="containerForm2">
<form  class="form" action="#" method="post" id="form" enctype="multipart/form-data">
    <table>
        <tr>
        <td id="contImage">
        <label for="imagen" >Imagen</label> </br>

        <div class="ajustTextFile">
        <input type="file" name="imagen" id="image" />  </div> </td>
        <tr>

        <tr>
        <td> 
            <div>
            <label> titulo </label> </br>
            <input type="text"  required="required" name="title" value="" id="title"/>
            </div>
        </td>
        </tr>

        <tr>
        <td>
            <div>
            <label> descripción </label> </br>
            <textarea name="areatexto"  required="required" id="description"></textarea>
            </div>
        </td>
        </tr>
            
        <tr>
            <td>
            <input class="btnForm" type="button" value="publicar" name="btn" id="button"/>
            </td> 
        </tr>
    

    </table>
</form>
</div>

    <div id="container">

    </div>

</div>
</body>
</html>