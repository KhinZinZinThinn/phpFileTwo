<?php
class Product{
    public function __construct()
    {try{
        $this->bd=new PDO('mysql:host=localhost; dbname=phplesson','root','root');
    }catch (PDOException $e){
        die('Connection failed to database.');
    }
    }
    public function insert($name,$price){
        $sql="insert into products (name, price) values('$name', '$price')";
        $this->bd->query($sql);
        header("location:index.php");
    }
    public function getMyData(){
        $sql="select * from products";
        return $this->bd->query($sql);
    }
    public function delete($id){
        $sql="delete from products where id='$id'";
        $this->bd->query($sql);
        header("location:index.php");
    }
    public function update($id,$name,$price){
        $sql="update products set name='$name',price='$price' where id='$id'";
        $this->bd->query ($sql);
        header ("location: index.php");
    }
}
