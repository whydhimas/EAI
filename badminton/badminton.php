<?php 
include "session.php";
 ?>
 
<!DOCTYPE html>
<html>
<head>
  <title>LEAGUE STANDINGS | B-SPORT</title>
  <link rel="shortcut icon" href="b.png" />
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

  .btnstanding {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 5px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    }
    .btnstanding:hover {
    background-color: #387C3B;
    color: white;
  }

  input[type="text"],
  textarea {
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    height: 26px;
    width: 300px;
  }

</style>
</head>
<body>
  <ul>
    <li><center><br><img src="logo.png" width="200px;"><br><br></center></li>
    <li><a href="menu_admin.php">Home</a></li>
    
    <li><a href="bolabasket.php">Match Schedules</a></li>
    <li><a class="active" href="badminton.php">League Standings</a></li>
    <li><a href="trend_stat.php">News</a></li>
    <li><a href="the_chart.php">User Statistic</a></li>
    <br><br><br><br><br><br><br><br><br>
    <li><a href="../index.php">Index</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="../logout.php" onclick="return ConfirmLogout()">Logout</a></li>
  </ul>
  <div style="margin-left:25%;padding:1px 16px;height:1000px;">
    <br><br><h2>League Standings</h2>
    <iframe src="demo-page.html" name="myFrame" width="700" height="450" frameborder="0"></iframe>
    <p><a href="https://bwfbadminton.com/rankings/" target="myFrame"><button class="btnstanding">BWF World Ranking</button></a>
        </p>
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
