<?php 
include "session.php";
 ?>
 
<!DOCTYPE html>
<html>
<head>
  <title>HOME | B-SPORT</title>
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

  .btnsubmit {
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
    .btnsubmit:hover {
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
    <li><a class="active" href="menu_admin.php">Home</a></li>
    <li><a href="sepakbola.php">Activities</a></li>
    <li><a href="bolabasket.php">Match Schedules</a></li>
    <li><a href="badminton.php">League Standings</a></li>
    <li><a href="trend_stat.php">News</a></li>
    <li><a href="the_chart.php">User Statistic</a></li>
    <br><br><br><br><br><br><br><br><br>
    <li><a href="../index.php">Index</a></li>
    <li><a href="about.php">About</a></li>
    <li><a href="../logout.php" onclick="return ConfirmLogout()">Logout</a></li>
  </ul>
  <div style="margin-left:25%;padding:1px 16px;height:1000px;">
    <form method="GET" action="get.php" target="_blank">
    <br><br><h2>The Weather Information</h2>
    <div>
    <?php
                $queryss = @unserialize (file_get_contents('http://ip-api.com/php/'));

                $json = file_get_contents("https://query.yahooapis.com/v1/public/yql?q=select%20*%20from%20weather.forecast%20where%20woeid%20in%20(select%20woeid%20from%20geo.places(1)%20where%20text%3D%22".$queryss['city']."%22)and%20u%3D%22c%22&format=json&env=store%3A%2F%2Fdatatables.org%2Falltableswithkeys");
                        
                $data = json_decode($json);

                $image_weather = $data->query->results->channel->item->condition->text;

                $array = array("0","1","2","3","4","5");

                $arrlength = count($array);

                switch ($image_weather) {
                    case "Cloudy":
                        echo "<img src='con_cloudy.png' style='width:40px;height:40px;'>";
                        break;
                    case "Partly Cloudy":
                        echo "<img src='../img/cuaca/image/con_partlycloudy.png' style='width:40px;height:40px;'>";
                        break;
                    case "Sunny":
                        echo "<img src='../img/cuaca/image/con_sunny.png' style='width:40px;height:40px;'>";
                        break;
                    case "Mostly Sunny":
                        echo "<img src='../img/cuaca/image/con_mostlysunny.png' style='width:40px;height:40px;'>";
                        break;
                    case "Scattered":
                        echo "<img src='../img/cuaca/image/con_scatteredthunderstorm.png' style='width:40px;height:40px;'>";
                        break;
                    case "Thunderstorms":
                        echo "<img src='../img/cuaca/image/con_thunderstorm.png' style='width:40px;height:40px;'>";
                        break;
                    case "Showers":
                        echo "<img src='con_rain.png' style='width:40px;height:40px;'>";
                        break;
                    case "Rain":
                        echo "<img src='../img/cuaca/image/con_rain.png' style='width:40px;height:40px;'>";
                        break;
                    case "Windy":
                        echo "<img src='../img/cuaca/image/con_windy.png' style='width:40px;height:40px;'>";
                        break;
                    case "Mostly Cloudy":
                        echo "<img src='../img/cuaca/image/con_cloudy.png' style='width:40px;height:40px;'>";
                        break;
                    case "Breezy":
                        echo "<img src='../img/cuaca/image/con_windy.png' style='width:40px;height:40px;'>";
                        break;
                    case "Scattered Showers":
                        echo "<img src='../img/cuaca/image/con_scatteredrain.png' style='width:40px;height:40px;'>";
                        break;    
                    default:
                        echo "-";
              }
                  echo "<br><b>". $data->query->results->channel->location->city . ", ";
                  echo $data->query->results->channel->location->region. ", ";
                  echo $data->query->results->channel->location->country . "<br/></b>"  ;
                  echo $data->query->results->channel->lastBuildDate . "<br/>";
                  echo "Temperature: ". $data->query->results->channel->item->condition->temp. ", ";
                  echo "Weather: ". $data->query->results->channel->item->condition->text ."<br><br>";
                  echo "Weather Forecast: <br>";

                  for($x = 1; $x < $arrlength; $x++) {

                  $image_weather = $data->query->results->channel->item->condition->text;

                  switch ($image_weather) {
                    case "Cloudy":
                        echo "<img src='../img/cuaca/image/con_cloudy.png' style='width:25px;height:25px;'>";
                        break;
                    case "Partly Cloudy":
                        echo "<img src='../img/cuaca/image/con_partlycloudy.png' style='width:25px;height:25px;'>";
                        break;
                    case "Sunny":
                        echo "<img src='img/cuaca/image/con_sunny.png' style='width:25px;height:25px;'>";
                        break;
                    case "Mostly Sunny":
                        echo "<img src='../img/cuaca/image/con_mostlysunny.png' style='width:25px;height:25px;'>";
                        break;
                    case "Scattered":
                        echo "<img src='../img/cuaca/image/con_scatteredthunderstorm.png' style='width:25px;height:25px;'>";
                        break;
                    case "Thunderstorms":
                        echo "<img src='../img/cuaca/image/con_thunderstorm.png' style='width:25px;height:25px;'>";
                        break;
                    case "Showers":
                        echo "<img src='../img/cuaca/image/con_rain.png' style='width:25px;height:25px;'>";
                        break;
                    case "Rain":
                        echo "<img src='../img/cuaca/image/con_rain.png' style='width:25px;height:25px;'>";
                        break;
                    case "Windy":
                        echo "<img src='../img/cuaca/image/con_windy.png' style='width:25px;height:25px;'>";
                        break;
                    case "Mostly Cloudy":
                        echo "<img src='../img/cuaca/image/con_cloudy.png' style='width:25px;height:25px;'>";
                        break;
                    case "Breezy":
                        echo "<img src='../img/cuaca/image/con_windy.png' style='width:25px;height:25px;'>";
                        break;
                    case "Scattered Showers":
                        echo "<img src='../img/cuaca/image/con_scatteredrain.png' style='width:25px;height:25px;'>";
                        break;    
                    default:
                        echo "-";
                  }

                  echo $data->query->results->channel->item->forecast[$array[$x]]->day . ", ";
                  echo $data->query->results->channel->item->forecast[$array[$x]]->date . ", ";
                  echo $data->query->results->channel->item->forecast[$array[$x]]->text . "<br/>";

                }

              ?>
              <br><p>* type the city for the weather information</p>
      <input type="text" name="q" required  placeholder=" E.g. Bandung">
      <input type="submit" name="submit" class="btnsubmit"><br>
    </form>
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
