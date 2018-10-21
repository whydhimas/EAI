<?php 
include "session.php";
 ?>
 
<!DOCTYPE html>
<html>
<head>
  <title>NEWS | B-SPORT</title>
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

  .btnsubmit, .btnprint {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    padding: 9px 15px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    }
    .btnsubmit:hover, .btnprint:hover {
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
    <li><a href="sepakbola.php">Activities</a></li>
    <li><a href="bolabasket.php">Match Schedules</a></li>
    <li><a href="badminton.php">League Standings</a></li>
    <li><a class="active" href="trend_stat.php">News</a></li>
    <li><a href="the_chart.php">User Statistic</a></li>
    <br><br><br><br><br><br><br><br><br>
    <li><a href="../index.php">Index</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="../logout.php" onclick="return ConfirmLogout()">Logout</a></li>
  </ul>
  <div style="margin-left:25%;padding:1px 16px;height:1000px;">
    <form method="GET" action="get.php">
    <br><br><h2><img src="442.png" height="50"></h2>
    <?php
        $json = file_get_contents("https://newsapi.org/v2/top-headlines?sources=four-four-two&apiKey=6afde1663c3c419e94d00dbad2f9de33");
        
        $data = json_decode($json);
  
        foreach ($data->articles as $key => $_articles) {
          if(isset($_articles->title) && isset($_articles->url) && isset($_articles->content)){
             echo "<b><font size='4'>".$_articles->title."</font></b><br/>".
                  "<img style='box-shadow: 3px 3px 3px grey;' src='".$_articles->urlToImage."' width='300' <br/><br/>".
                  "<a href='".$_articles->url."' target='_blank'>Read more >></a><br/>".
                  "<i>".$_articles->content."</i><br/>"."<hr>";
          } 
        }
    ?>
    
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
