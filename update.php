<?php
    $servername="localhost:3307";
    $username="root";
    $password="";
    $database="crud";

    $conn=mysqli_connect($servername,$username,$password,$database);

    $id=$_GET['id'];
	
	$title=$_POST['title'];
	$desc=$_POST['Description'];

    $sql="UPDATE `crud`.`notes` SET `title` = '$title', `Description` = '$desc' ,`dt`=current_timestamp() WHERE `notes`.`sno` = $id";
    $result=mysqli_query($conn,$sql);
    if($result){
        header("Location: index.php");
    }
    
?>