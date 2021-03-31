<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>website two</title>
    <link rel="stylesheet" href="prac2.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
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
                    <li class="nav-item"><a class="nav-linkm" href="prac2.php #home">home</a></li>
                    <li class="nav-item"><a class="nav-linkm" href="prac2.php #aboutus">about us</a></li>
                    <li class="nav-item"><a class="nav-linkm" href="prac2.php #gallery">gallery</a></li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-linkm dropdown-toggle" data-toggle="dropdown" id="navdropdown">my achievements</a>
                        <div class="dropdown-menu">
                            <a href="certifications.php" class="dropdown-item">certifications</a>
                            <a href="crackedexams.php" class="dropdown-item">cracked exams</a>
                            <a href="otherach.php" class="dropdown-item">all achievements</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-linkm" href="#contact">contact</a></li>
                </ul>
            </div>
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

        <div class="container-fluid" id="home" style=" background-image: linear-gradient(to right,#ff5050,#ff9900);color:white;padding-top: 70px;padding-bottom: 70px;height:auto;">
            <h3 style="font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;color:aqua;font-weight:bold;">
                your all uploads
            </h3>
            <div>
                <table width="80%" border="1">

                    <tr>
                        <td>File Name</td>
                        <td>File Type</td>
                     </tr>
                    <?php
                    include_once("db.php");
                    $result = mysqli_query($con, "SELECT filename,filetype FROM cert union SELECT filename,filetype FROM exam");
                    ?>
                    <?php
                    $i = 0;
                    while ($row = mysqli_fetch_array($result)) {
                        if ($i % 2 == 0)
                            $classname = "evenRow";
                        else
                            $classname = "oddRow";
                    ?>

                        <tr>
                            <td><?php echo $row["filename"]; ?></td>
                            <td><?php echo $row["filetype"]; ?></td>
                       </tr>
                    <?php
                        $i++;
                    }
                    ?>
                </table>

            </div>
        </div>

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
</body>

</html>