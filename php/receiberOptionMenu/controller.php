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
                $arrayPATHName= array("/ Proyectos");
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
        case "oa1":
                $arrayPATHName= array("/ oferta Académica - preescolar ");
            break;
        case "oa2":
                $arrayPATHName= array("/ oferta Académica - primaria ");
            break;
        case "oa3":
                $arrayPATHName= array("/ oferta Académica - premedia ");
            break;
        case "mp":
                $arrayPATHName= array("/ localización");
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
                $arrayPATH = array("reciberOptionsMenu.php?view=2&op=ga&tg=0");
            break;
        case "ntdt":
                $arrayPATH = array("reciberOptionsMenu.php?view=2&op=ntdt");
            break;
        case "pr":
                $arrayPATH = array("reciberOptionsMenu.php?view=2&op=pr");
            break;
        case "oa1":
                $arrayPATH = array("reciberOptionsMenu.php?view=2&op=oa1&id=0");
            break;
        case "oa2":
                $arrayPATH = array("reciberOptionsMenu.php?view=2&op=oa2&id=0");
            break;
        case "oa3":
                $arrayPATH = array("reciberOptionsMenu.php?view=2&op=oa3&id=0");
            break;
        case "mp":
                $arrayPATH = array("reciberOptionsMenu.php?view=2&op=mp");
            break;
     }

    return $arrayPATH;
}


?>