


<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/ClientSide/html.html to edit this template
-->
<html>
    <head>
        <title>U-THEATRE | Sign Up</title>
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
        $un = "";
        $pw = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $un = $_POST["uname"];
            $pw = $_POST["password"];
        }
        ?>
        <form name="register" method="post" accept-charset="" action="<?php echo $_SERVER["PHP_SELF"] ?>">
            <div class="container">
                <div class="login-box animated fadeInUp">
                    <div class="box-header">
                        <h2>Sign Up</h2>
                    </div>
                    <label for="username">E-mail</label>
                    <br/>
                    <input value="<?php echo $un ?>" type="text" name="uname" id="username">
                    <br/>
                    <label for="password">Password</label>
                    <br/>
                    <input value="<?php echo $pw ?>" type="password" name="password" id="password">
                    <br/>

                    <label >Role:  </label>
                    <select  name="role">
                        <option >Admin</option>
                        <option >User</option>
                        <option >Operator</option>
                    </select>
                    <br>
                    <br>
                    <button type="submit">Sign Up</button>
                    <br/>
                    <a href="login.php"><p class="small">Sign In</p></a>

                </div>
            </div>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            echo "User name entered : " . $_POST["uname"] . " <br> <br>";
            echo "Password entered : " . $_POST["password"] . " <br> <br>";
            echo "Role selected : " . $_POST["role"] . " <br> <br>";

            $server_name = "localhost";
            $user_name = "root";
            $password = "";
            $db_name = "u_theatre";

            $conn = new mysqli($server_name, $user_name, $password, $db_name);

            if ($conn->connect_error) {
                die("Error connecting to the database");
            }

            $s = "SELECT*FROM user WHERE uname = '$un'";
            $result = mysqli_query($conn, $s);
            $num = mysqli_num_rows($result);

            if ($num == 1) {
                echo "Username Already Taken <br>";
            } else {
                $sql_cmd = "INSERT INTO user (uname, password, role) VALUES( '" .
                        $_POST["uname"] . "','" . $_POST["password"] . "','" .
                        $_POST["role"] . "')";

                if ($conn->query($sql_cmd) === TRUE) {
                    echo "Registration Successful <br>";
                }
            }
        }
        ?>




    </body>
</html>
