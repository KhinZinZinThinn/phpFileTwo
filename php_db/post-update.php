<?php
include 'my_db.php';
$name=$_POST['name'];
$id=$_POST['id'];
$price=$_POST['price'];

$pd=new Product();
$pd->update($id,$name,$price);