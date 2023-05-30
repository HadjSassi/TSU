<?php
$dbh = new PDO('mysql:host=localhost;port=3306;dbname=TSU', 'root', 'Magali_1984');
try {
    $currentEvent = $_GET['event'];
    $stmt = $dbh->prepare("SELECT * FROM event WHERE titleEvent = ?");
    $stmt->execute(array($currentEvent));
    $listeEvent = $stmt->fetchAll();
    $lastEvent = end($listeEvent);
    $date = date('Y-m-d_H:i:s');
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    if (isset($_POST['submit'])) {
        $eventName = $_GET['event'];
        $folderPath = "events/$eventName"; // Assuming that the 'uploads' folder is in the same directory as this PHP script

        $assetFiles = $_FILES['assets']['tmp_name']; // Assuming that 'assets' is the name of the input field that contains the asset files
        if (is_array($assetFiles)) {
            foreach ($assetFiles as $index => $tmpName) {
                $assetPath = "$folderPath/img/asset$date$index.jpg"; // Assuming that you want to save each asset file as 'asset0.jpg', 'asset1.jpg', etc. in the folder
                if (move_uploaded_file($tmpName, $assetPath)) {
                    // File uploaded successfully
                } else {
                    $error = error_get_last();
                    // Handle the error here
                }
            }
        }
        $videoFiles = $_FILES['videos']['tmp_name']; // Add this to handle the 'videos' input field
        if (is_array($videoFiles)) {
            foreach ($videoFiles as $index => $tmpName) {
                $fileExtension = pathinfo($_FILES['videos']['name'][$index], PATHINFO_EXTENSION);
                $videoPath = "$folderPath/vid/video$date$index.$fileExtension"; // Save the video file in the 'vid' folder with the correct extension
                if (move_uploaded_file($tmpName, $videoPath)) {
                    // File uploaded successfully
                } else {
                    $error = error_get_last();
                    // Handle the error here
                }
            }
        }
//        echo '
//            <script>
//            window.location.reload();
//            </script>
//            ';
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
        .close-btn {
            position: absolute;
            bottom: -10px;
            left: -10px;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            font-size: 20px;
            width: 25px;
            height: 25px;
            border-radius: 50%;
            text-align: center;
            line-height: 25px;
            cursor: pointer;
        }
        html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {
            display: block;
        }</style>
</head>
';
    echo '
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
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Acceuil</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="about.php">À propos TSU</a>
                                    </li>
                                    <li class="rd-nav-item active"><a class="rd-nav-link" href="gallery.php">Galerie</a>
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
    echo '
    <!-- Overlapping Screen-->
    <section class="section section-sm">
        <div class="container">
            <div class="row">
                <div class="col col">
                    <h6>
                    ';
    echo $lastEvent['titleEvent'];
    echo '
                    </h6>
                    <div class="row row-30">
                        <div class="col"><img id="affichageEvent" src="" alt=""/>
                        </div>
                        <div class="col text-justify">
                        <a id="modifyEvent" href="modifyEvent.php?eventId=';echo $lastEvent['idEvent'].'" class="mb-2 button button-primary-outline">Modifier Événement</a>
                        <h3>Type Événement : 
                        ';
    echo $lastEvent['typeEvent'];
    echo '</h3>';
    if ($lastEvent['endingDate'] == $lastEvent['startingDate']) {
        echo '<h4>Date : ';
        echo $lastEvent['endingDate'];
        echo '</h4>';
    }
    else {
        echo '<h4>Date Début :';
        echo $lastEvent['startingDate'];
        echo '</h4>';
        echo '<h4>Date Fin :';
        echo $lastEvent['endingDate'];
        echo '</h4>';
    }
    echo '<p>';
    echo $lastEvent['descriptions'];
    echo '                 </p>
                        </div>
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
                <div id="fadit">
                    <form class="mb-5" enctype="multipart/form-data" action="event.php?event=';echo $_GET['event'].'" method="post">
                        <div class="row ml-5">
                            <div class="col">
                                <label for="MultipleFile" class="col">Fichiers Images</label>
                                <input class="form-control col" name="assets[]" accept="image/*" type="file" multiple max="20" id="MultipleFile">
                            </div>
                            <div class="col">
                                <label for="MultipleFileVid" class="col">Fichiers Vidéos</label>
                                <input class="form-control col" name="videos[]" accept="video/mp4" type="file" id="MultipleFileVid">
                            </div>
                        </div>
                        <div class="row">
                            <input class="mx-auto button button-primary-outline" type="submit" name="submit" value="Ajouter des Fichiers">
                        </div>
                        <p class="mx-auto text-danger">
                            Essayez de ne pas télécharger des fichiers trop volumineux en une seule fois, téléchargez les fichiers un par un si nécessaire !
                            <br> Les vidéos doivent être téléchargées une par une.<br>Pour Supprimier il faut contacter l\'administrateur.<br>Cliquer deux fois sur le X pour supprimer un asset.<br>
                        </p>
                    </form>

                        </div>
                    <h3 class="section-title wow-outer"><span class="wow slideInUp" id="EventName"></span></h3>
                    <nav class="navbar navbar-expand-lg navbar-light bg-ligh ">
                        <div class=" navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav mx-auto">
                                <li class="nav-item active" id="liImages" onclick="openImg()">
                                    <h2 class="nav-link" style="cursor:pointer;"><span id="numPic"></span>Images</h2>
                                </li>
                                <li>
                                    <h2 class="nav-link disabled">.</h2>
                                </li>
                                <li class="nav-item" id="liVideos" onclick="openVid()">
                                    <h2 class="nav-link" style="cursor:pointer;"><span id="numVid"></span>Videos</h2>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
';
    echo '
                <div class="col-12 ">
                    <div class="isotope offset-top-2" data-isotope-layout="masonry" data-lightgallery="group"
                         data-lg-thumbnail="false">

                        <div id="image-gallery" class="row row-30"></div>
                        <div class="modal fade" id="videoModal" tabindex="-1"
                             role="dialog" aria-labelledby="videoModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                <div class="modal-content" style="background-color: transparent">

                                    <div class="">
                                        <button type="button" class="close text-white" data-dismiss="modal"
                                                aria-label="Close"
                                                onclick="closeVideo();"
                                        >
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        <video id="thevideo" class="modal-video" width="100%" controls>
                                            <source src="" type="video/mp4">
                                        </video>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                        <div id="video-gallery" class="row row-30"></div>
                        ';
    echo '
                        <script>
                            const urlParams = new URLSearchParams(window.location.search);
                            const eventName = urlParams.get(\'event\');

                            // Update the text content of the HTML element with the extracted value
                            const eventNameElement = document.getElementById(\'EventName\');
                            eventNameElement.textContent = eventName;

                            const imageUrl = `events/${eventName}/${eventName}.jpg`;
                            const eventImageElement = document.getElementById(\'affichageEvent\');
                            eventImageElement.src = imageUrl;
                            
                            // Wait for all the videos to load
                            function openVid() {
                                $(\'#image-gallery\').css(\'display\', \'none\');
                                $(\'#video-gallery\').css(\'display\', \'block\');
                                $(\'#liImages\').removeClass(\'active\');
                                $(\'#liVideos\').addClass(\'active\');

                            }

                            function openImg() {
                                $(\'#video-gallery\').css(\'display\', \'none\');
                                $(\'#image-gallery\').css(\'display\', \'block\');
                                $(\'#liVideos\').removeClass(\'active\');
                                $(\'#liImages\').addClass(\'active\');
                            }

                            function supprimer(path){
                                console.log(path);
                                var xhr = new XMLHttpRequest();
                                xhr.onreadystatechange = function() {
                                    if (xhr.readyState === 4) {
                                        if (xhr.status === 200) {
                                            console.log(xhr.responseText);
                                            console.log("event.php?event=';echo $lastEvent['titleEvent']; echo'");
                                            window.location.href = "/TSU/event.php?event=';echo $lastEvent['titleEvent']; echo'";} else {   
                                            console.error(xhr.statusText);
                                        }
                                    }
                                };
                                xhr.open(\'POST\', \'supprimerAsset.php\', true);
                                xhr.setRequestHeader(\'Content-Type\', \'application/x-www-form-urlencoded\');
                                xhr.send(\'path=\' + encodeURIComponent(path));
                            }
                            
                            function playVideo(videoSrc) {
                                var videoModal = $(\'#videoModal\');
                                videoModal.find(\'.modal-video source\').attr(\'src\', videoSrc);
                                videoModal.modal(\'show\');
                                videoModal.find(\'.modal-video\')[0].load();
                                videoModal.find(\'.modal-video\')[0].play();
                                videoModal.on(\'click\', function (event) {
                                    if (event.target === this) {
                                        closeVideo();
                                    }
                                });
                            }
                            function openPic(imgsrc) {
                                $(\'#modalImage\').attr(\'src\', imgsrc);
                                $(\'#imageModal\').modal(\'show\');

                            }

                            function closeVideo() {
                                var video = $(\'#thevideo\');
                                console.log(video.get(0));
                                video.get(0).pause();
                            }

                            // Wait for all the images to load
                            numberPic = 0
                            numberVid = 0
                            window.onload = () => {
                                // Get the div where you want to add the images
                                const imageGallery = document.getElementById("image-gallery");
                                const videoGallery = document.getElementById("video-gallery");

                                // Fetch a list of all the image files in the events/aviron/img folder
                                fetch(`events/${eventName}/img/`)
                                    .then(response => response.text())
                                    .then(text => {
                                        // Extract the file names from the response HTML
                                        const fileNames = Array.from(text.matchAll(/<a href="(.+?\.(?:jpe?g|png|gif))"/g)).map(match => match[1]);
                                        numberPic = fileNames.length;
                                        // Loop through each image file and create a div with the corresponding HTML code
                                        fileNames.forEach((fileName) => {
                                            const div = document.createElement("div");
                                            div.classList.add("col-12", "col-sm-6", "col-lg-4", "isotope-item");
                                             div.innerHTML = `
    <a href="events/${eventName}/img/${fileName}" data-lightbox="image-gallery">
        <article class="thumbnail-corporate wow fadeIn">
            <img class="thumbnail-corporate-image" src="events/${eventName}/img/${fileName}" alt="" width="370" height="256"/>
            <div class="thumbnail-corporate-caption" style="cursor: pointer">
            </div>
            <div class="thumbnail-corporate-dummy"></div>
        </article>
    </a>';
                                            echo'
    <div class="close-btn" ondblclick="supprimer(\'events/${eventName}/img/${fileName}\')" 
    style=\'display: ${sessionStorage.getItem("user")!== null && sessionStorage.getItem("user").split(",")[2] === "admin" ? "block" : "none"}\'>&times;</div>`;
                                            imageGallery.appendChild(div);

                                        });

                                        // Trigger the Isotope layout
                                        new Isotope(imageGallery, {
                                            itemSelector: \'.isotope-item\',
                                            layoutMode: \'fitRows\'
                                        });
                                        document.getElementById("numPic").textContent = numberPic;
                                    });
                                // Fetch a list of all the video files in the events/aviron/vid folder
                                fetch(`events/${eventName}/vid/`)
                                    .then(response => response.text())
                                    .then(text => {
                                        // Extract the file names from the response HTML
                                        const fileNames = Array.from(text.matchAll(/<a href="(.+?\.(?:mp4|webm))"/g)).map(match => match[1]);
                                        numberVid = fileNames.length;
                                        // Loop through each video file and create a div with the corresponding HTML code
                                        fileNames.forEach((fileName) => {
                                            var fi = fileName.substring(2);
                                            const div = document.createElement("div");
                                            div.classList.add("col-12", "col-sm-6", "col-lg-4", "isotope-item");
                                            div.innerHTML = `
                                        <a class=""  onclick="playVideo(\'events/${eventName}/vid/${fileName}\')" data-lightgallery="item">
                                            <article class="thumbnail-corporate wow fadeIn">
                                                <video class="thumbnail-corporate-image" width="370" height="256" loop muted>
                                                    <source src="events/${eventName}/vid/${fileName}" type="video/mp4">
                                                </video>
                                                <div class="thumbnail-corporate-caption" style="cursor: pointer"></div>
                                                <div class="thumbnail-corporate-dummy"></div>
                                            </article>
                                        </a>
                                            <div class="close-btn" ondblclick="supprimer(\'events/${eventName}/vid/${fi}\')" 
                                            style=\'display: ${sessionStorage.getItem("user") !== null && sessionStorage.getItem("user").split(",")[2] === "admin" ? "block" : "none"}\'
                                            >&times;</div>

                                        `;
                                            videoGallery.appendChild(div);
                                        });

                                        // Trigger the Isotope layout
                                        new Isotope(videoGallery, {
                                            itemSelector: \'.isotope-item\',
                                            layoutMode: \'fitRows\'
                                        });
                                        document.getElementById("numVid").textContent = numberVid;
                                    });
                            };
                        </script>

                    </div>
                </div>
            </div>
        </div>
    </section>
';
    echo '
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
            <div class="footer-standard-aside"><a class="brand" href="index.php"><img
                    src="images/navbarTsu.png" alt="" width="176" height="28"/></a>
                <!-- Rights-->
                <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>Tous les droits sont réservés.</span><span>&nbsp;</span><br
                        class="d-sm-none"/>
                </p>
            </div>
        </div>
    </footer></div>
<!--<div class="preloader">
    <div class="preloader-logo"><img src="images/loading%20tsu.png" alt="" width="" height=""/>
    </div>
    <div class="preloader-body">
        <div id="loadingProgressG" style="background: #dba228;">
            <div class="loadingProgressG" style="background: #138a91" id="loadingProgressG_1"></div>
        </div>
    </div>
</div>-->
<!-- Global Mailform Output-->
<div class="snackbars" id="form-output-global"></div>
<!-- Javascript-->
<script src="js/core.min.js"></script>
<script src="js/script.js"></script>

<script>
    var user = sessionStorage.getItem("user");
    var connectede = document.getElementById("Connected");
    var buttonModify = document.getElementById("modifyEvent");
    var formms = document.getElementById("fadit");
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
            buttonModify.style.display = "block";
        else 
            buttonModify.style.display = "none";
        if (user.split(",")[2] === "admin" ||user.split(",")[2] === "employer"  )
            formms.style.display = "block";
        else 
            formms.style.display = "none";
        
        
    }else if (user == null){
       formms.style.display = "none";
       profile.style.display = "none";
       connectede.style.display = "none";
       notconnectede.style.display = "block";
       buttonModify.style.display = "none";
       formms.style.display = "none";
       
    }
</script>
</body>
</html>
    ';

} catch (PDOException $PDOException) {
    echo $PDOException->getMessage();
}
?>