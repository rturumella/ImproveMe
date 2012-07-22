<!DOCTYPE html>
<?php
include_once "connect_db.php";
?>
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
              CHARU PUT FACEBOOK BUTTON HERE      -->
            <br>
				<form name="input" action="search.php" method="get">
				
				<h2 class=webFont> &nbsp;&nbsp; Improve Me &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp Search: <input type="text" name="name" size="55" />
				<input type="submit" value="Submit" />
				
				</h2>
				</form>			
			
              
			
              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
	
	<br>
	<br>
     <div class="container">
     	
 				<div id="fb-root"></div>
 <script>
        window.fbAsyncInit = function() {
        	FB._https = true;
          FB.init({
            appId      : '312910365471514', // App ID
            channelUrl : 'https://improveme.herokuapp.com/channel.html', // Channel File
            status     : true, // check login status
            cookie     : true, // enable cookies to allow the server to access the session
            xfbml      : true  // parse XFBML
          });
          if (typeof fbInit == "function") {
			  fbInit();
		  }
        };
        // Load the SDK Asynchronously
        (function(d){
           var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
           if (d.getElementById(id)) {return;}
           js = d.createElement('script'); js.id = id; js.async = true;
           js.src = "//connect.facebook.net/en_US/all.js";
           ref.parentNode.insertBefore(js, ref);
         }(document));
	var myName = "";
	var myID = "";
	var image = "";
	
	function fbInit() {
		FB.getLoginStatus(function(response) {
		if (response.status === 'connected') {
			 console.log('Welcome!  Fetching your information.... ');
			 FB.api('/me', function(response) {
				myName = response.name;
				myID = response.id;
				//document.getElementById('nameOfUser').innerHTML = myName;
				//document.getElementById("userThumb").src = "http://graph.facebook.com/"+ myID + "/picture";
			});
		   } else {
			 console.log('User cancelled login or did not fully authorize.');
		   }

		});
	}
</script>

<?php
$id = $_GET["id"];
$query = "SELECT * from `profile` WHERE id=".$id;
$result = mysql_query($query) or die('Query failed: ' . mysql_error());

while ($line = mysql_fetch_array($result)) {
    echo "\t<tr>\n";
	for ($i = 0; $i < 6; $i++) {
		$j = $i + 2;
?>
	<div class="hero-unit">
	  <h2 class = "webFont">
<?php
	  echo "$category[$i]: $line[$j]";
	  $v = $category[$i]."_t";
	  $query2 = "SELECT ".$v." FROM reviews WHERE fb_id=".$id;
	  //echo "$query2";
	  $result2 = mysql_query($query2) or die ('Query failed: '.mysql_eror());
	  while ($row = mysql_fetch_array($result2, MYSQL_ASSOC)) {
	  	$txt = $row[$v];
		echo "<br>$txt";
	  }
?>
	</h2>
      </div>
<?php	
	}
	break;
}	
mysql_close($con);
?>
</div>
      <footer>
	  <center>
        <p>Microsoft Interns 2012 - Georgia Tech - Berkeley - U Michigan - U Penn</p>
		</center>
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