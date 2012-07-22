<!DOCTYPE html>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <title>Facebook Hackathon</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Facebook Hackathon" content="">
    <meta name="Sameer Yadav" content="">

    <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
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
    <link rel="shortcut icon" href="http://twitter.github.com/bootstrap/assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="http://twitter.github.com/bootstrap/assets/ico/apple-touch-icon-57-precomposed.png">
     <link rel="stylesheet" href="assets/css/site.css">
  	<link rel="stylesheet" href="assets/css/prettify.css">

  </head>
 <body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
   <!--      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a> -->
         <!-- <div class="nav-collapse">
            <ul class="nav">
             <li class="active"><a href="http://twitter.github.com/bootstrap/examples/hero.html#">Home</a></li>
             <li class="active"><a href="">____________</a></li>  this is for spacing 
              <li class="active">             -->
		    	
				<br>
				<form name="input" action="search.php" method="get">
				
				<h2 class=webFont> &nbsp;&nbsp; Improve Me &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp Search: <input type="text" name="name" size="55" />
				<input type="submit" value="Submit" />
				
				</h2>
				</form>
              
            </ul>
          </div>
        </div>
      </div>
    </div>

	<br>
    <div class="container">    	
	<br></br>
	<div class = "row">
	 <div class = "span4">	
      <div class="hero-unit">
      	<center>

        <h3 class="webFont">
	
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
		function gup( name )
		{
			  name = name.replace(/[\[]/,"\\\[").replace(/[\]]/,"\\\]");
			  var regexS = "[\\?&]"+name+"=([^&#]*)";
			  var regex = new RegExp( regexS );
			  var results = regex.exec( window.location.href );
			  if( results == null )
			    return "";
			  else
			    return results[1];
		}
		var ratingStr;
		var rateStr;
		function fbInit() {
			FB.getLoginStatus(function(response) {
			   if (response.status == "connected") {
				 console.log('Welcome!  Fetching your information.... ');
				 var idLook = gup( 'id' );
				 FB.api('/me', function(response) {
					FB.api('/'+idLook, function(rsp){
						myName = rsp.name;
					
					myID = response.id;
					document.getElementById('nameOfUser').innerHTML = myName;
					document.getElementById("userThumb").src = "http://graph.facebook.com/"+ myID + "/picture";
					if(idLook != myID) {
					ratingStr = "Rate";
					rateStr = "https://improveme.herokuapp.com/form.php?id=" + idLook +  "";
					document.getElementById('rateLink').href = rateStr;
					document.getElementById('rateLink').innerHTML = ratingStr;
					document.getElementById('nameOfUser').innerHTML = myName;
					document.getElementById("userThumb").src = "http://graph.facebook.com/"+ idLook + "/picture?type=large";
					
					}
					else{
					ratingStr = "Improve";
					rateStr = "https://improveme.herokuapp.com/improve.php?id=" + myID+ "";
					document.getElementById('rateLink').href = rateStr;
					document.getElementById('rateLink').innerHTML = ratingStr;
					
					}
					});
				});
			   } else {
			   	FB.login(function(response) {
			   		if (response.authResponse) {
			   			console.log('Welcome!  Fetching your information.... ');
				 		FB.api('/me', function(response) {
							myName = response.name;
							myID = response.id;
							document.getElementById('nameOfUser').innerHTML = myName;
							document.getElementById("userThumb").src = "http://graph.facebook.com/"+ myID + "/picture?type=large";
				   		});
				   	} else {
			   			console.log('User cancelled login or did not fully authorize.');
			   		}
			   	});
			   }
			});
		}
			
		</script>
	
		       <img id="userThumb" alt="Smiley face" height="100" width="100" />    <!-- THE URL for img goes in here in the src value-->
        
		
		<div id = "nameOfUser"> 
			
		</div>
        	  <a id='rateLink' href=""> Hi </a>
        </center> 
	</h3>		
      </div>
	</div>
	<div class = "span8">	
      <div class="hero-unit">     
	  
	  <table border="0">
		<tr>
		<th><h4></h4></th>	
		<th><h4></h4></th>	
		<th><h4></h4></th>	
		<th><h4></h4></th>	
		<th><h3></h3>
			 <div style = "font-size: 30px;">
	          		<i class="icon-bar-chart"></i>
	         </div>
		</th>	
		<th><h4></h4></th>		
		</tr
		<tr>
		<br>
<?php
 	include "connect_db.php";
  	$user_id = $_GET['id'];
	$query = "SELECT sociability_i, humor_i, health_i, honesty_i".
	", attentive_i, spontaneous_i FROM reviews WHERE fb_id=$user_id";
	$result = mysql_query($query) or die('Query failed: ' . mysql_error());
	while ($row = mysql_fetch_row($result, MYSQL_ASSOC)) {
		$sociability = $row['sociability_i'];
		$humor = $row['humor_i'];
		$health = $row['health_i'];
		$honesty = $row['honesty_i'];
		$attentive = $row['attentive_i'];
		$spontaneous = $row['spontaneous_i'];
?>
		<td><center>Sociability-</center></td>
		<td><center>
		<?php
		echo $sociability;
		?> 
		stars</center></td>
		<td><center>_______</center></td>		
		<td><center>Humor-</center></td>		
		<td><center>
		<?php
		echo $humor;
		?> stars</center></td>
		<td><center>_______</center></td>
		<td><center>Health & Fitness-</center></td>
		<td><center>
		<?php
		echo $health;
		?> stars</center></td>
		</tr>
		<tr>
		<td><center>Honesty-</center></td>
		<td><center>
		<?php
		echo $honesty;
		?> stars</center></td>
		<td><center>_______</center></td>
		<td><center>Attentive-</center></td>
		<td><center>
		<?php
		echo $attentive;
		?> stars</center></td>
		<td><center>_______</center></td>
		<td><center>Spontaneous-</center></td>

		<td><center>
		<?php
		echo $spontaneous;
		?> stars</center></td>
<?php
	break;
	}
?>
		</tr>
		<br>
		<br>
	  </table>
	<br>
	  </center>      
      </div>
	</div>
	</div>
      <!-- Example row of columns -->
 <?php
  	$query = "SELECT overall_t FROM reviews WHERE fb_id=$user_id";
	$result = mysql_query($query) or die('Query failed: ' . mysql_error());
	while ($row = mysql_fetch_row($result, MYSQL_ASSOC)) {
		$text = $row['overall_t'];
		$pre_text = "<div class=\"row\"><div class=\"hero-unit\"><center><div style = \"font-size: 30px;\">";
		$post_text ="</div></center></div></div>";
		echo $pre_text.$text.$post_text;
	}
?>           	
	          	<!--<h2 class="webFont">Comment Anonymously</h2>-->	          		          	
	          	
	        </div>        
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