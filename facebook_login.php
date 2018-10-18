<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '{546035919143195}',
      cookie     : true,
      xfbml      : true,
      version    : '{api-version}'
    });

    FB.getLoginStatus(function (response) {
      if (response.status == 'connected') {
        document.getElementById('status').innerHTML = 'We are connected.';

      } else if (response.status === 'not_authorized') {
        document.getElementById('status').innerHTML = 'We are Not Logged in.'; 
      }
    })
      
    FB.AppEvents.logPageView();   
      
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

</body>
</html>