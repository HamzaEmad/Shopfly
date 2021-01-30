<?php
session_start();
$admins = array("hamza", "ahmed","mohammed");
if ( $_SERVER['REQUEST_METHOD'] == "POST"){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    if( empty($_POST['username']) ==  true || empty($_POST['password']) ==  true){
        header("location:log.php");
        exit();        
    }
    else{
        if ( in_array($user,$admins) ){
            $_SESSION["user"] = $user;
            $_SESSION["pass"] = $pass;
            header("location:admin.php");
            exit();
        }
        else{
            header("location:log.php");
            exit();            
        }
    }
    
}
else{
    header("location:log.php");
    exit();
}