<?php
require "config.php";

$ID =$_GET['id'];

if(isset($ID)){

    $sql="DELETE FROM `add_recipe` WHERE $ID=`Recipe_ID`";
   

    if($con->query($sql)){
        echo 'Deleted Sucsessful';
    }

    else{
        echo "Error :".$con->error;
    }

    header("Location:./my.php");
    exit();

}