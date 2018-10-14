<?php
include "connection.php";
include "session.php";

?>
<!DOCTYPE html>
<html>
<head>
  <title>INDEX | B-SPORT</title>
  <link rel="shortcut icon" href="b.png" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style type="text/css">
    @font-face {
      font-family: 'Montserrat';
        font-style: normal;
        font-weight: 400;
        src: local('Montserrat-Regular'), url(http://themes.googleusercontent.com/static/fonts/montserrat/v4/zhcz-_WihjSQC0oHJ9TCYBsxEYwM7FgeyaSgU71cLG0.woff) format('woff');
    }

    div,span,a{color: white; margin:0;padding:0;border:0;font-size:100%;font:inherit;vertical-align:baseline;}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block;}body{line-height:1;}ol,ul{list-style:none;}blockquote,q{quotes:none;}blockquote:before,blockquote:after,q:before,q:after{content:'';content:none;}table{border-collapse:collapse;border-spacing:0;}body,html{height:100%;}body{margin:0 auto;font:1em/1.3em Montserrat,Helvetica,sans-serif;}.clearfix{clear:both;}.container{ background: url(https://pcbx.us/bexy.jpg);padding-top:20px;height:100%;width:100%;text-align:center;background-color:#ddd;}h1{margin:40px 0;font-size:40px;line-height:40px;font-weight:bold;text-shadow:0px 1px 1px #888;}a{text-decoration:none;color:#fff;margin:0 10px;}.btn{box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;position:relative;display:inline-block;overflow:hidden;height:53px;border-radius:6px;-moz-border-radius:6px;-webkit-border-radius:6px;line-height:30px;font-size:16px;font-weight:bold;text-shadow:0px 1px 1px #888;}.btn span.icon,.btn span.title{display:block;position:relative;line-height:50px;padding:0 30px;border-radius:6px;-moz-border-radius:6px;-webkit-border-radius:6px;}.btn span.left{float:left;border-radius:6px 0 0 6px;-moz-border-radius:6px 0 0 6px;-webkit-border-radius:6px 0 0 6px;}.btn span.right{float:right;border-radius:0 6px 6px 0;-moz-border-radius:0 6px 6px 0;-webkit-border-radius:0 6px 6px 0;}.btn span.icon{font-size:23px;background-color:#00967f;-webkit-box-shadow:0 3px 0 0 #007261;box-shadow:0 3px 0 0 #007261;text-shadow:0px 1px 1px #888;}.btn span.title{-webkit-box-shadow:0 3px 0 0 #00ae94;box-shadow:0 3px 0 0 #00ae94;background-color:#00cdae;}.btn span.arrow-left,.btn span.arrow-right{position:absolute;width:0;height:0;border-top:25px solid transparent;border-bottom:25px solid transparent;-webkit-transition:all .15s;-transition:all .15s;-webkit-transition-property:left,right;transition-property:left,right;}.btn.left span.arrow-left{right:0;-webkit-box-shadow:10px 0 0 0 #00cdae,10px 3px 0 0 #00ae94;box-shadow:10px 0 0 0 #00cdae,10px 3px 0 0 #00ae94;border-right:10px solid #00cdae;}.btn.right span.arrow-left{right:0;-webkit-box-shadow:10px 0 0 0 #00967f,10px 3px 0 0 #007261;box-shadow:10px 0 0 0 #00967f,10px 3px 0 0 #007261;border-right:10px solid #00967f;}.btn.left span.arrow-right{left:0;-webkit-box-shadow:-10px 0 0 0 #00967f,-10px 3px 0 0 #007261;box-shadow:-10px 0 0 0 #00967f,-10px 3px 0 0 #007261;border-left:10px solid #00967f;}.btn.right span.arrow-right{left:0;-webkit-box-shadow:-10px 0 0 0 #00cdae,-10px 3px 0 0 #00ae94;box-shadow:-10px 0 0 0 #00cdae,-10px 3px 0 0 #00ae94;border-left:10px solid #00cdae;}.btn span.slant-left,.btn span.slant-right{position:absolute;width:0;height:0;border-top:0 solid transparent;border-bottom:50px solid transparent;-webkit-transition:all .15s;-transition:all .15s;-webkit-transition-property:left,right;transition-property:left,right;}.btn.left span.slant-right{left:0;-webkit-box-shadow:-10px 0 0 0 #00967f,-10px 3px 0 0 #007261;box-shadow:-10px 0 0 0 #00967f,-10px 3px 0 0 #007261;border-left:10px solid #00967f;}.btn.right span.slant-right{left:0;-webkit-box-shadow:-10px 0 0 0 #00cdae,-10px 3px 0 0 #00ae94;box-shadow:-10px 0 0 0 #00cdae,-10px 3px 0 0 #00ae94;border-left:10px solid #00cdae;}.btn.left span.slant-left{right:0;-webkit-box-shadow:10px 0 0 0 #00cdae,10px 3px 0 0 #00ae94;box-shadow:10px 0 0 0 #00cdae,10px 3px 0 0 #00ae94;border-right:10px solid #00cdae;}.btn.right span.slant-left{right:0;-webkit-box-shadow:10px 0 0 0 #00967f,10px 3px 0 0 #007261;box-shadow:10px 0 0 0 #00967f,10px 3px 0 0 #007261;border-right:10px solid #00967f;}.btn:active,.btn.active{height:51px;}.btn:hover{}.btn:hover span.arrow-left{right:10px;}.btn:hover span.arrow-right{left:10px;}.btn:hover span.slant-left{right:10px;}.btn:hover span.slant-right{left:10px;}.btn-small{height:30px;font-size:12px;line-height:10px;}a.btn-small span.btn{height:30px;}

      /* The Modal (background) */
      .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          padding-top: 100px; /* Location of the box */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
      }

      /* Modal Content */
      .modal-content {
          background-color: #fefefe;
          margin: auto;
          padding: 20px;
          border: 1px solid #888;
          width: 30%;
      }

      /* The Close Button */
      .close {
          color: #aaaaaa;
          float: right;
          font-size: 28px;
          font-weight: bold;
      }

      .close:hover,
      .close:focus {
          color: #000;
          text-decoration: none;
          cursor: pointer;
      }

      .btnenter {
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
      .btnenter:hover {
        background-color: #387C3B;
        color: white;
      }
  </style>
</head>
<body style="background-color: white; background-image: url('bground.jpg'); background-size: 100%; background-repeat: no-repeat;">
  <center><div style="background-color: #f2f2f2; width: 700px; height: 400px; border-webkit-box-shadow: 0 0 13px 3px rgba(0,0,0,.5); box-shadow: 0 0 40px 10px rgba(0,0,0,.5);">
  <center>
    <br><br><br>
    <img src="logo2.png" style="width: 500px;"><br>
    <center><h3><font color="black">Welcome <?php echo $_SESSION['username']; ?></font></h3></center>
    <br>
  <center>
  <div class="content">
      <a href="goods_lists_ordinary.php" class="btn left">
        <span class="left icon icon-gear"></span>
        <span class="right title" style="width: 200px;"><span class="arrow-right"></span>PROFILE</span>
      </a>
      
      <a id="myBtn" class="btn right">
        <span class="left title" style="width: 200px;"><span class="arrow-left"></span>B-SPORT</span>
        <span class="right icon icon-gear"></span>
      </a>
    </div>
    <!-- The Modal -->
    <div id="myModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <p><h3><font color="black">Select the sport</font></h3><br>
          <a href="count_logic.php?kategori=soccer"><button class="btnenter">Soccer</button></a>
          <a href="count_logic.php?kategori=basketball"><button class="btnenter">Basketball</button></a>
          <a href="count_logic.php?kategori=badminton"><button class="btnenter">Badminton</button></a></p>
      </div>
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

  // Get the modal
  var modal = document.getElementById('myModal');

  // Get the button that opens the modal
  var btn = document.getElementById("myBtn");

  // Get the <span> element that closes the modal
  var span = document.getElementsByClassName("close")[0];

  // When the user clicks the button, open the modal 
  btn.onclick = function() {
      modal.style.display = "block";
  }

  // When the user clicks on <span> (x), close the modal
  span.onclick = function() {
      modal.style.display = "none";
  }

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function(event) {
      if (event.target == modal) {
          modal.style.display = "none";
      }
  }
</script>
</html>
