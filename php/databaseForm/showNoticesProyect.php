<?php
$opt="";
$admin=true;
if(isset($_POST["op"])){
    $op=$_POST["op"];
    if($op==1){
        $opt="pr";
    }
}

include("../notices/layoutContainerAllNotices.php");
?>