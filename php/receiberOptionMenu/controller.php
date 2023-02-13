<?php

 function getPathName($option){
    $arrayPATHName="";
    switch($option){
		case "mv":
			   $arrayPATHName= array("/ Misión y visión");
            break;
        case "at":
               $arrayPATHName= array("/ Autoridades");
            break;
         case "ht":
                $arrayPATHName= array("/ Historia");
            break;
        case "co":
                $arrayPATHName= array("/ Contactanos");
            break;
        case "nt":
                $arrayPATHName= array("/ Noticias");
            break;
        case "pr":
                $arrayPATHName= array("/ Noticias");
            break;
        case "ad":
                $arrayPATHName= array("/ Adimisión");
            break;
        case "ga":
                $arrayPATHName= array("/ Galeria ");
            break;
        case "ntdt":
                $arrayPATHName= array("/ noticias ");
            break;
        
     }

    return $arrayPATHName;
 }

 function getPath($option){
    $arrayPATH="";
    switch($option){
		case "mv":
            $arrayPATH = array("reciberOptionsMenu.php?view=2&op=mv");
            break;
        case "at":
                $arrayPATH = array("reciberOptionsMenu.php?view=2&op=at");
            break;
        case "ht":
                $arrayPATH = array("reciberOptionsMenu.php?view=2&op=ht");
            break;
        case "co":
                $arrayPATH = array("reciberOptionsMenu.php?view=2&op=co");
            break;
        case "nt":
                $arrayPATH = array("reciberOptionsMenu.php?view=2&op=nt");
            break;
        case "ad":
                $arrayPATH = array("reciberOptionsMenu.php?view=2&op=ad");
            break;
        case "ga":
                $arrayPATH = array("reciberOptionsMenu.php?view=2&op=ga");
            break;
        case "ntdt":
                $arrayPATH = array("reciberOptionsMenu.php?view=2&op=ntdt");
            break;
        case "pr":
                $arrayPATH = array("reciberOptionsMenu.php?view=2&op=pr");
            break;
     }

    return $arrayPATH;
}


?>