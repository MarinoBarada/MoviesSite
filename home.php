<?php
    session_start();

    if(isset($_SESSION["usersuid"] )){

    }
    else {
        header("location: ../index.php");
        exit();   
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Watch
    </title>
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap" rel="stylesheet">
    <!-- OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <!-- BOX ICONS -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <!-- APP CSS -->
    <link rel="stylesheet" href="style/hgrid.css">
    <link rel="stylesheet" href="style/home.css">
</head>

<body>

    <!-- NAV -->
    <div class="nav-wrapper">
        <div class="container">
            <div class="nav">
                <a href="#" class="logo">
                    <i class='bx bx-movie-play bx-tada main-color'></i>Wa<span class="main-color">tc</span>h
                </a>
                <ul class="nav-menu" id="nav-menu">
                    <li><a href="#">Home</a></li>
                    <li><a href="#anchm">Movies</a></li>
                    <li><a href="#anchs">Series</a></li>
                    <li><a href="#anchc">Cartoons</a></li>
                    <li>
                        <a href="includes/logout.inc.php" class="btn btn-hover">
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
                <!-- MOBILE MENU TOGGLE -->
                <div class="hamburger-menu" id="hamburger-menu">
                    <div class="hamburger"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- END NAV -->

    <!-- HERO SECTION -->
    <div class="hero-section">
        <!-- HERO SLIDE -->
        <div class="hero-slide">
            <div class="owl-carousel carousel-nav-center" id="hero-carousel">  
            <?php
                include_once 'includes/db.inc.php';

                $sql = "SELECT * FROM msc ORDER BY titleMsc ASC";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                    echo "SQL statment failed!";
                }
                else {
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                }

                for ($i=0; $i < 4; $i++)                            
                {
                    $row = mysqli_fetch_assoc($result);
                    if ($row["typeMsc"]== "series"){
                        $text ="seasons";
                    }
                    else{
                        $text ="mins";
                    }

                    echo"          
                    <div class='hero-slide-item'>
                        <img src='$row[imgMsc]' alt=''>
                        <div class='overlay'></div>
                        <div class='hero-slide-item-content'>
                            <div class='item-content-wraper'>
                                <div class='item-content-title top-down'>
                                    $row[titleMsc]
                                </div>
                                <div class='movie-infos top-down delay-2'>
                                    <div class='movie-info'>
                                        <i class='bx bxs-star'></i>
                                        <span>$row[rateMsc]</span>
                                    </div>
                                    <div class='movie-info'>
                                        <i class='bx bxs-time'></i>
                                        <span>$row[timeMsc] $text</span>
                                    </div>
                                    <div class='movie-info'>
                                        <span>$row[yearMsc]</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>";
                }
                ?>
            </div>
        </div>
        <!-- END HERO SLIDE -->
        <!-- TOP MOVIES SLIDE -->
        <div class="top-movies-slide">
            <div class="owl-carousel" id="top-movies-slide">
            <?php
                include_once 'includes/db.inc.php';

                $sql = "SELECT * FROM msc ORDER BY yearMsc DESC";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                    echo "SQL statment failed!";
                }
                else {
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                }

                for ($i=0; $i < 8; $i++)                            
                {
                    $row = mysqli_fetch_assoc($result);
                    if ($row["typeMsc"]== "series"){
                        $text ="seasons";
                    }
                    else{
                        $text ="mins";
                    }
                    echo "
                <!-- MOVIE ITEM -->
                <a href='#' class='movie-item'>
                    <img src='$row[imgMsc]'alt=''>
                    <div class='movie-item-content'>
                        <div class='movie-item-title'>
                            $row[titleMsc]
                        </div>
                        <div class='movie-infos'>
                            <div class='movie-info'>
                                <i class='bx bxs-star'></i>
                                <span>$row[rateMsc]</span>
                            </div>
                            <div class='movie-info'>
                                <i class='bx bxs-time'></i>
                                <span>$row[timeMsc] $text</span>
                            </div>
                            <div class='movie-info'>
                                <span>$row[yearMsc]</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->";
                }
                ?>
            </div>
    <!-- END HERO SECTION -->

    <!-- LATEST MOVIES SECTION -->
    <div class="section">
        <div class="container">
            <div class="section-header"  id="anchm">
                movies
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
                <?php
                include_once 'includes/db.inc.php';

                $sql = "SELECT * FROM msc WHERE  typeMsc='movie' ORDER BY yearMsc DESC";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                    echo "SQL statment failed!";
                }
                else {
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                }

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "
                <!-- MOVIE ITEM -->
                <a href='#' class='movie-item'>
                    <img src='$row[imgMsc]'alt=''>
                    <div class='movie-item-content'>
                        <div class='movie-item-title'>
                            $row[titleMsc]
                        </div>
                        <div class='movie-infos'>
                            <div class='movie-info'>
                                <i class='bx bxs-star'></i>
                                <span>$row[rateMsc]</span>
                            </div>
                            <div class='movie-info'>
                                <i class='bx bxs-time'></i>
                                <span>$row[timeMsc] mins</span>
                            </div>
                            <div class='movie-info'>
                                <span>$row[yearMsc]</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->";
                }
                ?>
            </div>
        </div>
    </div>
    <!-- LATEST SERIES SECTION -->
    <div class="section">
        <div class="container">
            <div class="section-header" id="anchs">
                series
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
            <?php
                include_once 'includes/db.inc.php';

                $sql = "SELECT * FROM msc WHERE  typeMsc='series' ORDER BY yearMsc DESC";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                    echo "SQL statment failed!";
                }
                else {
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                }

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "
                <!-- MOVIE ITEM -->
                <a href='#' class='movie-item'>
                    <img src='$row[imgMsc]'alt=''>
                    <div class='movie-item-content'>
                        <div class='movie-item-title'>
                            $row[titleMsc]
                        </div>
                        <div class='movie-infos'>
                            <div class='movie-info'>
                                <i class='bx bxs-star'></i>
                                <span>$row[rateMsc]</span>
                            </div>
                            <div class='movie-info'>
                                <i class='bx bxs-time'></i>
                                <span>$row[timeMsc] seasons</span>
                            </div>
                            <div class='movie-info'>
                                <span>$row[yearMsc]</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->";
                }
                ?>
            </div>
        </div>
    </div>
    <!-- END LATEST SERIES SECTION -->

    <!-- LATEST CARTOONS SECTION -->
    <div class="section">
        <div class="container">
            <div class="section-header" id="anchc" >
                cartoons
            </div>
            <div class="movies-slide carousel-nav-center owl-carousel">
            <?php
                include_once 'includes/db.inc.php';

                $sql = "SELECT * FROM msc WHERE  typeMsc='cartoons' ORDER BY yearMsc DESC";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                    echo "SQL statment failed!";
                }
                else {
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                }

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "
                <!-- MOVIE ITEM -->
                <a href='#' class='movie-item'>
                    <img src='$row[imgMsc]'alt=''>
                    <div class='movie-item-content'>
                        <div class='movie-item-title'>
                            $row[titleMsc]
                        </div>
                        <div class='movie-infos'>
                            <div class='movie-info'>
                                <i class='bx bxs-star'></i>
                                <span>$row[rateMsc]</span>
                            </div>
                            <div class='movie-info'>
                                <i class='bx bxs-time'></i>
                                <span>$row[timeMsc] mins</span>
                            </div>
                            <div class='movie-info'>
                                <span>$row[yearMsc]</span>
                            </div>
                        </div>
                    </div>
                </a>
                <!-- END MOVIE ITEM -->";
                }
                ?>
            </div>
        </div>
    </div>
    <!-- END LATEST CARTOONS SECTION -->

    <!-- SPECIAL MOVIE SECTION -->
    <div class="section">
        <div class="hero-slide-item">
            <?php
                include_once 'includes/db.inc.php';

                $sql = "SELECT * FROM msc  ORDER BY rateMsc DESC LIMIT 1";
                $stmt = mysqli_stmt_init($conn);
                if(!mysqli_stmt_prepare($stmt,$sql)){
                    echo "SQL statment failed!";
                }
                else {
                    mysqli_stmt_execute($stmt);
                    $result = mysqli_stmt_get_result($stmt);
                }

                if ($row["typeMsc"] == "series"){
                    $text ="seasons";
                }
                else{
                    $text ="mins";
                }

                    $row = mysqli_fetch_assoc($result);
                    echo "
                    <img src='$row[imgMsc]' alt=''>
                    <div class='overlay'></div>
                    <div class='hero-slide-item-content'>
                        <div class='item-content-wraper'>
                            <div class='item-content-title'>
                                $row[titleMsc] 
                            </div>
                            <div class='movie-infos'>
                                <div class='movie-info'>
                                    <i class='bx bxs-star'></i>
                                    <span>$row[rateMsc]</span>
                                </div>
                                <div class='movie-info'>
                                    <i class='bx bxs-time'></i>
                                    <span>$row[timeMsc] $text</span>
                                </div>
                                <div class='movie-info'>
                                    <span>$row[yearMsc]</span>
                                </div>
                            </div>
                        </div>
                    </div>"
                ?>
        </div>
    </div>
    <!-- END SPECIAL MOVIE SECTION -->

    <!-- FOOTER SECTION -->
    <footer class="section">
        <div class="container">
            <div class="row">
                <div class="col-4 col-md-6 col-sm-12">
                    <div class="content">
                        <a href="#" class="logo">
                            <i class='bx bx-movie-play bx-tada main-color'></i>Wa<span class="main-color">tc</span>h
                        </a>
                        <p>
                            This page is designed to help people find content to watch and to make it easier for them to keep track of the content they watch. Provides information on the film's evaluation of its duration and year of publication.
                        </p>
                        <div class="social-list">
                            <a href="#" class="social-item">
                                <i class="bx bxl-facebook"></i>
                            </a>
                            <a href="#" class="social-item">
                                <i class="bx bxl-twitter"></i>
                            </a>
                            <a href="#" class="social-item">
                                <i class="bx bxl-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-8 col-md-6 col-sm-12">
                    <div class="row">
                        <div class="col-3 col-md-6 col-sm-6">
                            <div class="content">
                                <p><b>Watch</b></p>
                                <ul class="footer-menu">
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">My profile</a></li>
                                    <li><a href="#">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-3 col-md-6 col-sm-6">
                            <div class="content">
                                <p><b>Browse</b></p>
                                <ul class="footer-menu">
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">My profile</a></li>
                                    <li><a href="#">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-3 col-md-6 col-sm-6">
                            <div class="content">
                                <p><b>Help</b></p>
                                <ul class="footer-menu">
                                    <li><a href="#">About us</a></li>
                                    <li><a href="#">My profile</a></li>
                                    <li><a href="#">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-3 col-md-6 col-sm-6">
                            <div class="content">
                                <p><b>Download app</b></p>
                                <ul class="footer-menu">
                                    <li>
                                        <a href="#">
                                            <img src="./images/google-play.png" alt="">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="./images/app-store.png" alt="">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- END FOOTER SECTION -->

    <!-- COPYRIGHT SECTION -->
    <div class="copyright">
        Copyright 2021 Marino Barada
    </div>
    <!-- END COPYRIGHT SECTION -->

    <!-- SCRIPT -->
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- OWL CAROUSEL -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
    <!-- APP SCRIPT -->
    <script src="skripts/home.js"></script>

</body>

</html>