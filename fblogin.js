  window.fbAsyncInit = function() {
  	FB._https = true;
    FB.init({
      appId      : '312910365471514', // App ID
      channelUrl	: 'https://improveme.heroku.com/channel.html',
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });
    
    
    if (typeof fbInit == "function") {
    	fbInit();
    }
    
    
    // Additional initialization code here
  };

  // Load the SDK Asynchronously
  (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "http://connect.facebook.net/en_US/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));
   
   	
 	var divText = "";
 	var nameFound = "";
 	var nameId = "";
 	var searchName = <?php echo "\"$name\""; ?>;
	function isMatchingName(searchStr, curName) {
		curName = curName.toLowerCase();
		searchStr = searchStr.toLowerCase();
		return (curName.search(searchStr) != -1);
	}
   function fbInit() {
   	FB.login(function(response) {
	   if (response.authResponse) {
	     console.log('Welcome!  Fetching your information.... ');
	     FB.api('/me/friends', function(response) {
	     	document.getElementById("data").innerHTML = "";
	     	var begT = "<div class = \"row\"><div class = \"span12\"><div class=\"hero-unit\"><center>";
	     	var endT = "</center></div></div></div>"
	     	var reviewStr = "<a href=\"review.php\">Review<\a>" ;
	     	for(var i = 0; i < response.data.length; i++) {
	     		if (isMatchingName(searchName, response.data[i].name) == false) {
	     			continue;
	     		}
	     		var profileStr = "<a href=\"https://facebook.com/" + response.data[i].id +  
	     		"\">" + response.data[i].name + "</a>";
          var imgStr = "<img src=\"http://graph.facebook.com/"+ response.data[i].id + "/picture?type=large" + "\">"
	     		divText = divText + begT + imgStr +  profileStr +   endT;
	     	}

	     	document.getElementById("data").innerHTML = divText;

			 });
	   } else {
	     console.log('User cancelled login or did not fully authorize.');
	   }

	})
}