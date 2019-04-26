<?php
class User{
    public function __construct ()
    {
        try{
            $this->db=new PDO('mysql:host=localhost;dbname=lessonSunday', 'root', 'password');

        }catch (PDOException $e){
           die("Error!, Connection failed to database server.");
        }
    }
    public function insert($name, $address){
       $sql="insert into myTable (name, address, created_at) values ('$name', '$address', now())";
       $this->db->query ($sql);
       header("location: index.php");
    }
    public function getData(){
        $sql="select * from myTable ORDER BY id desc ";
        return $this->db->query ($sql);
    }
    public function delete($colName){
        $sql="delete from myTable where id='$colName'";
        $this->db->query ($sql);
        header("location: index.php");
    }
    public function update($id, $name, $address){
        $sql="update myTable set name='$name', address='$address' where id='$id'";
        $this->db->query ($sql);
        header ("location: index.php");
    }
}