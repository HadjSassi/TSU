<?php

try {


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
    
    .geeks:hover{
            transform: rotate(-5deg);
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
                            <!-- RD Navbar Brand--><a class="rd-navbar-brand" href="/"><img
                                src="images/navbarTsu.png" alt="" width="176" height="28"/></a>
                        </div>
                        <div class="rd-navbar-main-element">
                            <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="about.php">À propos</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="program.php">Programme</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="gallery.php">Galerie</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="temoignages.php">Témoignages</a>
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
    <!-- Advantages and Achievements-->
    <section class="section section-lg text-center bg-default">
        <div class="container">
            <h3 class="section-title wow-outer"><span class="wow slideInUp">À propos de Tunis Sports University</span></h3>
            <p class="wow-outer"><span class="text-width-1 wow slideInDown text-justify">
            Jouissant d’une <b>expérience de plus de 45 ans</b> dans le domaine du sport civil et 
            de <b>plus de 20 ans dans celui du sport universitaire</b>, nous nous sommes lancés dans le cadre
             de notre profession en tant qu’enseignant d’éducation physique et sportive dans l’organisation 
             d’événements sportifs depuis la saison universitaire <b>2017/18 à l’Ecole Nationale Supérieure d’Ingénieurs de Tunis (ENSIT).</b>
            <br>Depuis la saison universitaire <b>2018/19</b> nous avons choisi de nous spécialiser dans les 
            <b>événements sportifs à caractère social et humanitaire</b> et cette expérience s’est poursuivie lors de <b>la saison universitaire 2019/20 à l’IHEC Carthage</b> puis à <b>l’ENAU Sidi-Bou-SaÏd</b>
             en <b>2020/21</b> puis de nouveau à <b>l’ENSIT</b> depuis <b>Décembre 2021</b> où nous avons été 
             respectivement affectés.
            <br>Depuis la saison 2020/21 nous avons également introduit en plus des événements sportifs à caractère social 
            et humanitaire, des journées <b>d’initiation au simulateur de pilotage avion</b> et des <b>Master Class </b>en 
            pâtisserie & <b>Cooking Class</b> avec l’équipe des chefs ayant représenté la Tunisie au <b>Bocuse d’Or 2022.</b>
            <br>À partir de la saison prochaine, nous poursuivrons notre mission avec les étudiants de l’Académie des 
            Chefs qui ont intégré nos actions depuis la saison écoulée et qui auront pour tâche d’assurer dorénavant 
            aussi bien le parrainage et accompagnement des enfants que la préparation du cocktail que nous organisons
            à l’occasion de chaque réception qui suit la partie sportive.
            </span>
            </p>
            <div class="row row-50">
                <div class="col-6 col-md-3 wow-outer">
                    <!-- Counter Minimal-->
                    <article class="counter-minimal wow slideInUp" data-wow-delay=".1s">
                        <div class="counter-minimal-icon linearicons-loading3"></div>
                        <div class="counter-minimal-main">
                            <div class="counter">60</div>
                        </div>
                        <h5 class="counter-minimal-title">Événements</h5>
                    </article>
                </div>
                <div class="col-6 col-md-3 wow-outer">
                    <!-- Counter Minimal-->
                    <article class="counter-minimal wow slideInUp" data-wow-delay=".1s">
                        <div class="counter-minimal-icon linearicons-history"></div>
                        <div class="counter-minimal-main">
                            <div class="counter">2017</div>
                        </div>
                        <h5 class="counter-minimal-title">Année de lancement</h5>
                    </article>
                </div>
                <div class="col-6 col-md-3 wow-outer">
                    <!-- Counter Minimal-->
                    <article class="counter-minimal wow slideInUp" data-wow-delay=".1s">
                        <div class="counter-minimal-icon linearicons-man-woman"></div>
                        <div class="counter-minimal-main">
                            <div class="counter">250</div>
                        </div>
                        <h5 class="counter-minimal-title">Membres étudiants</h5>
                    </article>
                </div>
                <div class="col-6 col-md-3 wow-outer">
                    <!-- Counter Minimal -->
                    <article class="counter-minimal wow slideInUp" data-wow-delay=".1s">
                        <div class="counter-minimal-icon linearicons-basketball"></div>
                        <div class="counter-minimal-main">
                            <div class="counter">25</div>
                        </div>
                        <h5 class="counter-minimal-title">Sports</h5>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-xs bg-gray-700 text-center" id="sectionConnected">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-sm-10 col-md-12">
                    <div class="box-cta-thin">
                        <h4 class="wow-outer"><span class="wow slideInRight">À la recherche d\'  <span class="text-italic">Actions honorables ?</span> </span>
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
            <div class="row row-50" style="margin-bottom: 10%" id="partner-slider1">
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft w-75"><a class="post-classic-media" href="#"><img
                            src="images/amiassurances-new-logo.png"   alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft w-75"><a class="post-classic-media" href="#"><img
                            src="images/download.png"   alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft w-75"><a class="post-classic-media" href="#"><img
                            src="images/indigo.png"   alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft w-75"><a class="post-classic-media" href="#"><img
                            src="images/msjus.png"   alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft w-75"><a class="post-classic-media" href="#"><img
                            src="images/logo-geeks.png"   alt=""/></a>
                    </article>
                </div>
            </div>'.'
            <div class="row row-50" style="margin-bottom: 10%" id="partner-slider2">
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft w-75"><a class="post-classic-media" href="#"><img
                            src="images/mozaique.png"   alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft w-75"><a class="post-classic-media" href="#"><img
                            src="images/Express.png"   alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft w-75"><a class="post-classic-media" href="#"><img
                            src="images/diwen.png"   alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft w-75"><a class="post-classic-media" href="#"><img
                            src="images/Logo_négatif_avec_contour.png"   alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft w-75"><a class="post-classic-media" href="#"><img
                            src="images/shems-fm.png"   alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft w-75"><a class="post-classic-media" href="#"><img
                            src="images/Radio_Jeunes.png"   alt=""/></a>
                    </article>
                </div>
            </div>'.'
            <div class="row row-50" style="margin-bottom: 10%" id="partner-slider3">
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft w-75"><a class="post-classic-media" href="#"><img
                            src="images/AS-Marsa.png"   alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft w-75"><a class="post-classic-media" href="#"><img
                            src="images/kendo.png"   alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft w-75"><a class="post-classic-media" href="#"><img
                            src="images/FTTT-logo-retina-300x99.png"   alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft w-75"><a class="post-classic-media" href="#"><img
                            src="images/fta.png"   alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft w-75"><a class="post-classic-media" href="#"><img
                            src="images/Tunisian_Esports_Federation_darkmode.png"   alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft w-75"><a class="post-classic-media" href="#"><img
                            src="images/unnamed.png"   alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft w-75"><a class="post-classic-media" href="#"><img
                            src="images/hippoclub.png"   alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft w-75"><a class="post-classic-media" href="#"><img
                            src="images/arena.png"   alt=""/></a>
                    </article>
                </div>
            </div>'.'
            <div class="row row-50" id="partner-slider4">
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft w-75"><a class="post-classic-media" href="#"><img
                            src="images/MondeNews-LAssociation-Tunisienne-des-Villages-dEnfants.png"   alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft w-75"><a class="post-classic-media" href="#"><img
                            src="images/rose_espoir.png"   alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft w-75"><a class="post-classic-media" href="#"><img
                            src="images/ASDD.png"   alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft w-75"><a class="post-classic-media" href="#"><img
                            src="images/downlqsdfqsdfoad.png"   alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft w-75"><a class="post-classic-media" href="#"><img
                            src="images/atel.png"   alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft w-75"><a class="post-classic-media" href="#"><img
                            src="images/Logotype_du_ministère_de_l\'éducation_Tunisie.png"   alt=""/></a>
                    </article>
                </div>
            </div>
        ';
    echo '
        <script>
            $(document).ready(function () {
                $(\'#partner-slider1\').slick({
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
            $(document).ready(function () {
                $(\'#partner-slider2\').slick({
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
            $(document).ready(function () {
                $(\'#partner-slider3\').slick({
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
            $(document).ready(function () {
                $(\'#partner-slider4\').slick({
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
    </section>';
    echo'
    <!-- Page Footer-->
<footer class="section footer-standard text-justify">
        <div class="footer-standard-main">
            <div class="container">
                <div class="row row-50">
                    <div class="col-lg-3">
                        <div class="inset-right-1">
                            <img src="images/favicon.png" width="80%">    
                        </div>
                    </div>
                    <div class="col">
                        <div class="box-1">
                            <h4>Coordonnées</h4>
                            <ul class="list-sm">
                                <li class="object-inline"><span
                                        class="icon icon-md mdi mdi-map-marker text-gray-700"></span><span
                                        class="link-default" href="#">14 نهج الامام الرصاع، تونس, Tunis, Tunisia, 1073</li>
                                <li class="object-inline"><a
                                        class="link-default" href="tel:+216 22 545 454"><span class="icon icon-md mdi mdi-phone text-gray-700"></span>+216 22 545 454 </a></li>
                                <li class="object-inline"><a
                                        class="link-default" href="mailto:benabdallahmehdi1920@gmail.com"><span class="icon icon-md mdi mdi-email text-gray-700"></span>benabdallahmehdi1920@gmail.com</a></li>
                                <li class="object-inline"><a
                                        class="link-default" href="https://www.facebook.com/profile.php?id=100057545556860"><span class="icon icon-md mdi mdi-facebook text-gray-700"></span>Facebook</a></li>
                                <li class="object-inline"><a
                                        class="link-default" href="https://www.instagram.com/tunissportuniversity/"><span class="icon icon-md mdi mdi-instagram text-gray-700"></span>Instagram</a></li>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col">
                        <h4>Alimenté par Geeks Ensit Club</h4>
                        <div class="">
                            <a href="https://www.ensitgeeksclub.com" style="float: left;" target="_blank"><img
                                    src="images/logo-geeks.png" class="geeks" width="100" alt=""></a>
                            <!-- RD Mailform-->
                            <p>L\'ENSIT Geeks Club, fondé en 2021 par Nizar Essid à l\'ENSIT, rassemble des passionnés d\'informatique, débutants ou experts, souhaitant partager leurs connaissances et s\'entraider. Notre objectif est de vous aider à approfondir vos compétences en informatique pour réussir professionnellement, tout en vous préparant à l\'avenir grâce à l\'utilisation des technologies les plus actuelles.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer-standard-aside"><a class="brand" href="/"><img
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