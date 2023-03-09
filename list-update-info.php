<?php

session_start();
require_once"core/function.php";
require_once "core/connection.php";

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $id=$_POST["id"];
    $money=$_POST["money"];
    $name=$_POST["name"];
    $sql="UPDATE my SET name = '$name',money=$money WHERE id=$id";
    if(mysqli_query($conn,$sql)){
        $_SESSION["status"]=[
            "massage"=>"list updated"
        ];
        header("LOCATION:list-index.php");
    }

}

