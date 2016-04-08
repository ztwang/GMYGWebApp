<?php
	session_start();
	if(isset($_SESSION['usr_id']))
		header("Location: index.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Tangerine">
    <link rel="icon" href="../../favicon.ico">

    <title>Set up</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/my_css.css" rel="stylesheet">
    <link href="css/signin.css" rel="stylesheet">
</head>
<style>
body {
    width: 100%;
    height: 100%;
    background-image: url('assets/login_bg.png');
}
.setup-main{
	padding-top:37%;
}
.setup-title{
	position:absolute;
	top:50px;
	width:100%;
	text-align: center;
	font-size: 30px;
	color: white;
	font-family: 'Open Sans', sans-serif;
	text-shadow: 0 1px 0.5px #cc2900;
}
.form-header{
	padding-top:30%;
	width:100%;
	padding-left: 10%;
	text-align: left;
	font-size: 25px;
	color: white;
	font-family: Myriad Pro;
	text-shadow: 0 1px 0.5px #000000;
}
</style>
<body>
	<div class="headers">
		<header class="header-au">
			<!--div class="header-left">&lt; left</div-->
			<!--div class="header-right">right &gt;</div-->
		</header>
	</div>
<h1 class="setup-title">GIVE ME YOUR GUN</h1>
<div class="setup-main">
	<form class="form-signin" method="post" action="php/insertUser.php" >
		<h2 class="form-signin-heading">Enter your name: </h2>
		<input class="form-control input-lg" type="text" name="usr_n" placeholder="Your Name"/><br><br>
		<input class="btn btn-lg btn-danger btn-block" type="submit" value="Start!" />
	</form>
</div>
</body>
</html>