<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../css/style1.css">
</head>
<body>


<?php
include("navBar.php");
$form=TRUE;
?>



<div  class="container">


<form method="POST" action="index.php">

	<div  class="userdetails">

	    <div class="inputbox">

	    	<span class="details" >Primer Nombre ( Acudiente )</span>
	      <input type="text" name="pnomb"   placeholder="Primer Nombre"> 
         </div>

         <div class="inputbox">
         <span   class="details" >Segundo Nombre </span>
	      <input type="text" name="segnomb"   placeholder="Segundo Nombre">
         </div>
       

       <div class="inputbox">
         <span   class="details" >Primer Apellido </span>
	      <input type="text" name="pape" placeholder="Primer Apellido"> 
	    </div>

        <div class="inputbox">
        	<span   class="details" >Segundo Apellido </span>
	      <input type="text" name="sape" placeholder="Segundo Apellido" > 
        </div>



       <div class="inputbox">
       	<span   class="details" > Fecha Nacimiento</span>
        <input type="text" name="fn" placeholder="23/09/2010" > 
	   </div>

       <div class="inputbox">
       	<span    class="details" > Cedula</span>
		   <input type="text" name="ced" placeholder="00-000-000" > 
       </div>

       <div class="inputbox">
       	<span   class="details" > Email </span>
	    <input type="text" name="emal"   placeholder="ejemplo@.com" >
       </div>



         <div class="inputbox">
         	<span class="details">Sexo</span>
	          <select  name="sexo">
		          <option value="sex1">Hombre</option>
		          <option value="sex2">Mujer</option>
		      </select>
         </div>

        <div class="inputbox">
        <span   class="details" >Primer Nombre ( Estudiante )</span>
	      <input type="text" name="pnombE"   placeholder="Primer Nombre"> 
         </div>

         <div class="inputbox">
         <span   class="details" >Segundo Nombre </span>
	      <input type="text" name="segnombE"   placeholder="Segundo Nombre">
         </div>
       

       <div class="inputbox">
         <span   class="details" >Primer Apellido </span>
	      <input type="text" name="papeE" placeholder="Primer Apellido"> 
	    </div>

        <div class="inputbox">
        	<span   class="details" >Segundo Apellido </span>
	      <input type="text" name="sapeE" placeholder="Segundo Apellido" > 
        </div>



       <div class="inputbox">
       	<span   class="details" > Fecha Nacimiento</span>
        <input type="text" name="fnE" placeholder="23/09/2010" > 
	   </div>

       <div class="inputbox">
       	<span    class="details" > Cedula</span>
		   <input type="text" name="cedE" placeholder="00-000-000" > 
       </div>

       <div class="inputbox">
       	<span   class="details" > Gado </span>
	    <input type="text" name="gradoE"   placeholder="I" >
       </div>



         <div class="inputbox">
         	<span class="details">Sexo</span>
	          <select  name="sexoE">
		          <option value="sex1">Hombre</option>
		          <option value="sex2">Mujer</option>
		      </select>
         </div>

</div>

<div >
	    <input type="submit" value="Matriculate!" class="submit" name="cregistrarse">
</div>

</form>

</div>

<?php
include("footPage.php");
?>

</body>
</html>