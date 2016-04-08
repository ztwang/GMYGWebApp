<?php
	session_start();
	if(!isset($_SESSION['usr_id']))
		$_SESSION['usr_id'] = $_GET['u_id'];
	$usr_id = $_SESSION['usr_id'];
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
    <link rel="icon" href="../../../favicon.ico">

    <title>GMYG</title>

    <link href="../../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../../bootstrap/docs/examples/signin/signin.css" rel="stylesheet">
	<link href="../css/my_css.css" rel="stylesheet">
</head>
<body onload="fetchAsked();">
<div class='container-mine'>
	<div class="headers">
		<div class="headers">
		<header class="header-au">
			<div class="header-left"><a href="../"><img style='width: 130px; height:40px' src='../assets/h-discussion.png'></a></div>
			<div class="header-center">History</div>
		</header>
	</div>
	</div>
	<div class="container" style="padding-left:0px">
		<div class="text-content"><p id="fetchAsked"></p></div>
	</div>
</div>
</body>
<script src="../js/asked_q_js.js"></script>
</html>