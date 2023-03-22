<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>subir data </title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css'  href='../../css/styleformAdmin/styleForm.css'>
    <script type="text/javascript" src="../../jquery/jquery-3.6.0.js"></script>
    <script type="text/javascript" src="../../js/eventEditAutorities.js"></script>
</head>
<body>

<div class="containerForm">
<div class="centerTitle" > <h3> Autoridades </h3> </div>
<div class="containerForm2">
<form  class="form" action="#" method="post" enctype="multipart/form-data" id="form">
    <table>
        <tr>
        <td id="contImage"> <label for="imagen" >Imagen</label> 

        <div class="ajustTextFile">
        <input type="file" name="imagen" id="image"/></div>
        </td>
        <tr>


        <tr>
        <td>
            <div>
            <label> cargo </label>
            <input type="text"  required="required" name="cargo" id="cargo" value=""/>
            </div>
        </td>
        </tr>

        <tr>
        <td>
            <div>
             <label> nombre </label>
             <input type="text"  required="required" name="nombre" id="nombre" value=""/>
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