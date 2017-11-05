<?php
require "db.php";
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $username=$_POST['email'];
    $password=$_POST['password'];
    $sql="Select * from user where email='$username'" ;
    $result=mysqli_query($conn,$sql);
    if($result)
    {
        while($row = $result->fetch_assoc())
        {
            $pwd=$row['pwd'];
            $name=$row['name'];
            if($password==$pwd)
            {
                $_SESSION['name'] = $name;
                $_SESSION['email']=$row['email'];
                header("Location: books-media-gird-view-v2.php");
            }
            else
            {
                echo "<script>alert(\"PASSWORD DOES NOT MATCH\")</script><br>";
                header("Location: signin.php");
            }
        }
    }
    else
    {
        echo "<script>alert(\"USER DOES NOT EXISTS\")</script><br>";
        header("Location: signin.php");
    }
    
}