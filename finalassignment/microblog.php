<html>
    <head>
        <meta charset="UTF-8">
        <title>Microblog</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
              integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link href="mc.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php include_once("include/header.php"); ?>
        
        <br><br>
        <div class="container">
            <h1 class="headerr" align="center">MICRO BLOG</h1>
            <br> <br>
         <?php
         
         
            $server_name = "localhost";
            $user_name = "root";
            $password = "";
            $db_name="u_theatre";
            
            $conn = new mysqli($server_name, $user_name , $password,$db_name);
            
            if ($conn ->connect_error)
            {
                die("connection error : ". $conn->connect_error);
            }
            
            
            
            $sql_cmd = "SELECT * FROM microblog";
            $result = $conn->query($sql_cmd);
           
           while ($row = $result->fetch_assoc())
            
           {
            echo $row["blogid"]."<br>";
            echo "<img src = '" . $row["imageurl"] . "' width='200px' /> <br>";
            echo "<h3>".$row["blogtext"]."</h3><br>";
            echo "<hr>";
             
            
           }
           
            ?>
        </div>
        
        <?php include_once("include/footer.php"); ?>