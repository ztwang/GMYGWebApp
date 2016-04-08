<?php
	session_start();
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
	<link href='https://fonts.googleapis.com/css?family=Inconsolata:700' rel='stylesheet' type='text/css'>
    <title>Give me your gun</title>

    <!-- Bootstrap core CSS -->
    <link href="../../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!--link href="../../bootstrap/docs/examples/signin/signin.css" rel="stylesheet"-->
	<link href="../css/projector_css.css" rel="stylesheet">
  </head>
  <style>
  	h4{
  		font-family: 'Inconsolata', serif;
  		font-size: 30px;
  	}
  </style>
<body onload="updateContents();">
<section class="div-container">
	<div class="div-responses" id="div-resp-id">
		<div class="div-content">
			<h4 style="text-align: center">Link: http://goo.gl/N0a0EV</h4>
			<p class='proj-header'>Questions</p>
			 <p id="timer_display"></p>
			<p id="allQues"></p>
		</div>
	</div>
	<div class="div-facts">
		<div class='div-content' id="div-fact-id">
			<h4 style="text-align: center">Link: http://goo.gl/N0a0EV</h4>
			<p class='proj-header'>Achievements</p>
			<p id='facts-content'></p>
		</div>
	</div>
</section>
</body>
<script src="../js/responses_js.js"></script>
<script src="../js/shown_js.js"></script>
<script src="../js/projector_timer.js"></script>
</html>