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
                  <!-- RD Navbar Brand--><a class="rd-navbar-brand" href="index.php"><img
                        src="images/navbarTsu.png" alt="" width="176" height="28"/></a>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap" id="rd-navbar-nav-wrap-1">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item "><a class="rd-nav-link" href="index.php">Home</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="about.php">About TSU</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="gallery.php">Gallery</a>
                      </li>
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="contacts.html">Contacts</a>
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
                                    <a class="dropdown-item" href="Loging.php?login">Sign In</a>
                                    <a class="dropdown-item" href="Loging.php">Sign Up</a>
                                </div>
                                    <a class="dropdown-item"  id="Connected"
                                    onclick="sessionStorage.removeItem(\'user\'); window.location.reload();"
                                    style="cursor:pointer;">Log out</a>
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
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(images/couverturecontact.jpg);">
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h6 class="breadcrumbs-custom-subtitle title-decorated">Contacts</h6>
              <h1 class="breadcrumbs-custom-title">Contacts</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.php">Home</a></li>
              <li class="active">Contacts</li>
            </ul>
          </div>
        </div>
      </section>
      <section class="section section-sm">
        <div class="container">
          <div class="layout-bordered">
            <div class="layout-bordered-item wow-outer">
              <div class="layout-bordered-item-inner wow slideInUp">
                <div class="icon icon-lg mdi mdi-phone text-primary"></div>
                <ul class="list-0">
                  <li><a class="link-default" href="tel:#">+216 22 545 454</a></li>
                </ul>
              </div>
            </div>
            <div class="layout-bordered-item wow-outer">
              <div class="layout-bordered-item-inner wow slideInUp">
                <div class="icon icon-lg mdi mdi-email text-primary"></div><a class="link-default" href="mailto:#">benabdallahmehdi1920@gmail.com</a>
              </div>
            </div>
            <div class="layout-bordered-item wow-outer">
              <div class="layout-bordered-item-inner wow slideInUp">
                <div class="icon icon-lg mdi mdi-map-marker text-primary"></div><a class="link-default" href="#">ENSIT
                Avenue Taha Hussein Montfleury, 1008 Tunis</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section bg-gray-100">
        <div class="range justify-content-xl-between">
          <div class="cell-xl-6 align-self-center container">
            <div class="row">
              <div class="col-lg-9 cell-inner">
                <div class="section-lg">
                  <h3 class="wow-outer"><span class="wow slideInDown">Contact Us</span></h3>
                  <!-- RD Mailform-->
                  <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                    <div class="row row-10">
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-first-name">First Name</label>
                          <input class="form-input" id="contact-first-name" type="text" name="name" data-constraints="@Required">
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-last-name">Last Name</label>
                          <input class="form-input" id="contact-last-name" type="text" name="name" data-constraints="@Required">
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-email">E-mail</label>
                          <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Required @Email">
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-phone">Phone</label>
                          <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints="@Required @PhoneNumber">
                        </div>
                      </div>
                      <div class="col-12 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-message">Your Message</label>
                          <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="group group-middle">
                      <div class="wow-outer">
                        <button class="button button-primary button-winona wow slideInRight" type="submit">Send Message</button>
                      </div>
                      <p>or use</p>
                      <div class="wow-outer"><a class="button button-primary-outline button-icon button-icon-left button-winona wow slideInLeft" href="#"><span class="icon text-primary mdi mdi-whatsapp"></span>Whatsapp</a></div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="cell-xl-5 height-fill wow fadeIn">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3195.41859161098!2d10.175937224651019!3d36.78451297225153!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12fd340576fc1a05%3A0x25fc1aa869f8cfb6!2s%C3%89cole%20nationale%20sup%C3%A9rieure%20d&#39;ing%C3%A9nieurs%20de%20Tunis%20(ENSIT)!5e0!3m2!1sen!2stn!4v1681577032192!5m2!1sen!2stn" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>          </div>
        </div>
      </section>
      <!-- Page Footer-->
      <footer class="section footer-standard text-justify">
        <div class="footer-standard-main">
          <div class="container">
            <div class="row row-50">
              <div class="col-lg-4">
                <div class="inset-right-1">
                  <h4>About TSU</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consequuntur, dignissimos
                    doloribus, ipsum labore magni maiores necessitatibus non omnis placeat ratione sapiente
                    suscipit velit voluptatem? Ex iusto natus qui ut veniam.</p>
                </div>
              </div>
              <div class="col-sm-6 col-md-5 col-lg-4">
                <div class="box-1">
                  <h4>Contact Information</h4>
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
                <h4>Powered By Geeks Ensit Club</h4>
                <div class="">
                  <a href="https://www.ensitgeeksclub.com" style="float: left;" target="_blank"><img
                          src="images/logo-geeks.png" class="" width="100" alt=""></a>
                  <!-- RD Mailform-->
                  <p>ENSIT Geeks Club was founded in 2021 by Nizar Essid at the National High School of Tunis.
                    It brings together people interested in sharing their knowledge and helping each other
                    in IT. It welcomes both beginners and experts. It aims to deepen your knowledge
                    necessary in IT to be able to succeed in the professional field and allow students to
                    use today\'s technology to prepare for the future </p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="footer-standard-aside"><a class="brand" href="index.php"><img
                  src="images/navbarTsu.png" alt="" width="176" height="28"/></a>
            <!-- Rights-->
            <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>All Rights Reserved.</span><span>&nbsp;</span><br
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
    var notconnectede = document.getElementById("notConnected");
    if (user != null && user.split(",")[1].length > 0) {
        var pElement = document.getElementById("nomCourant");
        pElement.textContent = user.split(",")[1];
        connectede.style.display = "block";
        notconnectede.style.display = "none";
        buttonAdd.style.display = "block";
    }else if (user == null){
       connectede.style.display = "none";
       notconnectede.style.display = "block";
       buttonAdd.style.display = "none";
    }
</script>
  </body>
</html>';
?>