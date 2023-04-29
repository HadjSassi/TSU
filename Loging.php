<?php

use Model\Users;

$signupmessage = "Sign Up";
$signinmessage = "Log In";
$dbh = new PDO('mysql:host=localhost;port=3306;dbname=TSU', 'root', 'Magali_1984');

if (isset($_POST['login_submit'])) {
    try {
        $exists = $dbh->prepare("select pass,username,functionality from users where mailUser = ?");
        $exists->bindParam(1, $_POST['email']);
        $exists->execute();
        $result = $exists->fetch();
        $thePass = $result[0];
        $usernames = "$result[1]";
        $function = $result[2];
        if ($thePass == '') {
            $signinmessage = "Account Not Found";
        } else if ($thePass != $_POST['pswd']) {
            $signinmessage = "Wrong Password";
        } else {
            $user = [$_POST['email'],$usernames,$function];
            $user_json = json_encode($user);
            echo "$user_json";
            echo '
            <script>
            sessionStorage.setItem("user",'.$user_json.');   
            window.location.href="http://localhost/TSU/";
            </script>
            ';
//            $_SESSION['user'] = serialize($user);
//            $serializedObj = $_SESSION['user'];
//            $myObj = unserialize($serializedObj);
//            header("Location: http://localhost/TSU/");
//            exit;
        }
    } catch (PDOException $exception) {
        echo "<h1 style='color: red'>ERROR Connection : " . $exception->getMessage() . "</h1>";
        exit();
    }
} elseif (isset($_POST['signup_submit'])) {
    try {
        $exists = $dbh->prepare("select count(*) from users where mailUser = ?");
        $exists->bindParam(1, $_POST['email']);
        $exists->execute();
        $isExists = ($exists->fetch()[0] != 0);
        if ($isExists) {
            $signupmessage = "Account Exist";
        } else {
            $stmt = $dbh->prepare("Insert into users(mailUser,username,pass,functionality) values(?,?,?,'visitor')");
            $stmt->bindParam(1, $_POST['email']);
            $stmt->bindParam(2, $_POST['txt']);
            $stmt->bindParam(3, $_POST['pswd']);
            $stmt->execute();
            $user = [$_POST['email'],$_POST['txt'],"visitor"];
            $user_json = json_encode($user);
            echo '
            <script>
            sessionStorage.setItem("user",' . $user_json . ');      
            window.location.href="http://localhost/TSU/";

            </script>
            ';
//            header("Location: http://localhost/TSU/");
//            exit;
        }
    } catch (PDOException $exception) {
        echo "<h1 style='color: red'>ERROR Connection : " . $exception->getMessage() . "</h1>";
        exit();
    }
}

echo '<!DOCTYPE html>
<html>
<head>
    <title>TSU</title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport"
          content="width=device-width height=device-height initial-scale=1.0 maximum-scale=1.0 user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon%20(1).ico" type="image/x-icon">
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: "Jost", sans-serif;
            background-image: url("images/bg.jpg");
            position: relative;
            /*background: linear-gradient(to bottom, #0f0c29, #302b63, #24243e);*/
        }

        body::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
        }

        .main {
            width: 350px;
            height: 500px;
            background: red;
            overflow: hidden;
            background: url("https://doc-08-2c-docs.googleusercontent.com/docs/securesc/68c90smiglihng9534mvqmq1946dmis5/fo0picsp1nhiucmc0l25s29respgpr4j/1631524275000/03522360960922298374/03522360960922298374/1Sx0jhdpEpnNIydS4rnN4kHSJtU1EyWka?e=view&authuser=0&nonce=gcrocepgbb17m&user=03522360960922298374&hash=tfhgbs86ka6divo3llbvp93mg4csvb38") no-repeat center/ cover;
            border-radius: 10px;
            box-shadow: 5px 20px 50px #000;
        }

        #chk {
            display: none;
        }

        .signup {
            position: relative;
            width: 100%;
            height: 100%;
        }

        label {
            color: #fff;
            font-size: 2.3em;
            justify-content: center;
            display: flex;
            margin: 60px;
            font-weight: bold;
            cursor: pointer;
            transition: .5s ease-in-out;
        }

        input {
            width: 60%;
            height: 20px;
            background: #e0dede;
            justify-content: center;
            display: flex;
            margin: 20px auto;
            padding: 10px;
            border: none;
            outline: none;
            border-radius: 5px;
        }

        .butt, button {
            width: 60%;
            height: 40px;
            margin: 10px auto;
            justify-content: center;
            display: block;
            color: #000000;
            background: #ebb85e;
            font-size: 1em;
            font-weight: bold;
            margin-top: 20px;
            outline: none;
            border: none;
            border-radius: 5px;
            transition: .2s ease-in;
            cursor: pointer;
        }

        .butt:hover, button:hover {
            background: #cc9740;
        }

        .login {
            height: 460px;
            background: #eee;
            border-radius: 60% / 10%;
            transform: translateY(-180px);
            transition: .8s ease-in-out;
        }

        .login label {
            color: #9f7727;
            transform: scale(.6);
        }

        #chk:checked ~ .login {
            transform: translateY(-500px);
        }

        #chk:checked ~ .login label {
            transform: scale(1);
        }

        #chk:checked ~ .signup label {
            transform: scale(.6);
        }
    </style>
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>

<div class="main">
    <input type="checkbox" id="chk" aria-hidden="true">

    <div class="signup">
        <form action="Loging.php" method="post">
            <label for="chk" aria-hidden="true">' . $signupmessage . '</label>
            <input type="text" name="txt" placeholder="User name" required="">
            <input type="email" name="email" placeholder="Email" required="">
            <input type="password" name="pswd" placeholder="Password" required="">
            <input class="butt" type="submit" name="signup_submit" value="Sign Up"/>
        </form>
    </div>

    <div class="login">
        <form action="Loging.php" method="post">
            <label for="chk" aria-hidden="true">' . $signinmessage . '</label>
            <input type="email" name="email" placeholder="Email" required="">
            <input type="password" name="pswd" placeholder="Password" required="">
            <input class="butt" type="submit" name="login_submit" value="Log In"/>
        </form>
    </div>
</div>
<script>
    // Check if the URL contains "login"
    if (window.location.href.indexOf("login") > -1) {
        // If the URL contains "login", check the checkbox
        document.getElementById("chk").checked = true;
    }
</script>
</body>
</html>';


?>