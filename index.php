<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Improve Me: Learn what your friends think about you</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Improve Me: Learn more about yourself and your friends" content="">
    <meta name="Sameer Yadav" content="">
    <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
	
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
	    @font-face {
    font-family: 'FranklinGothicMediumCondRegul';
    src: url('https://cdns-b.branchout.com/resource/ver1105414100/images/fonts/framdcn-webfont.eot');
    src: local('?'), url('https://cdns-b.branchout.com/resource/ver1105414100/images/fonts/framdcn-webfont.woff') format('woff'), url('https://cdns-b.branchout.com/resource/ver1105414100/images/fonts/framdcn-webfont.ttf') format('truetype'), url('https://cdns-b.branchout.com/resource/ver1105414100/images/fonts/framdcn-webfont.svg#webfontmWgtLToj') format('svg');
    font-weight: normal;
    font-style: normal;
  }
  @font-face {
    font-family: 'FranklinGothicMediumCondRegul';
    src: url('https://cdns-b.branchout.com/resource/ver1105414100/images/fonts/framdcn-webfont.eot');
    src: local('?'), url('https://cdns-b.branchout.com/resource/ver1105414100/images/fonts/framdcn-webfont.woff') format('woff'), url('https://cdns-b.branchout.com/resource/ver1105414100/images/fonts/framdcn-webfont.ttf') format('truetype'), url('https://cdns-b.branchout.com/resource/ver1105414100/images/fonts/framdcn-webfont.svg#webfontmWgtLToj') format('svg');
    font-weight: bold;
    font-style: normal;
  }
  .webFont{
    font-family:"FranklinGothicMediumCondRegul","Arial Narrow","Arial";
    -webkit-text-stroke-color:rgba(0, 0, 0,0);
    -webkit-text-stroke-width:1px;
  }
  
  @font-face {
    font-family: 'iconFont';
    src: url('https://cdns-b.branchout.com/resource/ver1105414100/images/fonts/pictos-web.eot');
    src: local('?'), url('https://cdns-b.branchout.com/resource/ver1105414100/images/fonts/pictos-web.woff') format('woff'), url('https://cdns-b.branchout.com/resource/ver1105414100/images/fonts/pictos-web.ttf') format('truetype'), url('https://cdns-b.branchout.com/resource/ver1105414100/images/fonts/pictos-web.svg#webfontmWgtLToj') format('svg');
    font-weight: normal;
    font-style: normal;
  }
  
  @font-face {
    font-family: 'iconFont2';
    src: url('https://cdns-b.branchout.com/resource/ver1105414100/images/fonts/websymbols-regular-webfont.eot');
    src: local('?'), url('https://cdns-b.branchout.com/resource/ver1105414100/images/fonts/websymbols-regular-webfont.woff') format('woff'), url('https://cdns-b.branchout.com/resource/ver1105414100/images/fonts/websymbols-regular-webfont.ttf') format('truetype'), url('https://cdns-b.branchout.com/resource/ver1105414100/images/fonts/websymbols-regular-webfont.svg#webfontmWgtLToj') format('svg');
    font-weight: normal;
    font-style: normal;
  }
    </style>

    <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet">
	<link href="http://fortawesome.github.com/Font-Awesome/#all-icons" rel="stylesheet">
    <link rel="shortcut icon" href="http://twitter.github.com/bootstrap/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-57-precomposed.png">
     <link rel="stylesheet" href="http://improveme.herokuapp.com/site.css">
  	<link rel="stylesheet" href="http://improveme.herokuapp.com/prettify.css">

  </head>
  <body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
        <!--  <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
     	     <a class="brand" href="http://twitter.github.com/bootstrap/examples/hero.html#">Improve Me</a>
          <div class="nav-collapse">
            <ul class="nav">
              <li class="active"><a href="http://twitter.github.com/bootstrap/examples/hero.html#">Home</a></li>
              <li class="active">
              CHARU PUT FACEBOOK BUTTON HERE      
              	<li class="active">              	 
		    				
              </li>  -->
<div id="fb-root"></div>
      <script>
	  var user_id = 0;
        window.fbAsyncInit = function() {
          FB.init({
            appId      : '312910365471514', // App ID
            channelUrl : 'http://improveme.herokuapp.com/channel.html', // Channel File
            status     : true, // check login status
            cookie     : true, // enable cookies to allow the server to access the session
            xfbml      : true  // parse XFBML
          });
			FB.getLoginStatus(function(response){

			if(response.status == "connected"){
			   	window.location = "https://improveme.herokuapp.com/home.php?id="+response.authResponse.userID;
			}
			else{
				FB.Event.subscribe('auth.login', function (response) {
				window.location = "https://improveme.herokuapp.com/home.php?id="+response.authResponse.userID;

			});
				//window.location = "https://improveme.herokuapp.com/home.php";
			     //top.location.href="https://www.facebook.com/dialog/oauth?client_id=312910365471514&redirect_uri=https://improveme.herokuapp.com/index.php&scope=email,read_stream";
			 	}
        	}); 
		
		
		
        };

		
    		
        // Load the SDK Asynchronously
        (function(d){
           var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
           if (d.getElementById(id)) {return;}
           js = d.createElement('script'); js.id = id; js.async = true;
           js.src = "//connect.facebook.net/en_US/all.js";
           ref.parentNode.insertBefore(js, ref);
         }(document));
		 
		 
      </script>
	  
	  

      <div class="fb-login-button">Login with Facebook</div>
	
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>

    <div class="container">
	<!--<style type="text/css">
	#container {background: #000000;}
	</style> -->
      <div class="hero-unit">
	  <div > </div>
	 
       <center> <h1 class = "webFont">Improve Me</h1></center>
       <center> <h2 class = "webFont">Learn What Your Friends Think About You</h2></center>
	  
      </div>

      <!-- Example row of columns -->

      <div class="row">
      	<div class= "span4">
	        <div class="hero-unit">
	          <center>
	          	<div style = "font-size: 30px;">
	          		  <img src="magnify.png"/>
	          	</div>
	          	 <h2 class="webFont">Find Your Friends</h2>
				 <h3 class="webFont">Search within all your Facebook friends</h3>          	
	          	
	          	</center>
	          <!--icon-facebook or icon-facebook-sign -->
	        </div>
        </div>
        <div class ="span4">
        <div class="hero-unit">
        	<center>
        	<div style = "font-size: 30px;">
	          		 <img src="chat.png"/>
	          	</div>
        	  <h2 class="webFont">Write Reviews</h2>
			  <h3 class="webFont">Rate your friends on a variety of metrics</h3>
        	<!-- -->
       </div>
       </div>
       <div class ="span4">
        <div class="hero-unit">
          <center>
          <div style = "font-size: 30px;">
	          		 <img src="wrench.png"/>
	          	</div>
          	<h2 class="webFont">Improve Yourself</h2>
			 <h3 class="webFont">Read reviews written by others and improve</h3>
          <!-- icon-wrench-->
        </div>
        </div>
      </div>
	  

      <footer>
        <p>Microsoft Interns 2012 - Georgia Tech - Berkeley - U Michigan - U Penn</p>
      </footer>

    </div> <!-- /container -->

    <script src="./Bootstrap, from Twitter_files/jquery.js"></script>
    <script src="./Bootstrap, from Twitter_files/bootstrap-transition.js"></script>
    <script src="./Bootstrap, from Twitter_files/bootstrap-alert.js"></script>
    <script src="./Bootstrap, from Twitter_files/bootstrap-modal.js"></script>
    <script src="./Bootstrap, from Twitter_files/bootstrap-dropdown.js"></script>
    <script src="./Bootstrap, from Twitter_files/bootstrap-scrollspy.js"></script>
    <script src="./Bootstrap, from Twitter_files/bootstrap-tab.js"></script>
    <script src="./Bootstrap, from Twitter_files/bootstrap-tooltip.js"></script>
    <script src="./Bootstrap, from Twitter_files/bootstrap-popover.js"></script>
    <script src="./Bootstrap, from Twitter_files/bootstrap-button.js"></script>
    <script src="./Bootstrap, from Twitter_files/bootstrap-collapse.js"></script>
    <script src="./Bootstrap, from Twitter_files/bootstrap-carousel.js"></script>
    <script src="./Bootstrap, from Twitter_files/bootstrap-typeahead.js"></script>

  

</body><link rel="stylesheet" type="text/css" href="data:text/css,"></html>