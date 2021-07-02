<?php

$host = "localhost";
$user = "root";
$password = "bwd)C1sHTB4w";
$db = "demo";

mysqli_connect($host, $user, $password);
mysqli_select_db($mysql, $db);

if (isset($_POST['username'])) {
    $uname = $_POST['username'];
    $password = $_POST['password'];

    $sql = "select * from loginform where user='" . $uname . "'AND Pass='" . $password . "' limit 1";

    $result = mysqli_query($mysql, $sql);

    if (mysqli_num_rows($result) == 1) {
        echo "You have successfully logged in";
        exit();
    } else {
        echo "You Have Entered Incorrect Password";
        exit();
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>CodePen - Daily Ui #001</title>
    <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800'>
    <link rel="stylesheet" href="./style.css">

    <link rel="preconnect" href="https://fonts.googleapis.com/%22%3E">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Comfortaa&display=swap" rel="stylesheet">
</head>

<body>
    <!-- <img src="./janko-ferlic-sfL_QOnmy00-unsplash.jpg" style="background-size:cover;"> -->
    <!-- partial:index.partial.html -->
    <div class="container">
        <div class="actions">
            <a href="/login" data-target="login" class="btn nav login modal">Login</a>
            <a href="/register" data-target="register" class="btn nav register modal">Register</a>
        </div>
    </div>
    <div class="modal">
        <div class="content">
            <form action="#" method="POST">
                <a class="nav login" data-target="login">Log In</a>
                <a class="nav register" data-target="register">Register</a>

                <div class="email">
                    <label for="email">Email</label>
                    <input id="email" type="email" name="email" />
                </div>
                <label for="username">Username</label>
                <input id="username" name="username" />
                <label for="password">Password</label>
                <input id="password" type="password" name="password" />
                <button type="submit">
                    <span class="login" value="LOGIN">Log In</span>
                    <span class="register">Register</span>
                    <span class="loading">Loading</span>
                </button>
                <div class="text-center">
                    <a class="whiteBoi" href="/forgot">Forgot Password?</a>
                </div>
            </form>
        </div>
        <div class="success-check"></div>
    </div>
    <!-- partial -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.14/angular.min.js'></script>
    <script src="./script.js"></script>

</body>

</html>