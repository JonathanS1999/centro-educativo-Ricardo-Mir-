<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>item card autorities</title>
	<?php
		$varIT_AT = "";
		if($index==2){
			$varIT_AT = "../../";
		}
		?>
	<link rel="stylesheet" type="text/css" href=<?php echo '"'.$varIT_AT.'css/autorities/styleCardAutorities.css"';?>>
</head>
<body>

<?php
 $prevPath=$varIT_AT;
?>

<?php

if (!class_exists('ParameterConection')) {
    include("../../database/ParameterConection.php");
}

class ViewAutorities extends  ParameterConection {
	private static $ADMIN=false;

  function getAutorities($prevPath){

	  try {
		   
		   $conection = new PDO('mysql:host='. self::$host. '; dbname='.self::$database , self::$user_db, self::$paswword);
		   $conection->exec('SET CHARACTER SET UTF8');
		   $sql = 'SELECT * FROM autoridades;';
		   $result = $conection->prepare($sql);
		   $result->execute();
		   $count=$result->rowCount();

		   if ( $count ==0){
			echo " <h3> No hay autoridades para mostrar </h3>";
		   } else {

			$admin=ViewAutorities::$ADMIN;
		  
		   while ($autorities = $result->fetch(PDO::FETCH_ASSOC)){
			$id=$autorities['id'];
			?>

			<div class="card" id=<?php echo "'".$id."'"; ?>>
					<img class="imgCard"src=<?php echo "'".$prevPath."".$autorities["image_url"]."'"; ?>/>
					<h4><?php echo "".$autorities["cargo"].""; ?></h4>
					<h5><?php echo "".$autorities["nombre"].""; ?></h5>
					
					<?php 
					$linkEdit="'../databaseForm/subirAutorities.php?update=".$autorities['id']."'";
					$linkDelete="'../databaseForm/subirAutorities.php?del=".$autorities['id']."'";
					
						if(isset($admin)){
							if($admin){
								$varUrlMV = "../../";
								include("../notices/optionsItemAdminin.php");
							}
						}                        
					?>
			</div>
			
			<?php
			
			}

		   }
		  
	   }catch(Exception $e){
		   die("error ".$e->getMessage());
	   }finally{
		   $conection = null;
	   }

  }

  function setAdmin($admin){
	ViewAutorities::$ADMIN=$admin;
  }

}


$viewAutorities=new ViewAutorities();
if(isset($admin)){
	$viewAutorities->setAdmin($admin);
}
$viewAutorities->getAutorities($prevPath);



?>
























</body>
</html>