<?php 
$host = "localhost"; 
$user = "root"; 
$pass = ""; 
$db = "diskominfo_bdg"; 
$konek = mysql_connect($host, $user, $pass) or die ('Fail connection! '); 
mysql_select_db($db);

$sambung = mysqli_connect('localhost', 'root','', 'diskominfo_bdg');
?>