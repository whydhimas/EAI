<?php 
include "session.php";
 ?>
 
<!DOCTYPE html>
<html>
<head>
  <title>BOLA BASKET | B-SPORT</title>
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
    <li><a href="sepakbola.php">Sepak Bola</a></li>
    <li><a class="active" href="bolabasket.php">Bola Basket</a></li>
    <li><a href="badminton.php">Badminton</a></li>
    <li><a href="tennis.php">Tennis</a></li>
    <li><a href="motogp.php">MotoGP</a></li>
    <li><a href="trend_stat.php">Trend & Statistik</a></li>
    <br><br><br><br><br><br><br><br><br><br><br>
    <li><a href="about.php">About</a></li>
    <li><a href="logout.php" onclick="return ConfirmLogout()">Logout</a></li>
  </ul>
  <div style="margin-left:25%;padding:1px 16px;height:1000px;">
    <form method="GET" action="get.php">
    <br><br><h2>Bola Basket</h2>
    <!-- <?php
        session_start();
        require_once("twitteroauth.php");
        $notweets = 20;

        $twitteruser = "detiksport";
        $consumer_key = "ccoZM13DRsc3Ls1aAN3iIwtcL";
        $consumer_secret = "0XeKCGGrmw4ZfpZCWrK6sLugouAbItGQdrgaAJFmIaqnJCUMqO";
        $access_token = " 982198302-ovduSj5AyyGoweHyF1QA0zitNBpINXqqcopguGJF";
        $access_token_secret = "xTqr2COnxzIPOzVc80p6cvKgw1VK35AK0FPALJR8F6MIC";

        function getConnectionWithAccessToken($cons_key, $cons_secret, $oauth_token, $oauth_token, $oauth_token_secret) {
          $connection = new TwitterOAuth($cons_key, $cons_secret, $oauth_token, $oauth_token, $oauth_token_secret);
            return $connection;
        }

        $connection = getConnectionWithAccessToken($consumer_key, $consumer_secret, $access_token, $access_token_secret);

        $tweets = $connection->get("https://api.twitter.com/1.1/statuses/user_timeline.json?screen_name=".$twitteruser."&count=".notweets);

        foreach ($tweets as $key => $tweet) {
          echo '<img src"'.$tweet->user->profile_image_url.'"align="left">';
          echo $tweet->created_at.'<br/>';
          echo $tweet->user->name.'('.$tweet->user->screen_name.')<br/>';
          echo $tweet->text.'<br/><hr/>';
        }
    ?> -->
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
