<?php 
session_start();
if(!isset($_SESSION['username']) && !isset($_SESSION['password'])){
	echo '
	<script language="javascript">
	alert("Login first!");
	document.location = "page_login.php";
	</script>
	';
}
?>