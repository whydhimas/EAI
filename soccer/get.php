<html>
<head>
	<title>Weather Report of <?php echo $_GET['q']; ?> </title>
	<link rel="shortcut icon" href="b.png" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
	<script type="text/javascript" src="http://code.jquery.com/jquery-latest.min.js"></script>
</head>
<style>
html, body, h1, h2, h3, h4, h5, h6 {
  font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif, ;
  color: white;
}
</style>
<body background="bground_weather.jpg">

<?php
error_reporting(0);
$get = json_decode(file_get_contents('http://ip-api.com/json/'),true);

date_default_timezone_set($get['timezone']);
$city = $_GET['q'];
 $string = "http://api.openweathermap.org/data/2.5/weather?q=".$city."&units=metric&appid=ebcf5230b3446f334fe3fa2fd2d4ce24";
 $data = json_decode(file_get_contents($string),true);
 
 $temp = $data['main']['temp'];
 
 $icon = $data['weather'][0]['icon'];

 $visibility = $data['visibility'];
 $visibilitykm = $visibility / 1000;
 $country =  "<h1 class='w3-xxxlarge w3-animate-zoom'><b>".$data['name'].", ".$data['sys']['country']."</h1></b>";
 
 $logo = "<center><img src='http://openweathermap.org/img/w/".$icon.".png'></center>";
 $desc = "<b><p>".$data['weather'][0]['description']."</p></b>";
 
 $temperature =  "<b>Temp: ".$temp."°C</b><br>";
 $clouds = "<b>Clouds: ".$data['clouds']['all']."%</b><br>";
 $humidity = "<b>Humidity: ".$data['main']['humidity']."%</b><br>";
 $windspeed = "<b>Wind Speed: ".$data['wind']['speed']."m/s</b><br>";
 $pressure = "<b>Pressure: ".$data['main']['pressure']."hpa</b><br>";
 $visibility =  "<b>Visibility: ".$visibilitykm."Km</b><br>";
 $sunrise = "<b>Sunrise: ".date('h:i A', $data['sys']['sunrise'])."</b><br>";
 $sunset = "<b>Sunset: ".date('h:i A', $data['sys']['sunset'])."</b>";

 
					?>
				<?php 
				echo $country;
				
				?>
				
		  </div>
			<?php echo $temperature; ?>
			<?php echo $clouds; ?>
			<?php echo $humidity; ?>
			<?php echo $$windspeed; ?>
			<?php echo $pressure; ?>
			<?php echo $$visibility; ?>
			<?php echo $sunrise; ?>
			<?php echo $sunset; ?>
			</h2>
		</div>
		
	</div>
	
	</div>
<br>
<br>
	<a href="menu_admin.php" onclick="window.close();">Back to Home</a>	
</body>
</html>