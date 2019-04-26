<?php
include "my_db.php";
$name=$_POST['name'];
$price=$_POST['price'];
$pd=new Product();
$pd->insert ($name, $price);