<?php
include "my_db.php";
$id=$_GET['id'];
$pd=new Product();
$pd->delete($id);