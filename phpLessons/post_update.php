<?php
include 'config.php';

$id=$_POST['id'];
$name=$_POST['name'];
$address=$_POST['address'];

$user=new User();
$user->update ($id, $name, $address);