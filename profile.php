<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
echo '
<script>
var user = sessionStorage.getItem("user");
if(user === null ||user.split(",")[1].length === 0){
    window.location.href="404.php";
}
</script>

';
$dbh = new PDO('mysql:host=localhost;port=3306;dbname=TSU', 'root', 'Magali_1984');
try {
    $mail = $_GET['mail'];
    $stmt = $dbh->prepare("SELECT * FROM users WHERE mailUser = ?");
    $stmt->execute(array($mail));
    $User = $stmt->fetchAll();
    $User = end($User);
    try{
        if (isset($_POST['user'])) {
            $username = $_POST['username'];
            $firstName = $_POST['firstNme'];
            $lastName = $_POST['lastNme'];
            $phone = $_POST['phonee'];
            $job = $_POST['functionss'];
            $pass = $_POST['passs'];
            $email = $_GET['mail'];

            $sql = "UPDATE users SET 
          username = '$username', 
          firstName = '$firstName',
          lastName = '$lastName',
          tel = '$phone',
          job = '$job',
          pass = '$pass'
        WHERE mailUser = '$email'";

            $stmt = $dbh->prepare($sql);
            $stmt->execute();
            $user = [$email,$username,$User['functionality']];
            $user_json = json_encode($user);
            echo '
            <script>
            sessionStorage.setItem("user",' . $user_json . ');      
            window.location.href="http://localhost/TSU/";
            </script>
            ';
        }
    }catch (PDOException $PDOException){
        echo $PDOException->getMessage();
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
                                <a class="dropdown-item" id="profile" style="color: #505050;" href="profile.php">My Profile</a>
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
    echo '
      <!-- Breadcrumbs-->
      <section class="breadcrumbs-custom bg-image context-dark" style="background-image: url(images/prof.jpg);">
        <div class="breadcrumbs-custom-inner">
          <div class="container breadcrumbs-custom-container">
            <div class="breadcrumbs-custom-main">
              <h6 class="breadcrumbs-custom-subtitle title-decorated">Settings</h6>
              <h1 class="breadcrumbs-custom-title">My Profile</h1>
            </div>
            <ul class="breadcrumbs-custom-path">
              <li><a href="index.php">Settings</a></li>
              <li class="active">My Profile</li>
            </ul>
          </div>
        </div>
      </section>
      <section class="section bg-gray-100">
        <div class="range text-center">
          <div class="cell align-self-center container">
            <div class="row">
              <div class="col cell-inner">
                <div class="section-lg">
                  <h3 class="wow-outer"><span class="wow slideInDown">Hello ';
    echo $User['username'];
    echo '!</span></h3>

                  <!-- RD Mailform-->
                  <form class="rd-form " action="profile.php?mail='; echo $User['mailUser'];  echo '" method="post" >
                    <div class="row row-10">
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-user-name">User Name</label>
                          <input class="form-input" id="contact-user-name" name="username" onkeyup="userNames()" required value="';     echo $User['username'];echo '" type="text" data-constraints="@Required">
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-email">E-mail <em>(Contact Administrator to modify it)</em></label>
                          <input class="form-input" id="contact-email"  name="email" type="email" disabled  data-constraints="@Required @Email" value="'; echo $User['mailUser'];  echo '">
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-first-name">First Name</label>
                          <input class="form-input" id="contact-first-name" name="firstNme" onkeyup="firstNames()" required  type="text"  data-constraints="@Required" value="'; echo $User['firstName']; echo '">
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-last-name">Last Name</label>
                          <input class="form-input" id="contact-last-name" name="lastNme" value="'; echo $User['lastName']; echo '" type="text"  >
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-phone">Phone</label>
                          <input class="form-input" id="contact-phone" onkeyup="phones()" name="phonee" required type="text"  data-constraints="@Required @PhoneNumber"  value ='; echo $User['tel'];  echo ' >
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-function">Function</label>
                          <input class="form-input" name="functionss" id="contact-function" type="text" value ='; echo $User['job']; echo '  >
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-pass">Password</label>
                          <input class="form-input" name="passs" id="contact-pass" onkeyup="passsed()" type="password" value="';echo $User['pass']; echo '"  data-constraints="@Required">
                        </div>
                      </div>
                      <div class="col-md-6 wow-outer">
                        <div class="form-wrap wow fadeSlideInUp">
                          <label class="form-label-outside" for="contact-pass2">Confirmation Password </label>
                          <input class="form-input" id="contact-pass2" placeholder="Please Confirm the password!" type="password" onkeyup="passsed()" name="phone" data-constraints="@Required">
                        </div>
                      </div>
                    </div>
                    <div class="text-center mt-5">
                        <h5 class="wow slideInUp text-danger mb-3" id="error"></h5>
                        <div class="wow">
                            <input type="submit" class="btn button-primary wow slideInUp"  value="Update Profile" id="usersubmit" name="user"/> 
                        </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="cell-xl-5 height-fill wow fadeIn">
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
    echo '
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
    <!-- Javascript-->
    <script src="js/core.min.js"></script>
    <script src="js/script.js"></script>
    
<script>
var diUserName = false;
var difirName = false;
var diphone = false;
var dipass = true;
var disabledd = document.getElementById("usersubmit");
disabledd.disabled = (diUserName || difirName || diphone || dipass);
function userNames() {
    var contact = document.getElementById("contact-user-name");
    diUserName = (contact.value.length === 0);
    disabledd.disabled = diUserName || difirName || diphone || dipass;
}

function firstNames() {
    var contact = document.getElementById("contact-first-name");
    difirName = (contact.value.length === 0);
    disabledd.disabled = (diUserName || difirName || diphone || dipass);
}

function phones() {
    var contact = document.getElementById("contact-phone");
    diphone = (contact.value.length === 0);
    disabledd.disabled = (diUserName || difirName || diphone || dipass);
}

function passsed() {
    var contact = document.getElementById("contact-pass");
    var contact2 = document.getElementById("contact-pass2");
    dipass = (contact.value !== contact2.value);
    if (dipass){
        document.getElementById("error").textContent = "Please Verify your password!";
    } else {
        document.getElementById("error").textContent = "";
    }
    disabledd.disabled = (diUserName || difirName || diphone || dipass);
}

</script>
<script>
    var user = sessionStorage.getItem("user");
    var connectede = document.getElementById("Connected");
    var profile = document.getElementById("profile");
    var notconnectede = document.getElementById("notConnected");
    if (user != null && user.split(",")[1].length > 0) {
        var pElement = document.getElementById("nomCourant");
        pElement.textContent = user.split(",")[1];
        connectede.style.display = "block";
        profile.style.display = "block";
        profile.href = "profile.php?mail="+user.split(",")[0];
        notconnectede.style.display = "none";
    }else if (user == null){
       connectede.style.display = "none";
       profile.style.display = "none";
       notconnectede.style.display = "block";
    }
</script>
  </body>
</html>';
} catch (PDOException $PDOException) {
    echo $PDOException->getMessage();
}
?>