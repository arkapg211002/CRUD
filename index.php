<!--CRUD app in php-->



<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP CRUD</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    <link rel="icon" type="image/x-icon" href="logo.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <style>
        body{
            background-color:#e0e0e0;
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
            padding: 10px 10px 10px 40px;
        }
        .head{
            font-family: 'Trirong', serif;
            font-size: 30px;            
            
            color: #000000;
        }
        table{
            font-family: 'Trirong', serif;
            font-size: 20px;            
            background-color: #ffffe0;
            color: #000000;
            
            
            
        }
        thead{
            font-family: 'Trirong', serif;
            font-size: 20px;            
            background-color: #1e1e1e;
            color: #fff;
            
        }
        tbody > tr:nth-child(odd) {
            background-color: #f2f2f2;
        }
        tbody > tr:hover {
            background-color: #e6e6e6;
        }
        .edit{
            font-family: 'Trirong', serif;
            font-size: 15px;            
            background-color: #1e1e1e;
            text-decoration: none;
            color: #fff;
        }
        .delete{
            font-family: 'Trirong', serif;
            font-size: 15px;            
            background-color: #1e1e1e;
            text-decoration: none;
            color: #fff;
        }
        button.edit:hover{
            background-color: #383838;
            color: #fff;
            
        }
        button.delete:hover{
            background-color: #383838;
            color: #fff;
            
        }
        .container{
            text-shadow: -3px 2px 7px rgba(0,0,0,0.58);
        }
        
        
        button.topFunction {
            display: none;
            position: fixed;
            bottom: 20px;
            right: 30px;
            z-index: 99;
            font-size: 18px;
            border: none;
            outline: none;
            background-color: #1e1e1e;
            color: white;
            cursor: pointer;
            padding: 15px;
            border-radius: 4px;
        }
        button.top{
            border-color: white;
            border-radius: 90px 90px 90px 90px;
        }

        div.neone{
            border-radius: 53px;
            background: #e0e0e0;
            box-shadow:  -24px 24px 48px #989898,24px -24px 48px #ffffff;
            border-spacing: 40px 40px;
            padding: 10px 30px 10px 30px;
            
            
            
        }

        div.netwo{
            border-radius: 53px;
            background: #e0e0e0;
            box-shadow:  -24px 24px 48px #989898,24px -24px 48px #ffffff;
            border-spacing: 40px 40px;
            width: 90%;
            padding: 10px 30px 10px 30px;
        }
        
        .formpad{
            padding: 10px 10px 10px 30px;
        }

        button.neobut{
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

  </style>
  <body>
        <nav class="navbar sticky-top navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="rocket.gif" alt="" width="30" height="24" class="d-inline-block align-text-top">
                    <i>CRUD</i>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="https://github.com/arkapg211002"><b>About</b></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="https://www.linkedin.com/in/arkapratim-ghosh%E2%9C%8C%EF%B8%8F%F0%9F%98%80-86637a21b/"><b>Contact Us<b></a>
                    </li>
                    
                </ul>
                </div>
            </div>
        </nav>

        <?php
                //connect to database
                
                
                /*if(!$conn){
                    die("Sorry we failed to connect: ".mysqli_connect_error());
                }
                else{
                    echo "Connection was successful<br>";
                }*/

                if($_SERVER['REQUEST_METHOD']=='POST'){
                    $title=$_POST['title'];
                    $Description=$_POST['Description'];
                    $servername="localhost:3307";
                    $username="root";
                    $password="";
                    //$database="crud";
                    $conn=mysqli_connect($servername,$username,$password);
                    
                    $sql="INSERT INTO `crud`.`notes` (`title`, `Description`,`dt`) VALUES ('$title', '$Description', current_timestamp());";
                    $result=mysqli_query($conn,$sql);
                    if($result){
                        echo "<div class='alert alert-success' role='alert'>
                        <h4 class='alert-heading'>Well done!</h4>
                        <p>Your note has been added successfully</p>
                      </div>";
                    }
                    else{
                        echo "<div class='alert alert-danger' role='alert'>
                        <h4 class='alert-heading'>Oh snap!</h4>
                        <p>Your note has not been added successfully</p>
                      </div>";
                    }
                }
    

            
        ?>

        

        <div class="container my-5 neone">
            </br></br>

            <h4 class="heading">Add a Note</h4>
            </br>
            <form action="/CRUD/index.php" method="Post" class="formpad">
                <div class="mb-3">
                    <label for="title" class="form-label"><h5 class="head"><b>Note Title</b></h5></label>
                    <input type="text" name="title" class="form-control" id="title" aria-describedby="title" placeholder="Enter title...">
                    
                </div>
                
                <div class="mb-3">
                    <label for=Description" class="form-label"><h5 class="head"><b>Note Description</b></h5></label>
                    <textarea placeholder="Describe here..." class="form-control" name="Description" id="Description" name="Description" rows="4"></textarea>
                </div>
                <!--<div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>-->
            </br>
                <button type="submit" class="btn btn-dark neobut"><b>Add Note</b></button>
            </br></br>
            </form>
                  
        </div>
                <!--type="button" class="btn btn-dark"-->
        
        
            </br></br>

        <div class="container my-10 netwo">
            </br></br>
            
            <h3 class="heading">Your Notes</h3>
            </br></br>
            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">S.No</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Date</th>
                    <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $servername="localhost:3307";
                        $username="root";
                        $password="";
                        //$database="crud";
                        $conn=mysqli_connect($servername,$username,$password);
                        $sql="SELECT * FROM `crud`.`notes`";
                        $result=mysqli_query($conn,$sql);
                        $sno=0;
                        while($row=mysqli_fetch_assoc($result)){
                            $sno=$sno+1;
                            echo "<tr>
                            <th scope='row'>".$sno."</th>
                            <td>".$row['title']."</td>
                            <td>".$row['Description']."</td>
                            <td>".$row['dt']."</td>
                            <td><button class='edit btn btn-sm btn-dark edit'><a style='color:white' href='edit.php?id=".$row['sno']."'>Edit</a></button> 
                                <button class='delete btn btn-sm btn-dark'><a style='color:white' href='delete.php?id=".$row['sno']."'>Delete</a></button></td>
                            </tr>";
                        }



                    ?>
                
                </tbody>
            </table>

            </br></br>
        </div>
        
        <!--use edit and delete button-->
        
        
        



        <!-- Go to top-->
        <button class="top" onclick="topFunction()" id="myBtn" title="Go to top"><img src="up3.svg" width="30" height="24" alt="up"></button>
        
        <script>
            //Get the button
            var mybutton = document.getElementById("myBtn");
            
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};
            
            function scrollFunction() {
              if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
              } else {
                mybutton.style.display = "none";
              }
            }
            
            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
              document.body.scrollTop = 0; // For Safari
              document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
            }
        </script>
        </br></br>
        <footer class="bg-dark text-center text-white">
            
            <div class="container p-4">
                <section class="mb-2">
                    <a title="facebook" class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/profile.php?id=100073622645041" role="button"><i class="fab fa-facebook-f"></i></a>
                    <a title="instagram" class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/arkapratimghosh2002/?hl=en" role="button"><i class="fab fa-instagram"></i></a>
                    <a title="linkedin" class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/arkapratim-ghosh%E2%9C%8C%EF%B8%8F%F0%9F%98%80-86637a21b/" role="button"><i class="fab fa-linkedin-in"></i></a>

                </section>
            </div>



            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2022 Arkapratim Ghosh
                
            </div>
        </footer>
        <script src="index.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>