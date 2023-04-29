<?php

echo '

<script>
var user = sessionStorage.getItem("user");
if(user.split(",")[2] !== "admin"){
    window.location.href="404.php";
}

</script>

';


$errorMessage = "";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_POST['submit'])) {
    $eventName = $_POST['title']; // Assuming that 'title' is the name of the input field that contains the event name
    $eventType = $_POST['type'];
    $stDAte = $_POST['stDate'];
    $enDate = $_POST['enDate'];
    $description = $_POST['descriptionEvent'];
    if ($enDate == null || strtotime($stDAte) <= strtotime($enDate)) {
        $folderPath = "events/$eventName";
        if (is_dir($folderPath)) {
            // the folder already exists, show an error message to the user
            $errorMessage = "Event name Already Exist ! ";
        } else {
            $dbh = new PDO('mysql:host=localhost;port=3306;dbname=TSU', 'root', 'Magali_1984');
            try {
                $i = 0;
                $listeEvent = [];
                $stmt = $dbh->prepare("Insert into event(titleEvent, typeEvent, descriptions, startingDate, endingDate) values(?,?,?,?,?)");
                $stmt->bindParam(1, $eventName);
                $stmt->bindParam(2, $eventType);
                $stmt->bindParam(3, $description);
                $stmt->bindParam(4, $stDAte);
                if ($enDate != null)
                    $stmt->bindParam(5, $enDate);
                else
                    $stmt->bindParam(5, $stDAte);
                $stmt->execute();
                // Assuming that the 'uploads' folder is in the same directory as this PHP script
                mkdir($folderPath); // Create the folder
                chmod($folderPath, 0777);
                mkdir("$folderPath/img"); // Create the 'img' folder inside the event folder
                mkdir("$folderPath/vid"); // Create the 'vid' folder inside the event folder

                // Move the uploaded poster file to the folder
                $posterFile = $_FILES['poster']['tmp_name']; // Assuming that 'poster' is the name of the input field that contains the poster file
                $posterPath = "$folderPath/$eventName.jpg"; // Assuming that you want to save the poster file as 'poster.jpg' in the folder
                move_uploaded_file($posterFile, $posterPath); // Move the file to the folder
                // Move the uploaded asset files to the folder
                /*$assetFiles = $_FILES['assets']['tmp_name']; // Assuming that 'assets' is the name of the input field that contains the asset files
                if (is_array($assetFiles)) {
                    foreach ($assetFiles as $index => $tmpName) {
                        $assetPath = "$folderPath/img/asset$index.jpg"; // Assuming that you want to save each asset file as 'asset0.jpg', 'asset1.jpg', etc. in the folder
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
                        $videoPath = "$folderPath/vid/video$index.$fileExtension"; // Save the video file in the 'vid' folder with the correct extension
                        if (move_uploaded_file($tmpName, $videoPath)) {
                            // File uploaded successfully
                        } else {
                            $error = error_get_last();
                            // Handle the error here
                        }
                    }
                }*/
                echo '
            <script>
            window.location.href="http://localhost/TSU/gallery.php";
            </script>
            ';
            } catch (PDOException $PDOException) {
                echo $PDOException->getMessage();
            }
        }
    } else {
        $errorMessage = "Ending Date can't be before the Starting Date!<br>Please get Back And start from the first.";
    }
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
</head>';
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
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Home</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="about.php">About TSU</a>
                                    </li>
                                    <li class="rd-nav-item active"><a class="rd-nav-link" href="gallery.php">Gallery</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="contacts.php">Contacts</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- RD Navbar Search-->
                            <div class="rd-navbar-search">
                                <a class="nav-icon" href="#">
                                    <span class="ml-xl-2 mt-lg-2 icon icon-md mdi mdi-settings text-gray-700"></span>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    ';
echo '
    <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(images/AddEvent3.jpg);">
        <div class="breadcrumbs-custom-inner">
            <div class="container breadcrumbs-custom-container">
                <div class="breadcrumbs-custom-main">
                    <h6 class="breadcrumbs-custom-subtitle title-decorated">Gallery</h6>
                    <h1 class="breadcrumbs-custom-title">Add Event</h1>
                </div>
                <ul class="breadcrumbs-custom-path">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Add Event</li>
                </ul>
            </div>
        </div>
    </section>

    <!--Add Event Form-->
    <section class="section section-lg bg-default">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">';
if (strlen($errorMessage) != 0) {
    echo "<h3 class='text-center mx-auto' style='color: red'>$errorMessage</h3>";
    echo "<button class=\"mx-auto button button-primary-outline\" onclick='window.location.href=\"addEvent.php\"'; >Recreate the Event</button>";
}
else {
    echo '
                    <h3 class="" style="margin-top: -5%; margin-bottom: 5%;">Please Fill This Form!</h3><br>
                    <form action="addEvent.php" method="post" enctype="multipart/form-data"
                          class="ml-xl-5 mr-xl-5 px-5">
                        <div class="row">
                            <label class="col">Event Title</label>
                            <input class="col form-input" required name="title"
                                   placeholder="Please write the event name here!"
                                   type="text">
                        </div>
                        <div class="row">
                            <label class="col">Event Type</label>
                            <input class="col form-input" required name="type"
                                   placeholder="Please write the event type here!"
                                   type="text">
                        </div>
                        <div class="row">
                            <label class="col">Starting Date</label>
                            <input class="col form-input" required name="stDate" type="date">
                        </div>
                        <div class="row">
                            <label class="col">Ending Date</label>
                            <input class="col form-input" name="enDate" type="date">
                        </div>
                        <div class="row">
                            <label class="col">Event Description</label>
                            <textarea class="col form-input" name="descriptionEvent"
                                      placeholder="Please Write the Event Description here !" rows="5"></textarea>
                        </div>
                        <div class="mt-5">
                            <div class="row">
                                <label for="DefaultFile" class="col">File Poster</label>
                                <input class="form-control col" required accept="image/*" name="poster" type="file"
                                       id="DefaultFile">
                            </div>
                            <!--<div class="col">
                                <label for="MultipleFile" class="col">File Pictures</label>
                                <input class="form-control col" name="assets[]" accept="image/*" type="file" multiple
                                       id="MultipleFile">
                            </div>
                            <div class="col">
                                <label for="MultipleFileVid" class="col">File Videos</label>
                                <input class="form-control col" name="videos[]" accept="video/mp4" type="file" multiple
                                       id="MultipleFileVid">
                            </div>-->
                        </div>
                        <div class="row">
                            <input class="mx-auto button button-primary-outline" type="submit" name="submit"
                                   value="Create Event">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
';}
    echo '

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
</body>
</html>
';
?>