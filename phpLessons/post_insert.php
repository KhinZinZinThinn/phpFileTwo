<?php
include 'config.php';

$name=$_POST['name'];
$address=$_POST['address'];

$user=new User();
$user->insert ($name, $address);
