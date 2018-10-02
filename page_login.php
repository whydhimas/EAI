<!DOCTYPE html>
<?php 
require_once('settings.php');

$login_url = 'https://accounts.google.com/o/oauth2/v2/auth?scope=' . urlencode('https://www.googleapis.com/auth/userinfo.profile https://www.googleapis.com/auth/userinfo.email https://www.googleapis.com/auth/plus.me') . '&redirect_uri=' . urlencode(CLIENT_REDIRECT_URL) . '&response_type=code&client_id=' . CLIENT_ID . '&access_type=online';
?>

<html>
<head>
	<title>LOGIN | B-SPORT</title>
	<link rel="shortcut icon" href="b.png" />
	<style type="text/css">
		.form {
			padding: 1em;
			margin: 2em auto;
  			width: 17em;
  			background: #fff;
  			border-radius: 3px;
  			border-webkit-box-shadow: 0 0 13px 3px rgba(0,0,0,.5);
    		box-shadow: 0 0 40px 5px rgba(0,0,0,.5);
		}

		input[type="text"],
		input[type="password"],
		textarea {
			display: inline-block;
    		border: 1px solid #ccc;
    		border-radius: 4px;
    		box-sizing: border-box;
    		height: 25px;
  		}

  		.button {
  			background: #4CAF50;
  			color: #fff;
  			border: 0;
  			padding: 5px 8px;
  			margin: 10px 0px;
  			width: 260px;
  		}

  		.button:hover {
  			opacity: 1;
  			right: 0;
  			background-color: #387C3B;
    		color: white;
		}

		.buttonGoogle {
  			background: #e8e8e8;
  			color: #000;
  			border: 0;
  			padding: 5px 8px;
  			margin: 10px 0px;
  			width: 260px;
  		}

  		.buttonGoogle:hover {
  			opacity: 1;
  			right: 0;
  			background-color: #b5b5b5;
    		color: black;
		}

	</style>
</head>
<body style="background-color: white; background-image: url('bground.jpg'); background-size: 100%; background-repeat: no-repeat;">
	<center>
	<br><br><br><br><br><br><br>
	<form action="cek_login.php" method="post" class="form">
		<img src="logo2.png" style="width: 250px;"><br><br>
		<table border="0" style="font-family: verdana;">
			<tr>
				<td>Username</td>
				<td></td>
				<td><input type="text" name="username" id="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td></td>
				<td><input type="password" name="password" id="password"></td>
			</tr>
			<tr>
				<td colspan="3"><center><input type="submit" name="login" value="LOGIN" class="button">
					<a href="<?= $login_url ?>"><img src="google.png" width="90"></a></center></td>
			</tr>
		</table>
	</form>
	<br><br><br><br><br><br><br><br><br><br><br>
	</center>
</body>
<script type="text/javascript">
	
</script>
</html>