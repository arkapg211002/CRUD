<?php
    $servername="localhost:3307";
    $username="root";
    $password="";

    $conn=mysqli_connect($servername,$username,$password);
    
    if(isset($_GET['id'])){
        $id=$_GET['id'];
        $sql="DELETE FROM `crud`.`notes` WHERE `notes`.`sno` = $id";
        $result=mysqli_query($conn,$sql);
        if($result){
            header("Location: index.php");
        }
    }
    

?>