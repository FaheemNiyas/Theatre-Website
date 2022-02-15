<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->

<html>
    <head>
        <title>U-THEATRE | Log In</title>
        <meta charset="UTF-8">
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" 
              integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/login.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    </head>
    <body>




    <body>
       
        <?php

            $server_name = "localhost";
            $user_name = "root";
            $password ="";
            $db_name = "u_theatre";

            $conn = new mysqli($server_name, $user_name , $password , $db_name);

            if ($conn->connect_error)
            {
                die ("Error connecting to the database");
            }

            ?>
       
        <form name="register" method="post" accept-charset="" action="<?php echo $_SERVER["PHP_SELF"] ?>">
            <div class="container">
                <div class="login-box animated fadeInUp">
                    <div class="box-header">
                        <h2>Log In</h2>
                    </div>
                    <label for="username">E-mail</label>
                    <br/>
                    <input type="text" name="uname" id="username">
                    <br/>
                    <label for="password">Password</label>
                    <br/>
                    <input type="password" name="password" id="password">
                    <br/>

                    
                    <button type="submit"  name="login">Log In</button>
                    <br/>
                    <a href="signup.php"><p class="small">Sign Up</p></a>

                </div>
            </div>
        </form>

        <?php
    
    if(isset($_POST["login"])){
    $uname=$_POST["uname"];
    $password=$_POST["password"];
    
    
    $sql = "SELECT * FROM user WHERE uname='$uname' AND password ='$password'";
    $result = mysqli_query($conn, $sql);
    
    $count = mysqli_num_rows($result);
    if( $count==1){
        header('location:blog_management.php');
        
    }
    else{
       header('location:signup.php');
    }
    }


    ?>
       






    </body>
</html>
