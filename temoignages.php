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
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/css/lightbox.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js"></script>
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
                                    
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="about.php">À propos</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="program.php">Programme</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="gallery.php">Galerie</a>
                                    </li>
                                    <li class="rd-nav-item active"><a class="rd-nav-link" href="temoignages.php">Témoignages</a>
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
      ';
echo'
      <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(images/115.jpg);">
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h6 class="breadcrumbs-custom-subtitle title-decorated">-</h6>
              <h1 class="breadcrumbs-custom-title">Témoignages</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
            <li></li>
              <li><a href="/">Acceuil</a></li>
            </ul>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-default">
        <div class="container">
            <div class="row row-50">
                <div class="col-12 ">
                    <div class="isotope offset-top-2" data-isotope-layout="masonry" data-lightgallery="group"
                         data-lg-thumbnail="false">
                        <div id="image-gallery" class="row row-30"></div>
                        <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="" style="background-color: transparent">
                                    <div class="">
                                        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <img id="modalImage" src="" alt="Image Description">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>                            
                            

                            
                            function openPic(imgsrc) {
                                $(\'#modalImage\').attr(\'src\', imgsrc);
                                $(\'#imageModal\').modal(\'show\');

                            }


                            // Wait for all the images to load
                            numberPic = 0
                            window.onload = () => {
                                // Get the div where you want to add the images
                                const imageGallery = document.getElementById("image-gallery");

                                // Fetch a list of all the image files in the events/aviron/img folder
                                fetch(`images/tem`)
                                    .then(response => response.text())
                                    .then(text => {
                                        // Extract the file names from the response HTML
                                        const fileNames = Array.from(text.matchAll(/<a href="(.+?\.(?:jpe?g|png|gif))"/g)).map(match => match[1]).filter(fileName => !fileName.includes(\'../\') && !fileName.includes(\'?C=\'));
                                        numberPic = fileNames.length;
                                        // Loop through each image file and create a div with the corresponding HTML code
                                        fileNames.forEach((fileName) => {
                                            const div = document.createElement("div");
                                            div.classList.add("col-12", "col-sm-6", "col-lg-4", "isotope-item");
                                             div.innerHTML = `
                                                <a href="images/tem/${fileName}" data-lightbox="image-gallery">
                                                    <article class="thumbnail-corporate wow fadeIn">
                                                        <img class="thumbnail-corporate-image" src="images/tem/${fileName}" alt="" width="370" height="256"/>
                                                        <div class="thumbnail-corporate-caption" style="cursor: pointer">
                                                        </div>
                                                        <div class="thumbnail-corporate-dummy"></div>
                                                    </article>
                                                </a>`
                                                imageGallery.appendChild(div);});
                                        // Trigger the Isotope layout
                                        new Isotope(imageGallery, {
                                            itemSelector: \'.isotope-item\',
                                            layoutMode: \'fitRows\'
                                        });
                                        document.getElementById("numPic").textContent = numberPic;
                                    });
                            };
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </section>
      <!-- Page Footer-->
      ';echo'
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
</html>';
?>