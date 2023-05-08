<?php


$dbh = new PDO('mysql:host=localhost;port=3306;dbname=TSU', 'root', 'Magali_1984');
try {
    $i = 0;
    $listeEvent = [];
    $sql = "select * from event";
    foreach ($dbh->query($sql) as $item) {
        $listeEvent[$i++] = $item;
    }


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
<div class="page">
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
                                    <li class="rd-nav-item active"><a class="rd-nav-link"
                                                                      href="gallery.php">Gallery</a>
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
                                    <a class="dropdown-item" href="Loging.php?login">Sign In</a>
                                    <a class="dropdown-item" href="Loging.php">Sign Up</a>
                                </div>
                                <a class="dropdown-item" id="profile"  style="color: #505050;" href="profile.php">My Profile</a>
                                    <a class="dropdown-item"  id="Connected"
                                    onclick="sessionStorage.removeItem(\'user\'); window.location.reload();"
                                    style="cursor:pointer;">Log out</a>
                                </div>
                            </div>
                        </div>

                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    ';
    echo '
    <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(images/equi.jpg);">
        <div class="breadcrumbs-custom-inner">
            <div class="container breadcrumbs-custom-container">
                <div class="breadcrumbs-custom-main">
                    <h6 class="breadcrumbs-custom-subtitle title-decorated">Gallery</h6>
                    <h1 class="breadcrumbs-custom-title">Gallery</h1>
                </div>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Gallery</li>
                </ul>
            </div>
        </div>
    </section>
';
    echo '
    <section class="section section-lg bg-default">
        <button class="mx-auto btn btn-primary" onclick="window.location.href=\'http://localhost/TSU/addEvent.php\';" id="btnAddEvent">Add Event</button>
        <div class="container">
            <div class="row row-50">
                <div class="col-12 text-center">
                    <h3 class="section-title wow-outer"><span class="wow slideInUp">TSU Event</span></h3>
                </div>
                <div class="col-12 isotope-wrap">
                    <div class="isotope offset-top-2" data-isotope-layout="masonry" data-lightgallery="group"
                         data-lg-thumbnail="false">
                        <div class="row row-30">
                        ';

    foreach ($listeEvent as $item) {
        echo '
        <div class="col-12 col-sm-6 col-lg-4 isotope-item wow-outer">
            <!-- Thumbnail Corporate-->
            <article class="thumbnail-corporate  wow slideInDown" style="cursor: pointer;" onclick=\'window.location.href = `event.php?event=';
            echo $item['titleEvent'];
            echo '`;\'><img
                    class="thumbnail-corporate-image" src="events/';
                    echo $item['titleEvent'].'/'.$item['titleEvent'].'.jpg"';
                    echo '
                    alt="" width="370" height="256"/>
                <div class="thumbnail-corporate-caption">
                    <p class="thumbnail-corporate-title"><a href="#">';
                    echo $item['titleEvent'];
                    echo '
                    </a></p>
                    <h5>';
                    echo 'Event Type : '.$item['typeEvent'].'<br>';
                    echo 'Date : '.$item['startingDate'].'<br>';
                    echo'
                    </p>
                </div>
                <div class="thumbnail-corporate-dummy"></div>
            </article>
        </div>
        ';
    }

    echo '
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
';
    echo '
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
</body>
</html>
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
        if (user.split(",")[2] === "admin")
            buttonAdd.style.display = "block";
        else 
            buttonAdd.style.display = "none";
        
    }else if (user == null){
       connectede.style.display = "none";
       profile.style.display = "none";
       notconnectede.style.display = "block";
       buttonAdd.style.display = "none";
    }
</script>
';

} catch (PDOException $PDOException) {
    echo $PDOException->getMessage();
}
?>