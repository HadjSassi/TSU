<?php

$request_url = $_SERVER['REQUEST_URI'];

// Check if the requested page exists
if (!file_exists($request_url) && $request_url != '/TSU/' && $request_url != '/TSU/index.php') {
    // Redirect to the 404 error page
    header('HTTP/1.0 404 Not Found');
    include('404.php');
    exit();
}

try {
    $dbh = new PDO('mysql:host=localhost;port=3306;dbname=TSU', 'root', 'Magali_1984');
    $stmt = $dbh->prepare("SELECT * FROM event order by startingDate desc limit 6");
    $stmt->execute();
    $listeUsers = $stmt->fetchAll();

//$user = json_decode($_SESSION['user']);
//var_dump($user);
    echo '
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>TSU</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
          content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon%20(1).ico" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css"
          href="//fonts.googleapis.com/css?family=Work+Sans:300,700,800%7CIBM+Plex+Sans:200,300,400,400i,600,700">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <style>.ie-panel {
        display: none;
        background: #212121;
        padding: 10px 0;
        box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
        clear: both;
        text-align: center;
        position: relative;
        z-index: 1;
    }

    html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {
        display: block;
    }</style>
</head>
';
    echo '
<body>
<!--
<div class="ie-panel"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
-->
<div class="page">
    <!-- Page Header-->
    <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
            <nav class="rd-navbar rd-navbar-minimal" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed"
                 data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed"
                 data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed"
                 data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static"
                 data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static"
                 data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px"
                 data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                <div class="rd-navbar-main-outer">
                    <div class="rd-navbar-main">
                        <!-- RD Navbar Panel-->
                        <div class="rd-navbar-panel">
                            <!-- RD Navbar Toggle-->
                            <button class="rd-navbar-toggle" data-rd-navbar-toggle="#rd-navbar-nav-wrap-1"><span></span>
                            </button>
                            <!-- RD Navbar Brand--><a class="rd-navbar-brand" href="index.php"><img
                                src="images/navbarTsu.png" alt="" width="176" height="28"/></a>
                        </div>
                        <div class="rd-navbar-main-element">
                            <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item active"><a class="rd-nav-link" href="index.php">Acceuil</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="about.php">À propos TSU</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="gallery.php">Galerie</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.php">Contacts</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- RD Navbar Search-->
                            <div class="rd-navbar-search dropdown">
                                <div class="rd-navbar-search dropdown">
                                <p class="mr-3 mt-2" id="nomCourant"></p>
                                <div class="btn btn-secondary dropdown-toggle nav-icon" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="icon icon-md mdi mdi-settings text-gray-700" style="margin-left: -50%;"></span>
                                </div>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <div class="" id="notConnected">
                                    <a class="dropdown-item" href="Loging.php?login">S\'identifier</a>
                                    <a class="dropdown-item" href="Loging.php">S\'inscrire</a>
                                </div>
                                    <a class="dropdown-item" id="profile"  style="color: #505050;" href="profile.php">Mon profil</a>
                                    <a class="dropdown-item"  id="Connected"
                                    onclick="sessionStorage.removeItem(\'user\'); window.location.reload();"
                                    style="cursor:pointer;">Se déconnecter</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        
        ';
    echo '
    </header>
    <!-- Overlapping Screen-->
    <section class="section section-overlap bg-decorate">
        <div class="section-overlap-image" style="background-image: url(images/couvertureTest.jpg)"></div>
        <div class="section-overlap-content">
            <div class="container">
                <div class="row">


                    <div class="col-md-6 col-lg-5 col-xl-4 col-offset-1">
                        <div class="wow-outer">
                            <h4 class="font-weight-light wow slideInUp" data-wow-delay=".2s">
                                <img class="wow slideInUp" style="" data-wow-delay=".2s" src="images/TSU.png"
                                     width="1366" alt="">
                            </h4>
                        </div>
                        <div class="wow-outer button-outer" id="JoingUss"><a
                                class="button button-lg button-primary button-winona wow slideInUp"
                                style="margin-left: 30%;" href="Loging.php"
                                data-wow-delay=".3s">Rejoignez<br>nous</a></div>
                        <div class="wow-outer button-outer" id="members"><a
                                class="button button-lg button-primary button-winona wow slideInUp"
                                style="margin-left: 30%;" href="members.php"
                                data-wow-delay=".3s">Membres</a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    ';
    echo '
    <!-- Projects - Modern Layout-->
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row row-50">
                <div class="col-12 text-center">
                    <h3 class="section-title wow-outer"><span class="wow slideInUp">Portefeuille</span></h3>
                </div>
                <div class="col-12 isotope-wrap">
                    <div class="isotope offset-top-2" data-isotope-layout="masonry" data-lightgallery="group"
                         data-lg-thumbnail="false">
                        <div class="row row-30">
                            <div class="col-12 col-sm-6 col-lg-4 isotope-item wow-outer">
                                <!-- Thumbnail Corporate-->
                                <article class="thumbnail-corporate wow slideInDown"><img
                                        class="thumbnail-corporate-image" src="images/aviron.jpg"
                                        alt="" width="370" height="256"/>
                                    <div class="thumbnail-corporate-caption">
                                        <p class="thumbnail-corporate-title"><a href="#">ENSIT Rowing Day</a></p>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem consectetur
                                            dolore et facere.
                                        </p>
                                        <div class="row">
                                            <div class="col">
                                                <a class="thumbnail-corporate-link" href="images/aviron.jpg"
                                                   data-lightgallery="item">
                                                    <span class="icon mdi mdi-magnify"></span>
                                                    <span class="icon mdi mdi-magnify"></span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="thumbnail-corporate-link" href="event.php?event=Aviron">
                                                    <span class="icon mdi mdi-cursor-pointer"></span>
                                                    <span class="icon mdi mdi-cursor-pointer"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumbnail-corporate-dummy"></div>
                                </article>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 isotope-item wow-outer">
                                <!-- Thumbnail Corporate-->
                                <article class="thumbnail-corporate thumbnail-corporate-lg wow slideInDown"><img
                                        class="thumbnail-corporate-image" src="images/swimming.jpg"
                                        alt="" width="370" height="464"/>
                                    <div class="thumbnail-corporate-caption">
                                        <p class="thumbnail-corporate-title"><a href="#">Swiming Day</a></p>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem consectetur
                                            dolore et facere.
                                        </p>
                                        <div class="row">
                                            <div class="col">
                                                <a class="thumbnail-corporate-link" href="images/swimming.jpg"
                                                   data-lightgallery="item">
                                                    <span class="icon mdi mdi-magnify"></span>
                                                    <span class="icon mdi mdi-magnify"></span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="thumbnail-corporate-link" href="event.php?event=Swimming">
                                                    <span class="icon mdi mdi-cursor-pointer"></span>
                                                    <span class="icon mdi mdi-cursor-pointer"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumbnail-corporate-dummy"></div>
                                </article>';
    echo '
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 isotope-item wow-outer">
                                <!-- Thumbnail Corporate-->
                                <article class="thumbnail-corporate wow slideInUp"><img
                                        class="thumbnail-corporate-image" src="images/equitation.jpg"
                                        alt="" width="370" height="256"/>
                                    <div class="thumbnail-corporate-caption">
                                        <p class="thumbnail-corporate-title"><a href="#">Hippoclub Riding Class</a></p>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem consectetur
                                            dolore et facere.
                                        </p>
                                        <div class="row">
                                            <div class="col">
                                                <a class="thumbnail-corporate-link" href="images/equitation.jpg"
                                                   data-lightgallery="item">
                                                    <span class="icon mdi mdi-magnify"></span>
                                                    <span class="icon mdi mdi-magnify"></span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="thumbnail-corporate-link" href="event.php?event=Swimming">
                                                    <span class="icon mdi mdi-cursor-pointer"></span>
                                                    <span class="icon mdi mdi-cursor-pointer"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumbnail-corporate-dummy"></div>
                                </article>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 isotope-item wow-outer">
                                <!-- Thumbnail Corporate-->
                                <article class="thumbnail-corporate thumbnail-corporate-lg wow slideInUp"><img
                                        class="thumbnail-corporate-image" src="images/golf.jpg"
                                        alt="" width="370" height="464"/>
                                    <div class="thumbnail-corporate-caption">
                                        <p class="thumbnail-corporate-title"><a href="#">The Residence Golf fest.</a>
                                        </p>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem consectetur
                                            dolore et facere.
                                        </p>
                                        <div class="row">
                                            <div class="col">
                                                <a class="thumbnail-corporate-link" href="images/golf.jpg"
                                                   data-lightgallery="item">
                                                    <span class="icon mdi mdi-magnify"></span>
                                                    <span class="icon mdi mdi-magnify"></span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="thumbnail-corporate-link" href="event.php?event=Swimming">
                                                    <span class="icon mdi mdi-cursor-pointer"></span>
                                                    <span class="icon mdi mdi-cursor-pointer"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumbnail-corporate-dummy"></div>
                                </article>
                            </div>
                            ';
    echo '
                            <div class="col-12 col-sm-6 col-lg-4 isotope-item wow-outer">
                                <!-- Thumbnail Corporate-->
                                <article class="thumbnail-corporate thumbnail-corporate-lg wow slideInDown"><img
                                        class="thumbnail-corporate-image" src="images/kickbox.jpg"
                                        alt="" width="370" height="464"/>
                                    <div class="thumbnail-corporate-caption">
                                        <p class="thumbnail-corporate-title"><a href="#">Gym Box Fight Day</a></p>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem consectetur
                                            dolore et facere.
                                        </p>
                                        <div class="row">
                                            <div class="col">
                                                <a class="thumbnail-corporate-link" href="images/kickbox.jpg"
                                                   data-lightgallery="item">
                                                    <span class="icon mdi mdi-magnify"></span>
                                                    <span class="icon mdi mdi-magnify"></span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="thumbnail-corporate-link" href="event.php?event=Swimming">
                                                    <span class="icon mdi mdi-cursor-pointer"></span>
                                                    <span class="icon mdi mdi-cursor-pointer"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumbnail-corporate-dummy"></div>
                                </article>
                            </div>
                            <div class="col-12 col-sm-6 col-lg-4 isotope-item wow-outer">
                                <!-- Thumbnail Corporate-->
                                <article class="thumbnail-corporate wow slideInDown"><img
                                        class="thumbnail-corporate-image" src="images/tennis.jpg"
                                        alt="" width="370" height="256"/>
                                    <div class="thumbnail-corporate-caption">
                                        <p class="thumbnail-corporate-title"><a href="#">Game set and match</a></p>
                                        <p>
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem consectetur
                                            dolore et facere.
                                        </p>
                                        <div class="row">
                                            <div class="col">
                                                <a class="thumbnail-corporate-link" href="images/tennis.jpg"
                                                   data-lightgallery="item">
                                                    <span class="icon mdi mdi-magnify"></span>
                                                    <span class="icon mdi mdi-magnify"></span>
                                                </a>
                                            </div>
                                            <div class="col">
                                                <a class="thumbnail-corporate-link" href="event.php?event=Swimming">
                                                    <span class="icon mdi mdi-cursor-pointer"></span>
                                                    <span class="icon mdi mdi-cursor-pointer"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="thumbnail-corporate-dummy"></div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    ';
    echo '
    <!-- Advantages and Achievements-->
    <section class="section section-lg text-center bg-default">
        <div class="container">
            <h3 class="section-title wow-outer"><span class="wow slideInUp">À propos Tunis Sports University</span></h3>
            <p class="wow-outer"><span class="text-width-1 wow slideInDown">Depuis 2017, Organisation d\'événements sportifs à caractère social et humanitaire.</span>
            </p>
            <div class="row row-50">
                <div class="col-6 col-md-3 wow-outer">
                    <!-- Counter Minimal-->
                    <article class="counter-minimal wow slideInUp" data-wow-delay=".1s">
                        <div class="counter-minimal-icon linearicons-loading3"></div>
                        <div class="counter-minimal-main">
                            <div class="counter">50</div>
                        </div>
                        <h5 class="counter-minimal-title">Événement</h5>
                    </article>
                </div>
                <div class="col-6 col-md-3 wow-outer">
                    <!-- Counter Minimal-->
                    <article class="counter-minimal wow slideInUp" data-wow-delay=".1s">
                        <div class="counter-minimal-icon linearicons-history"></div>
                        <div class="counter-minimal-main">
                            <div class="counter">2017</div>
                        </div>
                        <h5 class="counter-minimal-title">Années</h5>
                    </article>
                </div>
                <div class="col-6 col-md-3 wow-outer">
                    <!-- Counter Minimal-->
                    <article class="counter-minimal wow slideInUp" data-wow-delay=".1s">
                        <div class="counter-minimal-icon linearicons-man-woman"></div>
                        <div class="counter-minimal-main">
                            <div class="counter">100</div>
                        </div>
                        <h5 class="counter-minimal-title">Membres étudiants</h5>
                    </article>
                </div>
                <div class="col-6 col-md-3 wow-outer">
                    <!-- Counter Minimal -->
                    <article class="counter-minimal wow slideInUp" data-wow-delay=".1s">
                        <div class="counter-minimal-icon linearicons-basketball"></div>
                        <div class="counter-minimal-main">
                            <div class="counter">392</div>
                        </div>
                        <h5 class="counter-minimal-title">Sports</h5>
                    </article>
                </div>
            </div>
        </div>
    </section>
    ';
    echo '
    <!-- Testimonials-->
    <section class="section section-lg bg-gray-100 text-center">
        <div class="container">
            <h3 class="section-title">Témoignages</h3>
            <div class="slick-widget-testimonials wow fadeIn">
                <div class="slick-slider carousel-child" id="child-carousel" data-for=".carousel-parent"
                     data-arrows="true" data-loop="true" data-dots="false" data-swipe="true" data-items="1"
                     data-sm-items="3" data-md-items="5" data-lg-items="5" data-xl-items="5" data-center-mode="true"
                     data-slide-to-scroll="1">
                    <div class="item wow-outer">
                        <div style="width: 96px; height: 96px; overflow: hidden; border-radius: 50%;">
                            <img class="wow slideInLeft" src="images/mah.jpg" alt=""
                                 style="width: 100%; height: 100%; object-fit: cover;"/>
                        </div>
                    </div>
                    <div class="item wow-outer">
                        <div style="width: 96px; height: 96px; overflow: hidden; border-radius: 50%;">
                            <img class="wow slideInLeft" src="images/mahd.jpg" alt=""
                                 style="width: 100%; height: 100%; object-fit: cover;"/>
                        </div>
                    </div>
                    <div class="item wow-outer">
                        <div style="width: 96px; height: 96px; overflow: hidden; border-radius: 50%;">
                            <img class="wow slideInLeft" src="images/mah.jpg" alt=""
                                 style="width: 100%; height: 100%; object-fit: cover;"/>
                        </div>
                    </div>
                    <div class="item wow-outer">
                        <div style="width: 96px; height: 96px; overflow: hidden; border-radius: 50%;">
                            <img class="wow slideInLeft" src="images/mahdi%20hadj%20sassi.jpg" alt=""
                                 style="width: 100%; height: 100%; object-fit: cover;"/>
                        </div>
                    </div>
                    <div class="item wow-outer">
                        <div style="width: 96px; height: 96px; overflow: hidden; border-radius: 50%;">
                            <img class="wow slideInLeft" src="images/mahd.jpg" alt=""
                                 style="width: 100%; height: 100%; object-fit: cover;"/>
                        </div>
                    </div>
                    <div class="item wow-outer">
                        <div style="width: 96px; height: 96px; overflow: hidden; border-radius: 50%;">
                            <img class="wow slideInLeft" src="images/mahdi%20hadj%20sassi.jpg" alt=""
                                 style="width: 100%; height: 100%; object-fit: cover;"/>
                        </div>
                    </div>
                </div>
                <!-- Slick Carousel-->
                <div class="slick-slider carousel-parent" data-arrows="false" data-loop="true" data-dots="false"
                     data-swipe="false" data-items="1" data-fade="true" data-child="#child-carousel"
                     data-for="#child-carousel">
                    <div class="item">
                        <!-- Quote Light 1-->
                        <blockquote class="quote-light">
                            <cite class="quote-light-cite">Hadj Sassi Mahdi</cite>
                            <p class="quote-light-caption">ENSIT Étudiant </p>
                            <div class="quote-light-text">
                                <p>J\'ai vraiment adoré ma session et toutes les photos qui en sont issues. Vous avez une passion pour ce que vous faites et cela se voit à travers votre travail !</p>
                            </div>
                        </blockquote>
                    </div>
                    <div class="item">
                        <!-- Quote Light 2-->
                        <blockquote class="quote-light">
                            <cite class="quote-light-cite">Hadj Sassi Ezzedine</cite>
                            <p class="quote-light-caption">Sup\'Com Étudiant</p>
                            <div class="quote-light-text">
                                <p>J\'étais tellement content des photos prises par Jonathan. Il était très gentil et patient avec mon enfant de deux mois et mon énergique de 6 ans. enfants. J\'irai chez Jonathan à partir de maintenant!</p>
                            </div>
                        </blockquote>
                    </div>
                    <div class="item">
                        <!-- Quote Light 3-->
                        <blockquote class="quote-light">
                            <cite class="quote-light-cite">Mahdi Ezzedine</cite>
                            <p class="quote-light-caption">Artiste</p>
                            <div class="quote-light-text">
                                <p>Je viens de recevoir mes belles photos aujourd\'hui et je suis impressionné par la beauté de mon fils sur les photos! Merci beaucoup pour ces bons souvenirs ! Je te recommenderai à mes amis./p>
                            </div>
                        </blockquote>
                    </div>
                    <div class="item">
                        <!-- Quote Light 4 -->
                        <blockquote class="quote-light">
                            <cite class="quote-light-cite">Ezzedine Hadj Sassi</cite>
                            <p class="quote-light-caption">Entrepreneur</p>
                            <div class="quote-light-text">
                                <p>Jonathan est vraiment un photographe exceptionnel (et une personne merveilleuse) avec une capacité presque mystique à capturer la vraie nature des gens et des événements. Je le recommande à tout le monde !</p>
                            </div>
                        </blockquote>
                    </div>
                    <div class="item">
                        <!-- Quote Light 3-->
                        <blockquote class="quote-light">
                            <cite class="quote-light-cite">Mahdi Hadj Sassi Ezzedine</cite>
                            <p class="quote-light-caption">Homme d\'affaire</p>
                            <div class="quote-light-text">
                                <p>Je viens de recevoir mes belles photos aujourd\'hui et je suis impressionné par la beauté de mon fils sur les photos! Merci beaucoup pour ces bons souvenirs ! Je te recommenderai à mes amis.</p>
                            </div>
                        </blockquote>
                    </div>
                    <div class="item">
                        <!-- Quote Light 5-->
                        <blockquote class="quote-light">
                            <cite class="quote-light-cite">Hadj Sassi</cite>
                            <p class="quote-light-caption">Étudiant</p>
                            <div class="quote-light-text">
                                <p>J\'ai engagé Jonathan pour 3 événements familiaux et j\'ai toujours été satisfait à 100%. Il a été disponible et réactif chaque fois que j\'ai eu des questions et a toujours eu la patience de m\'aider.</p>
                            </div>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>
    ';
    echo '
    <section class="section section-xs bg-gray-700 text-center" id="sectionConnected">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-12">
                    <div class="box-cta-thin">
                        <h4 class="wow-outer"><span class="wow slideInRight">À la recherche des  <span class="text-italic">Actions honorables ?</span> </span>
                        </h4>
                        <div class="wow-outer button-outer"><a
                                class="button button-primary button-winona wow slideInLeft" href="Loging.php">Rejoignez-nous</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Posts-->
    <section class="section section-lg bg-gray-100 text-center">
        <div class="container">
            <h3 class="section-title wow-outer"><span class="wow slideInDown">Les partenaires</span></h3>
            <div class="row row-50" id="partner-slider">
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft"><a class="post-classic-media" href="#"><img
                            src="images/HyundaiLogoStacked_4cblk-1024x659.gif" alt=""/></a>
                        <h4 class="post-classic-title text-center"><a href="#">Huyndai</a></h4>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft"><a class="post-classic-media" href="#"><img
                            src="images/amiassurances-new-logo.png" alt=""/></a>
                        <h4 class="post-classic-title text-center"><a href="#">Ami Assurance</a></h4>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft"><a class="post-classic-media" href="#"><img
                            src="images/Kfc_logo.png" alt=""/></a>
                        <h4 class="post-classic-title text-center"><a href="#">KFC</a></h4>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft"><a class="post-classic-media" href="#"><img
                            src="images/download.png" alt=""/></a>
                        <h4 class="post-classic-title text-center"><a href="#">Académie des chefs</a></h4>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft"><a class="post-classic-media" href="#"><img
                            src="images/logo-geeks.png" alt=""/></a>
                        <h4 class="post-classic-title text-center"><a href="#">Geeks Clubs</a></h4>
                    </article>
                </div>
            </div>
        </div>
        ';
    echo '
        <script>
            $(document).ready(function () {
                $(\'#partner-slider\').slick({
                    autoplay: true, // Enable autoplay
                    autoplaySpeed: 300, // Set the autoplay speed in milliseconds
                    dots: false, // Disable the dots navigation
                    infinite: true, // Enable infinite loop
                    speed: 3000, // Set the transition speed in milliseconds
                    slidesToShow: 3, // Set the number of images to show at a time
                    slidesToScroll: 1, // Set the number of images to scroll at a time
                    responsive: [
                        {
                            breakpoint: 768, // Apply the settings below 768px viewport width
                            settings: {
                                slidesToShow: 2 // Show 2 images at a time
                            }
                        },
                        {
                            breakpoint: 576, // Apply the settings below 576px viewport width
                            settings: {
                                slidesToShow: 1 // Show 1 image at a time
                            }
                        }
                    ]
                });
            });
        </script>
    </section>
    <!-- Page Footer-->
    <footer class="section footer-standard text-justify">
        <div class="footer-standard-main">
            <div class="container">
                <div class="row row-50">
                    <div class="col-lg-4">
                        <div class="inset-right-1">
                            <h4>À propos TSU</h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, dignissimos
                                doloribus, ipsum labore magni maiores necessitatibus non omnis placeat ratione sapiente
                                suscipit velit voluptatem? Ex iusto natus qui ut veniam.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-4">
                        <div class="box-1">
                            <h4>Coordonnées</h4>
                            <ul class="list-sm">
                                <li class="object-inline"><span
                                        class="icon icon-md mdi mdi-map-marker text-gray-700"></span><a
                                        class="link-default" href="#">ENSIT <br> Avenue Taha Hussein Montfleury, 1008
                                    Tunis</a></li>
                                <li class="object-inline"><span class="icon icon-md mdi mdi-phone text-gray-700"></span><a
                                        class="link-default" href="tel:#">+216 22 545 454 </a></li>
                                <li class="object-inline"><span class="icon icon-md mdi mdi-email text-gray-700"></span><a
                                        class="link-default" href="mailto:#">benabdallahmehdi1920@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-7 col-lg-4">
                        <h4>Alimenté par Geeks Ensit Club</h4>
                        <div class="">
                            <a href="https://www.ensitgeeksclub.com" style="float: left;" target="_blank"><img
                                    src="images/logo-geeks.png" class="" width="100" alt=""></a>
                            <!-- RD Mailform-->
                            <p>L\'ENSIT Geeks Club a été fondé en 2021 par Nizar Essid à l\'Ecole Nationale Supérieure de Tunis. Il regroupe des personnes intéressées à partager leurs connaissances et à s\'entraider en informatique. Il accueille aussi bien les débutants que les experts. Il vise à approfondir vos connaissances nécessaires en informatique pour pouvoir réussir dans le domaine professionnel et permettre aux étudiants d\'utiliser la technologie d\'aujourd\'hui pour préparer l\'avenir</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer-standard-aside"><a class="brand" href="index.php"><img
                    src="images/navbarTsu.png" alt="" width="176" height="28"/></a>
                <!-- Rights-->
                <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>Tous les droits sont réservés.</span><span>&nbsp;</span><br
                        class="d-sm-none"/>
                </p>
            </div>
        </div>
    </footer>
</div>
<div class="preloader">
    <div class="preloader-logo"><img src="images/loading%20tsu.png" alt="" width="" height=""/>
    </div>
    <div class="preloader-body">
        <div id="loadingProgressG" style="background: #dba228;">
            <div class="loadingProgressG" style="background: #138a91" id="loadingProgressG_1"></div>
        </div>
    </div>
</div>
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>
<script>
    var user = sessionStorage.getItem("user");
    var connectede = document.getElementById("Connected");
    var profile = document.getElementById("profile");
    var connectedesd = document.getElementById("sectionConnected");
    var connectedess = document.getElementById("JoingUss");
    var notconnectede = document.getElementById("notConnected");
    var members = document.getElementById("members");
    if (user != null && user.split(",")[1].length > 0) {
        var pElement = document.getElementById("nomCourant");
        pElement.textContent = user.split(",")[1];
        connectede.style.display = "block";
        profile.style.display = "block";
        profile.href = "profile.php?mail="+user.split(",")[0];
        connectedess.style.display = "none";
        connectedesd.style.display = "none";
        notconnectede.style.display = "none";
        members.style.display = "none";
        if (user.split(",")[2] === "admin")
            members.style.display = "block";
    }else if (user == null){
       connectede.style.display = "none";
       profile.style.display = "none";
       members.style.display = "none";
       connectedess.style.display = "block";
       connectedesd.style.display = "block";
       notconnectede.style.display = "block";
    }
</script>
</body>
</html>
';
} catch (PDOException $exception) {
    echo $exception->getMessage();
}
?>