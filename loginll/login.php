<?php
session_start ();

$user_name=$_POST['user_name'];
$password=$_POST['password'];

if(($user_name=='admin') && ($password=='admin')){
    $_SESSION['myLogin']=ture;
    header("location: home.php");
}else{
    header("location: index.php");
}