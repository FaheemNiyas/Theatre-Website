<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title>U-Theatre | Home</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
              integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="assets/style.css" rel="stylesheet" type="text/css"/>

    </head>

    <body>
    

        <?php include_once("include/header.php"); ?>
        
        <!-- Slider-->
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/images/slider1.jpg" class="d-block w-100 simg" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>ENJOY AS YOUR PLACE</h1>
                        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/images/slider2.jpg" class="d-block w-100 simg" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>STAY COMFOTABLE AND ENTERTAIN</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/images/slider3.jpg" class="d-block w-100 simg" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h1>FEEL THE WORLD CLASS ENTERTAINMENT</h1>
                        <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!<!-- Card -->
        <div class = "container">
            <div class="new_releases"> 
                <h1><b> Trending Movies</b></h1>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;" >
                        <img class="card-img-top" src="assets/images/card_images/mov1.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">AVENGERS</h5>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;" >
                        <img class="card-img-top" src="assets/images/card_images/mov2.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">MOONLIGHT</h5>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;" >
                        <img class="card-img-top" src="assets/images/card_images/mov3.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">JOKER</h5>

                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;" >
                        <img class="card-img-top" src="assets/images/card_images/mov4.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">SPIDERMAN</h5>

                        </div>
                    </div>
                </div>
            </div>


            <!-- Image with para-->
            <section class="img-para-sec">
                <div class="media">

                    <div class="media-body img-para" >
                        <h2 class="media-heading">MOST POPULAR</h2>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis tellus vel tortor tincidunt, id gravida ex ultrices. Aenean augue eros, ultrices id nisi ut, tincidunt suscipit magna. 
                        Duis elementum nec turpis laoreet bibendum. Donec arcu eros, dignissim ac justo nec, finibus feugiat eros. Aliquam maximus tellus et urna imperdiet tristique. Suspendisse tristique, lacus quis volutpat pellentesque, sem nulla suscipit mauris, ac pharetra lorem dolor ultricies eros.
                        Pellentesque faucibus tempor eros sit amet pellentesque. Pellentesque at interdum ante. In fermentum elit vel tellus faucibus commodo. Aenean lobortis porta posuere. Suspendisse sagittis augue sed consequat tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                        Suspendisse ac auctor dolor, et sodales lorem. Curabitur quis dictum odio. <br> <br>

                        Morbi sit amet turpis eget nisi placerat maximus. Duis maximus, ex sit amet interdum gravida, justo lacus ornare ex, et rutrum purus tortor at ipsum.
                        Aenean quis nulla id enim feugiat fringilla. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Ut placerat commodo congue. 
                        Praesent ac auctor quam. Cras non rhoncus purus. Sed vel lectus nec est condimentum tempor. 
                        Praesent luctus justo condimentum, vestibulum justo quis, accumsan erat. In id interdum nunc. Integer congue semper sodales. Nullam sed congue sem, vel tristique turpis.
                    </div>

                    <div class="media-left">
                        <a href="#">
                            <img class="media-object" src="assets/images/card_images/mov4.jpeg" width="400px" height="435x">
                        </a>
                    </div>
                </div>
            </section>

            <section>
                <div class="new_releases"> 
                    <h1><b> COMING SOON</b></h1>
                </div>

                <div class="row">
                    <div class="col-md-3">
                        <div class="card" style="width: 18rem;" >
                            <img class="card-img-top" src="assets/images/coming_soon/mov1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">BLOODSHOT</h5>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" style="width: 18rem;" >
                            <img class="card-img-top" src="assets/images/coming_soon/mov2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">LOCKOUT</h5>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" style="width: 18rem;" >
                            <img class="card-img-top" src="assets/images/coming_soon/mov3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">THE GREY</h5>

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card" style="width: 18rem;" >
                            <img class="card-img-top" src="assets/images/coming_soon/mov4.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">HEZA</h5>

                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        
        
        
        
        










        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <?php include_once("include/footer.php"); ?>
    </body>
</html>
