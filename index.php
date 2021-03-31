<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>website two</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://www.gstatic.com/firebasejs/ui/4.6.1/firebase-ui-auth.js"></script>
    <link type="text/css" rel="stylesheet" href="https://www.gstatic.com/firebasejs/ui/4.6.1/firebase-ui-auth.css" />
</head>

<body data-target=".navbar" data-spy="scroll" data-offset="0" style="position: relative;">
    <div class="jumbogold">
        <div class="container">
            <h1>Skill Gallery</h1>
        </div>
    </div>
    <div class="cont">
        <nav class="navbar navbar-expand-sm bg-pink navbar-dark sticky-top">
            <button class="navbar-toggler" data-toggle="collapse" data-target="#collapsy">
                <svg width="45" height="45" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="50" cy="50" r="50" fill="white" />
                    <path d="M50 8.33333C27.025 8.33333 8.33334 27.025 8.33334 50C8.33334 72.975 27.025 91.6667 50 91.6667C72.975 91.6667 91.6667 72.975 91.6667 50C91.6667 27.025 72.975 8.33333 50 8.33333ZM50 0C77.6125 0 100 22.3875 100 50C100 77.6125 77.6125 100 50 100C22.3875 100 3.8147e-06 77.6125 3.8147e-06 50C3.8147e-06 22.3875 22.3875 0 50 0ZM25 70.8333H75V62.5H25V70.8333ZM25 54.1667H75V45.8333H25V54.1667ZM25 37.5H75V29.1667H25V37.5Z" fill="#007BFF" />
                </svg>
            </button>
            <div class="collapse navbar-collapse" id="collapsy">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-linkm" href="#home">home</a></li>
                    <li class="nav-item"><a class="nav-linkm" href="#aboutus">about us</a></li>
                    <li class="nav-item"><a class="nav-linkm" href="#gallery">gallery</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-linkm dropdown-toggle" data-toggle="dropdown" id="navdropdown">my achievements</a>
                        <div class="dropdown-menu">
                            <a href="certifications.php" class="dropdown-item">certifications</a>
                            <a href="crakedexams.php" class="dropdown-item">cracked exams</a>
                            <a href="otherach.php" class="dropdown-item">all achievements</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-linkm" href="#contact">contact</a></li>
                </ul>
            </div>
            <button class="btn" style="padding: 7px 13px 7px 13px;background-color:red;border-radius: 25px"><a href="login.php" style="color: white;text-decoration: none;">log in</a></button>
        </nav>
        <!--<img src="depositphotos_123648814-stock-illustration-icons-education-in-form-of.jpg" height="100%" width="100%">

        <div class="carousel slide" id="carotext" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#carotext" data-ride-to="0" class="active"></li>
                <li data-target="#carotext" data-ride-to="1"></li>
            </ul>

            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="1170h566-21.jpg" height="500px" width="100%">
                    <div class="carousel-caption">
                        <h3>This is slide 1</h3>
                        <p>A sea-shore hill</p>
                        <button class="btn btn-primary">button 1</button>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="achievement-2041692-1721006.jpg" height="500px" width="100%">
                    <div class="carousel-caption">
                        <h3>This is slide 2</h3>
                        <p>A mountain</p>
                        <button class="btn btn-primary">button 2</button>
                    </div>
                </div>
            </div>

            <a class="carousel-control-prev" data-target="#carotext" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" data-target="#carotext" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>-->

        <div class="container-fluid" id="home" style=" background-image: linear-gradient(to right,#fde50b,#15dcf7f6);color:white;padding-top: 70px;padding-bottom: 70px;height:400px;">
            <h2 style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;color:deeppink;font-weight:bold;">Welcome ! </h2>
            <br>
            <h3 style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;color:deeppink;font-weight:bold;">
                save your acheivements here . . . !
            </h3>
            <br>
        </div>


        <div class="container-fluid" id="aboutus" style="background-image:linear-gradient(to right,#ff33cc,#ffccff);padding-top: 70px;padding-bottom: 70px;">
            <h2 style="color:white">about us</h2>
            <br>
            <p style="color:white">Skill gallery is the website primarily created for easyly storing and retrive your e-certificates course completions
                examination passedothers
                You can display your certificates and awards in an website in respective domain that the certificate belongs.
                Here you can store you certificates as pdf and you can download it from any device which prevents your e-certificates from deletion of your valuable certificates</p>
            </p>
        </div>

        <div class="container-fluid" id="gallery" style="background-image:linear-gradient(to right,#9933ff,#00ffff);padding-top: 70px;padding-bottom: 70px;">
            <h2 style="color:#fde50b">Gallery</h2>
            <img src="certificate.png" class="mx-auto d-block" width="50%" height="300px">
            <br><br>
            <img src="certificate-24960_1280.png" class="mx-auto d-block" width="40%" height="500px">
            <br><br>

            <img src="medals-5526624_1920.png" class="mx-auto d-block" width="30%" height="300px">
            <br><br>

            <img src="a+.png" class="mx-auto d-block" width="40%" height="500px">
        </div>

        <!--<div class="container-fluid" id="section42"
            style="background-color: darksalmon;padding-top: 70px;padding-bottom: 70px;">
            <h2>This is section 4 submenu 2 of website</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste voluptatem, ab recusandae quidem corrupti
                repudiandae qui minima sed soluta in pariatur quis reiciendis magni. Ipsum rerum aperiam voluptatibus animi
                ipsam.</p>-->

        <div class="container-fluid" id="contact" style="background-image:linear-gradient(to right,#99ff33,#6666ff);padding-top: 70px;padding-bottom: 70px;">
            <h2>contact us</h2>
            <p> <br>
                <img src="https://www.vectorlogo.zone/logos/facebook/facebook-official.svg" alt="Share on Facebook" style="height: 32px;">
                facebook<br><br>

                <img src="https://www.vectorlogo.zone/logos/twitter/twitter-tile.svg" alt="Share on Twitter" style="height: 32px;">
                Twitter<br><br>

                <img src="https://www.vectorlogo.zone/logos/instagram/instagram-ar21.svg" alt="Share on Twitter" style="height: 52px;">

                <br><br>
                <img src="https://www.vectorlogo.zone/logos/youtube/youtube-icon.svg" alt="Share on Facebook" style="height: 32px;">
                youtube<br>

                <br>
                <img src="https://www.vectorlogo.zone/logos/linkedin/linkedin-ar21.svg" style="height:52px;">

                <br><br><strong>+919812384756</strong>
            </p>
        </div>
    </div>
    </div>
    <div class="jumbogold ">
        <div class="container">
            <h6>thank you for visiting this page</h6>
            <h6>@ copy rights 2020 </h6>
        </div>
    </div>

    <!--attaching to firebase-->
    <!-- The core Firebase JS SDK is always required and must be listed first -->
    <script src="/__/firebase/8.2.10/firebase-app.js"></script>

    <!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
    <script src="/__/firebase/8.2.10/firebase-analytics.js"></script>

    <!-- Initialize Firebase -->
    <script src="/__/firebase/init.js"></script>
</body>

</html>