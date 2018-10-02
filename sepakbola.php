<?php 
include "session.php";
 ?>
 
<!DOCTYPE html>
<html>
<head>
  <title>SEPAK BOLA | B-SPORT</title>
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
    <li><a class="active" href="sepakbola.php">Sepak Bola</a></li>
    <li><a href="bolabasket.php">Bola Basket</a></li>
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
    <br><br><h2>Sepak Bola</h2>
    <div>
      <?php

  $json = file_get_contents("https://newsapi.org/v2/top-headlines?sources=four-four-two&apiKey=6afde1663c3c419e94d00dbad2f9de33");
        
  $data = json_decode($json);
  
  foreach ($data->articles as $key => $_articles) {
    if(isset($_articles->title) && isset($_articles->url) && isset($_articles->content)){
       echo "<b><font size='4'>".$_articles->title."</font></b><br/>".
            "Gambar : ".$_articles->urlToImage."<br/>".
            "Sumber : ".$_articles->url."<br/>".
            "Isi : <i>".$_articles->content."</i><br/>"."<hr>";
    }
   
  }

  /*$array = array("0","1","2","3","4","5","6","7","8","9","10","11","12"); 

  $arrlength = count($array);

  for($x = 0; $x < $arrlength; $x++) {

  echo "Author : ".$data->articles[$array[$x]]->author."<br/>".
  "Judul : ".$data->articles[$array[$x]]->title."<br/>".
  "Sumber : ".$data->articles[$array[$x]]->url."<br/>".
  "Gambar : ".$data->articles[$array[$x]]->urlToImage."<br/>".
  "Isi : ".$data->articles[$array[$x]]->content."<br/>"."<hr>";

  }*/
?>
    </div>
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
