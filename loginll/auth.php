<?php
session_start ();

if(!isset($_SESSION['myLogin'])){
    header("location: index.php");
    exit();
}

?>