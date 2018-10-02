<?php session_start();
unset($_SESSION['username']);
?>
<title>LOGOUT | B-SPORT</title>
<link rel="shortcut icon" href="b.png" />
 <style type="text/css">
 	.form {
 		padding: 1em;
		margin: 2em auto;
  		width: 30em;
  		background: #fff;
  		border-radius: 3px;
  		border-webkit-box-shadow: 0 0 13px 3px rgba(0,0,0,.5);
    	box-shadow: 0 0 40px 5px rgba(0,0,0,.5);
 	}	
 </style>
<body style="background-image: url('bground.jpg'); background-size: 100%; background-repeat: no-repeat;">
<br><br><br><br><br><br><br><br>
 <form class="form">
 	<center><h2 style="font-family: verdana;">You have already logout..</h2></center>
	<center><h5 style="font-family: verdana;">Click <b><a href="page_login.php">here</a></b> to login again</h5></center>
 </form>
 </body>

