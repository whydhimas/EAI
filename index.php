<?php
include "connection.php";
include "session.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>INDEX | B-SPORT</title>
  <link rel="shortcut icon" href="b.png" />
	<style type="text/css">
		@font-face {
			font-family: 'Montserrat';
  			font-style: normal;
  			font-weight: 400;
  			src: local('Montserrat-Regular'), url(http://themes.googleusercontent.com/static/fonts/montserrat/v4/zhcz-_WihjSQC0oHJ9TCYBsxEYwM7FgeyaSgU71cLG0.woff) format('woff');
		}

		div,span,a{color: white; margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block;}body{line-height:1;}ol,ul{list-style:none;}blockquote,q{quotes:none;}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}table{border-collapse:collapse;border-spacing:0;}body,html{height:100%;}body{margin:0 auto;font:1em/1.3em Montserrat,Helvetica,sans-serif;}.clearfix{clear:both;}.container{ background: url(https://pcbx.us/bexy.jpg);padding-top:20px;height:100%;width:100%;text-align:center;background-color:#ddd;}h1{margin:40px 0;font-size:40px;line-height:40px;font-weight:bold;text-shadow:0px 1px 1px #888;}a{text-decoration:none;color:#fff;margin:0 10px;}.btn{box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;position:relative;display:inline-block;overflow:hidden;height:53px;border-radius:6px;-moz-border-radius:6px;-webkit-border-radius:6px;line-height:30px;font-size:16px;font-weight:bold;text-shadow:0px 1px 1px #888;}.btn span.icon,.btn span.title{display:block;position:relative;line-height:50px;padding:0 30px;border-radius:6px;-moz-border-radius:6px;-webkit-border-radius:6px;}.btn span.left{float:left;border-radius:6px 0 0 6px;-moz-border-radius:6px 0 0 6px;-webkit-border-radius:6px 0 0 6px;}.btn span.right{float:right;border-radius:0 6px 6px 0;-moz-border-radius:0 6px 6px 0;-webkit-border-radius:0 6px 6px 0;}.btn span.icon{font-size:23px;background-color:#00967f;-webkit-box-shadow:0 3px 0 0 #007261;box-shadow:0 3px 0 0 #007261;text-shadow:0px 1px 1px #888;}.btn span.title{-webkit-box-shadow:0 3px 0 0 #00ae94;box-shadow:0 3px 0 0 #00ae94;background-color:#00cdae;}.btn span.arrow-left,.btn span.arrow-right{position:absolute;width:0;height:0;border-top:25px solid transparent;border-bottom:25px solid transparent;-webkit-transition:all .15s;-transition:all .15s;-webkit-transition-property:left,right;transition-property:left,right;}.btn.left span.arrow-left{right:0;-webkit-box-shadow:10px 0 0 0 #00cdae,10px 3px 0 0 #00ae94;box-shadow:10px 0 0 0 #00cdae,10px 3px 0 0 #00ae94;border-right:10px solid #00cdae;}.btn.right span.arrow-left{right:0;-webkit-box-shadow:10px 0 0 0 #00967f,10px 3px 0 0 #007261;box-shadow:10px 0 0 0 #00967f,10px 3px 0 0 #007261;border-right:10px solid #00967f;}.btn.left span.arrow-right{left:0;-webkit-box-shadow:-10px 0 0 0 #00967f,-10px 3px 0 0 #007261;box-shadow:-10px 0 0 0 #00967f,-10px 3px 0 0 #007261;border-left:10px solid #00967f;}.btn.right span.arrow-right{left:0;-webkit-box-shadow:-10px 0 0 0 #00cdae,-10px 3px 0 0 #00ae94;box-shadow:-10px 0 0 0 #00cdae,-10px 3px 0 0 #00ae94;border-left:10px solid #00cdae;}.btn span.slant-left,.btn span.slant-right{position:absolute;width:0;height:0;border-top:0 solid transparent;border-bottom:50px solid transparent;-webkit-transition:all .15s;-transition:all .15s;-webkit-transition-property:left,right;transition-property:left,right;}.btn.left span.slant-right{left:0;-webkit-box-shadow:-10px 0 0 0 #00967f,-10px 3px 0 0 #007261;box-shadow:-10px 0 0 0 #00967f,-10px 3px 0 0 #007261;border-left:10px solid #00967f;}.btn.right span.slant-right{left:0;-webkit-box-shadow:-10px 0 0 0 #00cdae,-10px 3px 0 0 #00ae94;box-shadow:-10px 0 0 0 #00cdae,-10px 3px 0 0 #00ae94;border-left:10px solid #00cdae;}.btn.left span.slant-left{right:0;-webkit-box-shadow:10px 0 0 0 #00cdae,10px 3px 0 0 #00ae94;box-shadow:10px 0 0 0 #00cdae,10px 3px 0 0 #00ae94;border-right:10px solid #00cdae;}.btn.right span.slant-left{right:0;-webkit-box-shadow:10px 0 0 0 #00967f,10px 3px 0 0 #007261;box-shadow:10px 0 0 0 #00967f,10px 3px 0 0 #007261;border-right:10px solid #00967f;}.btn:active,.btn.active{height:51px;}.btn:hover{}.btn:hover span.arrow-left{right:10px;}.btn:hover span.arrow-right{left:10px;}.btn:hover span.slant-left{right:10px;}.btn:hover span.slant-right{left:10px;}.btn-small{height:30px;font-size:12px;line-height:10px;}a.btn-small span.btn{height:30px;}
	</style>
</head>
<body style="background-color: white; background-image: url('bground.jpg'); background-size: 100%; background-repeat: no-repeat;">
	<center><div style="background-color: #f2f2f2; width: 700px; height: 400px; border-webkit-box-shadow: 0 0 13px 3px rgba(0,0,0,.5); box-shadow: 0 0 40px 10px rgba(0,0,0,.5);">
	<center>
		<br><br><br>
		<img src="logo2.png" style="width: 500px;">
	<br><br><br><br>
	<center>
	<div class="content">
      <a href="goods_lists_ordinary.php" class="btn left">
        <span class="left icon icon-gear"></span>
        <span class="right title" style="width: 200px;"><span class="arrow-right"></span>BTS LIST</span>
      </a>
      
      <a href="menu_admin.php" class="btn right">
        <span class="left title" style="width: 200px;"><span class="arrow-left"></span>MANAGE BTS</span>
        <span class="right icon icon-gear"></span>
      </a>
    </div>
    </center><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <span style="color: white; font-size: 15px;"‍>&nbsp;&nbsp;Login success,<a href="logout.php" onclick="return ConfirmLogout()">Logout</a></span>
    </div>
    </center>
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
