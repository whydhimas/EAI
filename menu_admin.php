<?php 
include "session.php";
 ?>
 
<!DOCTYPE html>
<html>
<head>
  <title>HOME | DISKOMINFO KOTA BANDUNG</title>
  <link rel="shortcut icon" href="diskominfo_kota_bandung.png" />
  <style type="text/css">
  body {
    margin: 0;
    font-family: verdana;
  }

  ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 20%;
    background-color: #f1f1f1;
    position: fixed;
    height: 100%;
    overflow: auto;
    box-shadow: 0 0 2px 1px rgba(0,0,0,.5);
  } 

  li a {
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
  }

  li a.active {
    background-color: #4CAF50;
    color: white;
  }

  li a:hover:not(.active) {
    background-color: #555;
    color: white;
  }
</style>
</head>
<body>
  <ul>
    <li><center><br><img src="kota_bdg.png" width="110px;"><br><br></center></li>
    <li><a class="active" href="menu_admin.php">Home</a></li>
    <li><a href="goods_lists.php">BTS Lists</a></li>
    <li><a href="search_goods.php">Search BTS</a></li>
    <li><a href="about.php">About</a></li>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <li><a href="index.php">Back to Index</a></li>
    <li><a href="logout.php" onclick="return ConfirmLogout()">Logout</a></li>
  </ul>
  <div style="margin-left:25%;padding:1px 16px;height:1000px;">
    <br><br><h2><img src="home.jpg" style="width: 900px; margin: auto;"><br>WELCOME ADMIN TO DISKOMINFO KOTA BANDUNG BTS MANAGEMENT</h2>
    <h4>You can manage like add the new goods, edit, delete, and searching BTS in this local site</h4>
  </div>
</body>
<script type="text/javascript">
  function ConfirmLogout()
    {
      var x = confirm("Are you sure want to logout?");
      if (x)
          return true;
      else
        return false;
    }
</script>
</html>
