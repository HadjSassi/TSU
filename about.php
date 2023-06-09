<?php
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
  <link rel="s+tylesheet" type="text/css"
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
echo'
  <body>
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
                      <li class="rd-nav-item"><a class="rd-nav-link" href="/">Acceuil</a>
                      </li>
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="about.php">À propos  TSU</a>
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
                        <a class="dropdown-item"  id="profile" style="color: #505050;" href="profile.php">Mon profil</a>
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
      </header>
      ';
echo'
      <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(images/gyymn.jpg);">
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h6 class="breadcrumbs-custom-subtitle title-decorated">À propos TSU</h6>
              <h1 class="breadcrumbs-custom-title">À propos TSU</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
              <li><a href="/">Acceuil</a></li>
              <li class="active">À propos TSU</li>
            </ul>
          </div>
        </div>
      </section>
      <section class="section section-md">
        <div class="container">
          <!-- Profile Modern-->
          <article class="profile-modern">
            <div class="profile-modern-figure"><img class="profile-modern-image" src="images/favicon.png" alt="" style="width: 65%"/></div>
            <div class="profile-modern-main">
              <div class="profile-modern-header">
                <div class="profile-modern-header-item">
                  <h3>Tunis Sports University</h3>
                </div>
                <div class="profile-modern-item" style="margin-right: 15%;">
                  <div class="group group-xs group-middle"><a class="icon icon-sm icon-creative mdi mdi-facebook" href="https://www.facebook.com/profile.php?id=100057545556860"></a><a class="icon icon-sm icon-creative mdi mdi-instagram" href="https://www.instagram.com/tunissportuniversity/"></a><a class="icon icon-sm icon-creative mdi mdi-google" href="mailto:benabdallahmehdi1920@gmail.com"></a></div>
                </div>
              </div>
              <div class="row row-30">
                <div class="col-lg-6">
                    <p class="text-justify">
                        Le professeur Mehdi Ben Abdallah a créé le concept de Tunis Sports University, une institution avec plus de 45 ans d\'expérience dans les sports civils et plus de 20 ans dans les sports universitaires. L\'Université organise des événements sportifs à caractère social et humanitaire depuis la saison universitaire 2017/18 à l\'ENSIT, qui ont ensuite été étendus à l\'IHEC Carthage et à l\'ENAU Sidi-Bou-Saïd. Le concept consiste à associer 20 étudiants motivés avec 20 enfants issus de milieux défavorisés ou d\'associations, en créant des liens et en luttant contre l\'extrémisme à travers le sport et le bénévolat.
                    </p>
                </div>
                <div class="col-lg-6 text-center">
                  <a href="#">
                  <div style="width: 200px; height: 200px; overflow: hidden; border-radius: 50%; margin-left: 22%;">
                    <img class="wow fadeSlideInUp" src="images/mehdi.jpg" alt=""
                         style="width: 100%; height: 100%; object-fit: cover;"/>
                  </div>
                  </a>
                  <h3><a href="#">Mehdi Ben Abdallah</a></h3>
                  <!--
                        &lt;!&ndash; Linear progress bar&ndash;&gt;
                        <article class="progress-linear">
                          <div class="progress-header">
                            <p>Photography</p><span class="progress-value">90</span>
                          </div>
                          <div class="progress-bar-linear-wrap">
                            <div class="progress-bar-linear"></div>
                          </div>
                        </article>
                        &lt;!&ndash; Linear progress bar&ndash;&gt;
                        <article class="progress-linear">
                          <div class="progress-header">
                            <p>Creativity</p><span class="progress-value">65</span>
                          </div>
                          <div class="progress-bar-linear-wrap">
                            <div class="progress-bar-linear progress-red"></div>
                          </div>
                        </article>
                        &lt;!&ndash; Linear progress bar&ndash;&gt;
                        <article class="progress-linear">
                          <div class="progress-header">
                            <p>Retouching</p><span class="progress-value">100</span>
                          </div>
                          <div class="progress-bar-linear-wrap">
                            <div class="progress-bar-linear progress-blue"></div>
                          </div>
                        </article>-->
                </div>
              </div>
            </div>
          </article>
        </div>
      </section>
      ';
echo'
      <!-- Nathan’s Projects-->
    <section class="section section-lg text-center bg-default">
        <div class="container">
            <h3 class="section-title wow-outer"><span class="wow slideInUp">À propos Tunis Sports University</span></h3>
            <p class="wow-outer"><span class="text-width-1 wow slideInDown text-justify">
            Jouissant d’une <b>expérience de plus de 45 ans</b> dans le domaine du sport civil et 
            de <b>plus de 20 ans dans celui du sport universitaire</b>, nous nous sommes lancés dans le cadre
             de notre profession en tant qu’enseignant d’éducation physique et sportive dans l’organisation 
             d’événements sportifs depuis la saison universitaire <b>2017/18 à l’Ecole Nationale Supérieure d’Ingénieurs de Tunis (ENSIT).</b>
            Depuis la saison universitaire <b>2018/19</b> nous avons choisi de nous spécialiser dans les 
            <b>événements sportifs à caractère social et humanitaire</b> et cette expérience s’est poursuivie l
            ors de <b>la saison universitaire 2019/20 à l’IHEC Carthage</b> puis à <b>l’ENAU Sidi-Bou-SaÏd</b>
             en <b>2020/21</b> puis de nouveau à <b>l’ENSIT</b> depuis <b>Décembre 2022</b> où nous avons été 
             respectivement affectés.
             Depuis la saison écoulée nous avons également introduit en plus des événements sportifs à caractère
              social et humanitaire, une journée <b>d’initiation au simulateur de pilotage avion</b> et des <b>Master Class</b>
               en pâtisserie & <b>Cooking Class</b> avec l’équipe des chefs ayant représenté la Tunisie aux derniers 
               <b>Bocuse d’Or 202</b>.

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
                            <div class="counter">25</div>
                        </div>
                        <h5 class="counter-minimal-title">Sports</h5>
                    </article>
                </div>
            </div>
        </div>
    </section>
    <section class="section section-lg text-center bg-default">
        <div class="container">
            <h3 class="section-title wow-outer"><span class="wow slideInUp">Présentation du concept</span></h3>
            <div class="row row-30">
                <div class="col-md-6 wow slideInUp">
                <video controls width="100%" height="auto" autoplay muted>
                    <source src="images/tsu1m.mp4" type="video/mp4">
                    </video>
                </div>
                <div class="col-md-6"><br>
                    <p class="wow-outer"><span class="text-width-1 wow slideInDown text-justify">
                    Lors de nos <b>évènements à caractère social et humanitaire</b>, nous commençons par choisir une 
                    <b>activité innovante</b> pour nos étudiants et nos invités ainsi qu’un <b>cadre attrayant</b>
                     pour sa pratique.
        
                    Nous sélectionnons par la suite <b>20 de nos étudiants</b> les plus motivés qui seront chacun 
                    <b>parrain ou marraine des 20 enfants</b> (d’une association, d’une école primaire d’une zone 
                    défavorisée ou autres…) que nous invitons lors de chaque évènement.
                    
                    Nous formons ainsi des binômes (étudiant-enfant) qui seront <b>ensemble tout le long de l’évènement</b>
                     s’achevant par une réception au cours de laquelle chaque étudiant offrira un cadeau et une 
                     <b>médaille commémorative à l’enfant</b> qu’il a parrainé.
        
                    </span>
                        </div>
                      </div>
                    </p>
                </div>
    </section>
    <section class="section section-lg text-center bg-default">
        <div class="container">
            <h3 class="section-title wow-outer "><span class="wow slideInUp">Nos Objectifs</span></h3>
            <div class="row row-30 flex-md-row-reverse">
                <div class="col-md-6 wow slideInUp"><img src="images/AddEvent.jpg" alt="" width="770" height="456"/>
                </div>
                <div class="col-md-6">
                    <ul class="wow-outer text-justify list">
                        <li class="text-width-1 wow slideInUp"><img src="images/li.png" width="50">Responsabiliser nos étudiants et les initier à la vie associative.</li>
                        <li class="text-width-1 wow slideInUp"><img src="images/li.png" width="50">Présenter à nos étudiants les différentes associations s’occupant d’enfants à besoins spécifiques.</li>
                        <li class="text-width-1 wow slideInUp"><img src="images/li.png" width="50">Tisser des liens d’amitié entre les enfants des différentes associations et nos étudiants afin que ces derniers, futurs cadres de la Tunisie de demain, ne portent plus de préjugés sur les enfants à besoins spécifiques.</li>
                        <li class="text-width-1 wow slideInUp"><img src="images/li.png" width="50">Combattre toute forme d’extrémisme par l’utilisation efficiente du temps libre de nos étudiants à travers le sport et le volontariat.</li>
                        <li class="text-width-1 wow slideInUp"><img src="images/li.png" width="50">Former de futurs bons citoyens tunisiens.</li>
                    </ul>
                </div>
              </div>
            
        </div>
    </section>
        ';
echo '
      <!-- Nathan’s Blog Posts-->
      <section class="section section-lg bg-gray-100">
        <div class="container">
          <h3 class="wow-outer section-title text-center"><span class="wow slideInUp">Passage TV & Radio</span></h3>
          <div class="row row-50 justify-content-center justify-content-lg-between">
            <div class="col-md-10 col-lg-5 wow-outer">
              <div class="owl-carousel wow slideInLeft" data-items="1" data-dots="true" data-nav="false" data-loop="true" data-margin="30" data-stage-padding="0" data-mouse-drag="false">
                <blockquote class="quote-modern">
                  <span class="icon quote-modern-mark linearicons-quote-open"></span>
                  <div class="quote-modern-text">
                    <p>Je viens juste de recevoir mes magnifiques photos aujourd\'hui et je suis émerveillé(e) de voir à quel point mon fils est beau sur les photos ! Merci beaucoup pour ces souvenirs exceptionnels ! Je vous recommanderai à mes amis.</p>
                  </div>
                  <span class="icon quote-modern-mark linearicons-quote-close"></span>
                  <div class="quote-modern-meta">
                    <div class="quote-modern-avatar">
                      <div style="width: 96px; height: 96px; overflow: hidden; border-radius: 50%;">
                        <img class="wow slideInLeft" src="images/mahd.jpg" alt=""
                             style="width: 100%; height: 100%; object-fit: cover;"/>
                      </div>
                    </div>
                    <div class="quote-modern-info">
                      <cite class="quote-modern-cite">Hadj Sassi Mahdi</cite>
                      <p class="quote-modern-caption">Ensit Student</p>
                    </div>
                  </div>
                </blockquote>
                <blockquote class="quote-modern">
                  <span class="icon quote-modern-mark linearicons-quote-open"></span>
                  <div class="quote-modern-text">
                    <p>Just received my beautiful pictures today and I am in awe of how handsome my son looks in the pictures!Just received my beautiful pictures today and I am in awe of how handsome my son looks in the pictures! Thank you so much for such great memories!  I will recommend you to my friends.</p>
                  </div>
                  <span class="icon quote-modern-mark linearicons-quote-close"></span>
                  <div class="quote-modern-meta">
                    <div class="quote-modern-avatar">
                      <div style="width: 96px; height: 96px; overflow: hidden; border-radius: 50%;">
                        <img class="wow slideInLeft" src="images/mah.jpg" alt=""
                             style="width: 100%; height: 100%; object-fit: cover;"/>
                      </div>
                    </div>
                    <div class="quote-modern-info">
                      <cite class="quote-modern-cite">Hadj Sassi Mahdi</cite>
                      <p class="quote-modern-caption">Ensit Student</p>
                    </div>
                  </div>
                </blockquote>
                <blockquote class="quote-modern">
                  <span class="icon quote-modern-mark linearicons-quote-open"></span>
                  <div class="quote-modern-text">
                    <p>Just received my beautiful pictures today and I am in awe of how handsome my son looks in the pictures! Thank you so much for such great memories!  I will recommend you to my friends.</p>
                  </div>
                  <span class="icon quote-modern-mark linearicons-quote-close"></span>
                  <div class="quote-modern-meta">
                    <div class="quote-modern-avatar">
                      <div style="width: 96px; height: 96px; overflow: hidden; border-radius: 50%;">
                        <img class="wow slideInLeft" src="images/mahdi%20hadj%20sassi.jpg" alt=""
                             style="width: 100%; height: 100%; object-fit: cover;"/>
                      </div>
                    </div>
                    <div class="quote-modern-info">
                      <cite class="quote-modern-cite">Hadj Sassi Mahdi</cite>
                      <p class="quote-modern-caption">Ensit Student</p>
                    </div>
                  </div>
                </blockquote>
              </div>
            </div>
            <div class="col-md-10 col-lg-6 wow-outer">
              <div class="thumbnail-video-1 bg-gray-700 wow slideInLeft">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2Fmosaiquefm%2Fvideos%2F282146063297329%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"></iframe>                </div>
                <div class="thumbnail-video__overlay video-overlay" style="background-image: url(images/interview.jpg)">
                  <div class="button-video"></div>
                  <h5>Montrer la vidéo de témoignages</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
          <section class="section section-lg bg-gray-100 text-center">
        <div class="container">
            <h3 class="section-title wow-outer"><span class="wow slideInDown">Les partenaires</span></h3>
            <div class="row row-50" id="partner-slider1">
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft"><a class="post-classic-media" href="#"><img
                            src="images/amiassurances-new-logo.png" width="500"  alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft"><a class="post-classic-media" href="#"><img
                            src="images/download.png" width="500"  alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft"><a class="post-classic-media" href="#"><img
                            src="images/indigo.png" width="500"  alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft"><a class="post-classic-media" href="#"><img
                            src="images/msjus.png" width="500"  alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft"><a class="post-classic-media" href="#"><img
                            src="images/logo-geeks.png" width="500"  alt=""/></a>
                    </article>
                </div>
            </div>'.'
            <div class="row row-50" id="partner-slider2">
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft"><a class="post-classic-media" href="#"><img
                            src="images/mozaique.png" width="500"  alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft"><a class="post-classic-media" href="#"><img
                            src="images/Express.png" width="500"  alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft"><a class="post-classic-media" href="#"><img
                            src="images/diwen.png" width="500"  alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft"><a class="post-classic-media" href="#"><img
                            src="images/Logo_négatif_avec_contour.png" width="500"  alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft"><a class="post-classic-media" href="#"><img
                            src="images/shems-fm.png" width="500"  alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft"><a class="post-classic-media" href="#"><img
                            src="images/Radio_Jeunes.png" width="500"  alt=""/></a>
                    </article>
                </div>
            </div>'.'
            <div class="row row-50" id="partner-slider3">
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft"><a class="post-classic-media" href="#"><img
                            src="images/AS-Marsa.png" width="500"  alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft"><a class="post-classic-media" href="#"><img
                            src="images/kendo.png" width="500"  alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft"><a class="post-classic-media" href="#"><img
                            src="images/FTTT-logo-retina-300x99.png" width="500"  alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft"><a class="post-classic-media" href="#"><img
                            src="images/fta.png" width="500"  alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft"><a class="post-classic-media" href="#"><img
                            src="images/Tunisian_Esports_Federation_darkmode.png" width="500"  alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft"><a class="post-classic-media" href="#"><img
                            src="images/unnamed.png" width="500"  alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft"><a class="post-classic-media" href="#"><img
                            src="images/hippoclub.png" width="500"  alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft"><a class="post-classic-media" href="#"><img
                            src="images/arena.png" width="500"  alt=""/></a>
                    </article>
                </div>
            </div>'.'
            <div class="row row-50" id="partner-slider4">
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft"><a class="post-classic-media" href="#"><img
                            src="images/MondeNews-LAssociation-Tunisienne-des-Villages-dEnfants.png" width="500"  alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft"><a class="post-classic-media" href="#"><img
                            src="images/rose_espoir.png" width="500"  alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft"><a class="post-classic-media" href="#"><img
                            src="images/ASDD.png" width="500"  alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft"><a class="post-classic-media" href="#"><img
                            src="images/downlqsdfqsdfoad.png" width="500"  alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft"><a class="post-classic-media" href="#"><img
                            src="images/atel.png" width="500"  alt=""/></a>
                    </article>
                </div>
                <div class="col-sm-6 col-lg-4 wow-outer">
                    <!-- Post Classic-->
                    <article class="post-classic wow slideInLeft"><a class="post-classic-media" href="#"><img
                            src="images/Logotype_du_ministère_de_l\'éducation_Tunisie.png" width="500"  alt=""/></a>
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
    </section>
      <!-- Page Footer-->
    <footer class="section footer-standard text-justify">
        <div class="footer-standard-main">
            <div class="container">
                <div class="row row-50">
                    <div class="col-lg-4">
                        <div class="inset-right-1">
                            <h4>À propos TSU</h4>
                            <p>Le professeur Mehdi Ben Abdallah a créé Tunis Sports University, une institution avec plus de 45 ans d\'expérience dans les sports civils et plus de 20 ans dans les sports universitaires. L\'Université organise des événements sportifs à caractère social et humanitaire impliquant des étudiants et des enfants défavorisés pour former de futurs citoyens tunisiens responsables et lutter contre l\'extrémisme. </p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-5 col-lg-4">
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
                    <div class="col-sm-6 col-md-7 col-lg-4">
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
    ';
echo'
    <div class="preloader">
      <div class="preloader-logo"><img src="images/loading%20tsu.png" alt="" width="" height=""/>
      </div>
      <div class="preloader-body" >
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
    var buttonAdd = document.getElementById("btnAddEvent");
    var profile = document.getElementById("profile");
    var notconnectede = document.getElementById("notConnected");
    if (user != null && user.split(",")[1].length > 0) {
        var pElement = document.getElementById("nomCourant");
        pElement.textContent = user.split(",")[1];
        connectede.style.display = "block";
        profile.style.display = "block";
        profile.href = "profile.php?mail="+user.split(",")[0];
        notconnectede.style.display = "none";
        buttonAdd.style.display = "block";
    }else if (user == null){
       connectede.style.display = "none";
       profile.style.display = "none";
       notconnectede.style.display = "block";
       buttonAdd.style.display = "none";
    }
</script>
  </body>
</html>
  
  ';
?>