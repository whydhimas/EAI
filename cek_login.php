<?php
include "connection.php";

$username = $_POST['username'];
$password = $_POST['password'];

if (empty($username)){
	echo "<script>alert('Username or Password not filled')</script>";
	echo "<meta http-equiv='refresh' content='1 url=page_login.php'>";
	} else if (empty($password)){
		echo "<script>alert('Username or Password not filled')</script>";
		echo "<meta http-equiv='refresh' content='1 url=page_login.php'>";
		} else{
			session_start();
			$login = mysql_query("select * from user where BINARY username='$username' and BINARY password='$password'");
			$qry = mysql_fetch_array($login);
			if (mysql_num_rows($login) == 1){
				$_SESSION['username'] = $username;
				if($qry['username'] == "admin"){
					header("location:index.php");
				} else if ($qry['username'] == "user"){
					header("location:goods_for_user.php");
				}
			} else{
				echo "<script>alert('Username or Password wrong')</script>";
				echo "<meta http-equiv='refresh' content='1 url=page_login.php'>";
			}
		}

?>