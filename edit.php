<?php
    $servername="localhost:3307";
    $username="root";
    $password="";
    $database="crud";

    $conn=mysqli_connect($servername,$username,$password,$database);
    $id=$_GET['id'];
    $sql="SELECT * FROM `crud`.`notes` WHERE `notes`.`sno`= $id";
	$query=mysqli_query($conn,$sql);
	$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
<title>Edit Input</title>
</head>
<style>

    body{
        background-color: #f2f2f2;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-size: 1.2rem;
        color: #333;
        margin: 0;
        padding: 0;
    }
    .container{
        border-radius: 53px;
        background: #e0e0e0;
        box-shadow: -24px 24px 48px #989898,24px -24px 48px #ffffff;
        border-spacing: 40px 40px;
        padding: 10px 30px 10px 30px;
        text-shadow: -3px 2px 7px rgba(0,0,0,0.58);
        width: 50%;
        margin: 0 auto;
        position: relative;
    }
    .heading{
            font-family: 'Trirong', serif;
            font-size: 50px;            
            font-weight: bold;
            color: #000000;
            border-radius: 53px;
            background: linear-gradient(225deg, #f0f0f0, #cacaca);
            box-shadow:  -16px 16px 32px #989898,
                            16px -16px 32px #ffffff;
            width:autoload; 
            padding: 10px 10px 10px 30px;
    }
    .in{
        border-radius: 53px;
            background: linear-gradient(225deg, #f0f0f0, #cacaca);
            box-shadow:  -16px 16px 32px #989898,
                        16px -16px 32px #ffffff;
            color:#000000;
            border-color: whitesmoke;
            font-size: 20px;
            text-shadow: -3px 2px 7px rgba(0,0,0,0.58);
            padding: 10px 20px 10px 20px;
    }
    .neobut{
        border-radius: 53px;
            background: linear-gradient(225deg, #f0f0f0, #cacaca);
            box-shadow:  -16px 16px 32px #989898,
                        16px -16px 32px #ffffff;
            color:#000000;
            border-color: whitesmoke;
            font-size: 20px;
            text-shadow: -3px 2px 7px rgba(0,0,0,0.58);
            padding: 10px 20px 10px 20px;
            color:#ffffff;
            position: relative;
    }
</style>
<body>
    </br></br></br>
    <div class="container">
        <h2 class="heading"><b>Edit<b></h2>
        <form method="POST" action="update.php?id=<?php echo $id; ?>">
            <label>Note Title:</label><input type="text" value="<?php echo $row['title']; ?>" name="title">
            <br>
            <label>Note Description:</label></br><textarea type="text" value="<?php echo $row['Description']; ?>" name="Description" rows="4" columns="20"></textarea>
            <br><br>
            <input class="in" type="submit" name="submit">
            <br><br>
            <button class="neobut"><a style="text-decoration-line:none" href="/CRUD/index.php"><b>Back</b></a></button>
            <br><br>
        </form>
    </div>
</body>
</html>