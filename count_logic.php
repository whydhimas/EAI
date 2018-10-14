<?php
include "connection.php";

if($_GET['kategori'] == "soccer"){
	$query = mysql_query("update count set soccer = soccer+1");
	$qry = mysql_fetch_array($query);
	header("location:soccer/menu_admin.php");
}else if($_GET['kategori'] == "basketball"){
	$query = mysql_query("update count set basketball = basketball+1");
	$qry = mysql_fetch_array($query);
	header("location:soccer.php");
}else if ($_GET['kategori'] == "badminton"){
	$query = mysql_query("update count set badminton = badminton+1");
	$qry = mysql_fetch_array($query);
	header("location:soccer.php");
}
?>