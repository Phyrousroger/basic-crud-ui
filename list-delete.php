<?php
session_start();
require_once"core/function.php";
require_once "core/connection.php";

//dd($_GET);
if($_SERVER["REQUEST_METHOD"]==="POST"){
    $id=$_POST["id"];
    $sql="DELETE FROM my where id=$id";
    if(mysqli_query($conn,$sql)){
        $_SESSION["status"]=[
            "massage"=>"list deleted"
        ];

        header("LOCATION:list-index.php");
    }

}

