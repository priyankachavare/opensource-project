<?php
require "db.php";

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $name = $_POST['title'];
    $category = $_POST['category'];
    $author = $_POST['author'];
    $folder = "data/";

    move_uploaded_file($_FILES["filep"]["tmp_name"] , "$folder".$_FILES["filep"]["name"]);
    
    $sql="INSERT INTO ieee(link,name,category,author) VALUES ('{$_FILES['filep']['name']}','$name','$category','$author')";
    $result=mysqli_query($conn,$sql);
    if($result) 
    { 
        echo "<script>alert(\"Uploaded\")</script><br>";
        header("Location: user-dash-board.php");
    }
    else 
    {
            echo "<script>alert(\"Sorry\")</script><br>";
            header("Location: user-dash-board.php");
    }
}