<?php
require "db.php";

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $name=$_POST['name'];
    $sql="INSERT INTO user (email,pwd,name) VALUES ('$email','$password','$name')";
    $result=mysqli_query($conn,$sql);
    if ($result) 
    {
         $_SESSION["name"] = $name;
         $_SESSION["email"] = $email;
    }
    else
    {
        echo "<script>alert(\"EMAIL ID ALREADY EXISTS\")</script><br>";
    }
}