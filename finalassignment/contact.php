<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Other/html.html to edit this template
-->
<html>
    <head>
        <title> U-THEATRE | Contact Us</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
              integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="assets/contact.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <?php include_once("include/header.php"); ?>

        <div class="container">
            <div class="card">
                <div class="form">
                    <div class="left-side">
                        <div class="top">
                            <h4>Feel Free to contact us</h4>
                            <p>Fill up the form and our Team will get back to you within 24 hours.</p>
                        </div>
                        <div class="medium"> <i class="fa fa-phone"></i>
                            <p>+94 777 782 751</p> <i class="fa fa-envelope-o"></i>
                            <p>faheemniyas11@gmail.com</p> <i class="fa fa-map-marker"></i>
                            <p>102 street 2714 Don</p>
                        </div>
                        <div class="last"> <span><i class="fa fa-facebook-f"></i></span> <span> <i class="fa fa-twitter"></i></span> <span><i class="fa fa-instagram"></i></span> <span><i class="fa fa-linkedin"></i></span> </div>
                    </div>
                    <?php
                    $fname = "";
                    $lname = "";
                    $tarea = "";
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $fname = $_POST["fname"];
                        $$lname = $_POST["lname"];
                        $tarea = $_POST["tarea"];
                    }
                    ?>
                    <form name="test" method="post" accesskey="" accept-charset="" action="<?php echo $_SERVER["PHP_SELF"] ?>">
                        <div class="right-side">
                            <div class="card-details">
                                <div class="input-group">

                                    <div class="input"> <input type="text" name= "fname" required="required" value="<?php echo $fname ?>"> <span>First Name</span> </div>
                                    <div class="input"> <input type="text" name= "lname"required="required" value="<?php echo $lname ?>"> <span>Last Name</span> </div>
                                </div>
                                <div class="input-group">
                                    <div class="input"> <input type="text" required="required"> <span>E-mail</span> </div>
                                    <div class="input"> <input type="text" required="required"> <span>Phone no.</span> </div>
                                </div>
                            </div>
                            <div class="below-content">

                                <div class="text-area"> <textarea name="tarea" required="required" value="<?php echo $tarea ?>"></textarea> <span>Message</span> </div>
                                <div class="button" name="btnend"> <button>Send Message</button> </div>
                            </div>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
        <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                        $fname = (string) $_POST["fname"];
                        $lname = (string) $_POST["lname"];
                        $tarea = (string) $_POST["tarea"];
                        echo "<center> Hello, " . ($fname) . " " . ($lname) . " Thank you for your message; <br>";
                        echo "Which is " . ($tarea) . "<br><br>";
                    }
                    ?>


        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <?php include_once("include/footer.php"); ?>
    </body>
</html>
