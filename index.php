<?php
	session_start();
	if(!isset($_SESSION['usr_id'])){
		if(!is_null($_GET['u_id'])){
			$_SESSION['usr_id'] = $_GET['u_id'];
			}
		else
			header('Location: setup.php');
		
	}
	$usr_id = $_SESSION['usr_id'];
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
    <link href="../bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<link href="../bootstrap/docs/examples/signin/signin.css" rel="stylesheet">
	<link href="css/my_css.css" rel="stylesheet">
	<link rel="stylesheet" href="alert/serversweetalert.css">
	<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
	<title>GMYG</title>
</head>

<body onload="indexOnLoad();">
<ul class="examples">
</ul>
<div class='container-mine'>
	<div class="headers">
		<header class="header-au">
			<div class="header-left"><a href"#"><img style='width: 113px; height:40px' src='assets/h-story.png'></a></div>
			<div class="header-right"><a href="history/"><img style='width: 113px; height:40px' src='assets/h-history.png'></a></a></div>
		</header>
	</div>
		<div class="panel-body show-ques">
    	    <table class='table table-hover'>
       		 	<thead>
        		<tr>
	        		<th class='content-td' style='font-size:20px'>Linda Asks</th>
   		     		<th class='v-btn-td'>Votes</th>
   		     		<th class='v-btn-td'></th>
   		     	</tr>
   	   		  	</thead>
   	   			<tbody class='text-content' id='allQues'>
        		<tbody>
        	</table>
    	</div>
	<div class="panel-footer f-bottom">
		<div class="forms">
			<form method="post" action="php/questions.php">
  				<div class="input-group">
  					<input id="btn-input" type="text" name="ques" class="form-control input-lg" placeholder="e.g. Why do you have a gun?" required />
     				<span class="input-group-btn">
     					<input class="btn btn-lg btn-danger btn-block" type="submit" value="send" name="askQ" />
     				</span>
  				</div>
			</div>
		</form>
	</div>
</div>
</body>
<script src="js/index_js.js"></script>
<script src="js/jquery.min.js"></script>
</html>