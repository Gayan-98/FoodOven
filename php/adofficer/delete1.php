<?php
require "config.php";

$ID =$_GET['id'];

if(isset($ID)){

    $sql="DELETE FROM `addedit` WHERE $ID=`Adid`";
   

    if($con->query($sql)){
        echo 'Deleted Sucsessful';
    }

    else{
        echo "Error :".$con->error;
    }

    header("Location:./main.php");
    exit();

}