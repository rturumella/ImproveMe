<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Write Your Review</title>
<link rel="stylesheet" type="text/css" href="view.css" media="all">
<script type="text/javascript" src="view.js"></script>

</head>
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


<body id="main_body" >

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

              </li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
	
	<img id="top" src="top.png" alt="">
	<div id="form_container">
<?php
if ($_POST["isSubmitted"]) {
	include_once "connect_db.php";
	$user_id = $_POST['user_id'];
	$soc_score = $_POST['SociabilityScore'];
	$hum_score = $_POST['HumorScore'];
	$hon_score = $_POST['HonestyScore'];
	$att_score = $_POST['AttentivenessScore'];
	$fit_score = $_POST['FitnessScore'];
	$spon_score = $_POST['SpontaneousScore'];
	$ovr_txt = $_POST['OverallTxt'];
	$soc_txt = $_POST['SociabilityText'];
	$hum_txt = $_POST['HumorText'];
	$hon_txt = $_POST['HonestyText'];
	$att_txt = $_POST['AttentiveText'];
	$fit_txt = $_POST['FitnessText'];
	$spon_txt = $_POST['SpontaneousText'];
	$query = "INSERT INTO REVIEWS ".
	"(fb_id, sociability_i, humor_i, health_i,honesty_i, attentive_i, spontaneous_i, " .
	"overall_t, sociability_t, humor_t,".
	"health_t, honesty_t, attentive_t, spontaneous_t) " .
	"VALUES ($user_id, \"$soc_score\", \"$hum_score\", \"$hon_score\", \"$att_score\",\"$fit_score\", \"$spon_score\", \"$ovr_txt\", \"$soc_txt\", " .
	"\"$hum_txt\", \"$hon_txt\", \"$att_txt\", \"$fit_txt\", \"$spon_txt\");";
	$result = mysql_query($query) or die('Query1 failed: ' . mysql_error());

	$query = "SELECT AVG(sociability_i) as sociability, AVG(humor_i) as humor, AVG(health_i) as health," .
	 "AVG(honesty_i) as honesty, AVG(attentive_i) as attentive, AVG(spontaneous_i) as spontaneous " .
	 "FROM reviews WHERE fb_id=\"$user_id\"";
	 $result = mysql_query($query) or die('Query2 failed: ' . mysql_error());
	while($row = mysql_fetch_row($result)) {
		$r0 = round($row[0]);
		$r1 = round($row[1]);
		$r2 = round($row[2]);
		$r3 = round($row[3]);
		$r4 = round($row[4]);
		$r5 = round($row[5]);
		$query = "DELETE FROM profile WHERE id=$user_id";
		mysql_query($query) or die('Query3failed: ' . mysql_error());
		$query = "INSERT INTO profile (id, sociability, humor, health, honesty, attentive, spontaneous ) ".
		"VALUES ($user_id, $r0, $r1, $r2, $r3, $r4, $r5)";
		 mysql_query($query) or die('Query3 failed: ' . mysql_error());
		 //echo "query3: ".$query;	
	}
	mysql_close($con);
	echo "<script type='text/javascript'>window.location = \"https://improveme.herokuapp.com/home.php?id=".$user_id."\";</script>";
} else {
	$user_id = $_GET['id'];
?>	
		<h1><a>Write Your Review</a></h1>
		<form id="form_452478" class="appnitro"  method="post" action="">
			<input type = "hidden" id="isSubmitted" name="isSubmitted" value="yes"</input>
			<input type = "hidden" id="user_id"  name="user_id" value=
			<?php echo "$user_id";
			?>></input>
			<div class="form_description">
			<h2 class="webFont" >Write Your Review</h2>
			<p>Comment anonymously on this person.</p>
		</div>					
			<ul >
			
					<li id="li_1" >
		<label class="description" for="element_1">Overall comments: </label>
		<div>
			<textarea id="OverallTxt2" name="OverallTxt" class="element textarea medium"></textarea> 
		</div> 
		</li>		<li id="li_2" >
		<label class="description" for="element_2">Sociability </label>
		<div>
			<input type = "radio" id="element_2" name="SociabilityScore" class="element text small" maxlength="255" value="1"> 1 </input>
			<input type = "radio" id="element_2" name="SociabilityScore" class="element text small" maxlength="255" value="2"> 2 </input>
			<input type = "radio" id="element_2" name="SociabilityScore" class="element text small" maxlength="255" value="3"> 3 </input>
			<input type = "radio" id="element_2" name="SociabilityScore" class="element text small" maxlength="255" value="4"> 4 </input>
			<input type = "radio" id="element_2" name="SociabilityScore" class="element text small" maxlength="255" value="5"> 5 </input> 			
			<br>
			<input id="element_2" name="element_2" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_2"><small>Enter a score between 0-5. Optional: Give additional feedback on how this person can improve on this skill.</small></p> 
		</li>		<li id="li_6" >
		<label class="description" for="element_6">Humor </label>
		<div>
			<input type = "radio" id="element_2" name="HumorScore" class="element text small" maxlength="255" value="1"> 1 </input>
			<input type = "radio" id="element_2" name="HumorScore" class="element text small" maxlength="255" value="2"> 2 </input>
			<input type = "radio" id="element_2" name="HumorScore" class="element text small" maxlength="255" value="3"> 3 </input>
			<input type = "radio" id="element_2" name="HumorScore" class="element text small" maxlength="255" value="4"> 4 </input>
			<input type = "radio" id="element_2" name="HumorScore" class="element text small" maxlength="255" value="5"> 5 </input> 
			<br>		
			<input id="element_6" name="element_6" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_6"><small>Enter a score between 0-5. Optional: Give additional feedback on how this person can improve on this skill.</small></p> 
		</li>		<li id="li_5" >
		<label class="description" for="element_5">Honesty </label>
		<div>
			<input type = "radio" id="element_2" name="HonestyScore" class="element text small" maxlength="255" value="1"> 1 </input>
			<input type = "radio" id="element_2" name="HonestyScore" class="element text small" maxlength="255" value="2"> 2 </input>
			<input type = "radio" id="element_2" name="HonestyScore" class="element text small" maxlength="255" value="3"> 3 </input>
			<input type = "radio" id="element_2" name="HonestyScore" class="element text small" maxlength="255" value="4"> 4 </input>
			<input type = "radio" id="element_2" name="HonestyScore" class="element text small" maxlength="255" value="5"> 5 </input> 
			<br>	
			<input id="element_5" name="element_5" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_5"><small>Enter a score between 0-5. Optional: Give additional feedback on how this person can improve on this skill.</small></p> 
		</li>		<li id="li_4" >
		<label class="description" for="element_4">Attentiveness </label>
		<div>
			<input type = "radio" id="element_2" name="AttentivenessScore" class="element text small" maxlength="255" value="1"> 1 </input>
			<input type = "radio" id="element_2" name="AttentivenessScore" class="element text small" maxlength="255" value="2"> 2 </input>
			<input type = "radio" id="element_2" name="AttentivenessScore" class="element text small" maxlength="255" value="3"> 3 </input>
			<input type = "radio" id="element_2" name="AttentivenessScore" class="element text small" maxlength="255" value="4"> 4 </input>
			<input type = "radio" id="element_2" name="AttentivenessScore" class="element text small" maxlength="255" value="5"> 5 </input> 
			<br>	
			<input id="element_4" name="element_4" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_4"><small>Enter a score between 0-5. Optional: Give additional feedback on how this person can improve on this skill.</small></p> 
		</li>		<li id="li_3" >
		<label class="description" for="element_3">Fitness </label>
		<div>
			<input type = "radio" id="element_2" name="FitnessScore" class="element text small" maxlength="255" value="1"> 1 </input>
			<input type = "radio" id="element_2" name="FitnessScore" class="element text small" maxlength="255" value="2"> 2 </input>
			<input type = "radio" id="element_2" name="FitnessScore" class="element text small" maxlength="255" value="3"> 3 </input>
			<input type = "radio" id="element_2" name="FitnessScore" class="element text small" maxlength="255" value="4"> 4 </input>
			<input type = "radio" id="element_2" name="FitnessScore" class="element text small" maxlength="255" value="5"> 5 </input> 
			<br>	
			<input id="element_3" name="element_3" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_3"><small>Enter a score between 0-5. Optional: Give additional feedback on how this person can improve on this skill.</small></p> 
		</li>		<li id="li_7" >
		<label class="description" for="element_7">Spontaneity </label>
		<div>
			<input type = "radio" id="element_2" name="SpontaneousScore" class="element text small" maxlength="255" value="1"> 1 </input>
			<input type = "radio" id="element_2" name="SpontaneousScore" class="element text small" maxlength="255" value="2"> 2 </input>
			<input type = "radio" id="element_2" name="SpontaneousScore" class="element text small" maxlength="255" value="3"> 3 </input>
			<input type = "radio" id="element_2" name="SpontaneousScore" class="element text small" maxlength="255" value="4"> 4 </input>
			<input type = "radio" id="element_2" name="SpontaneousScore" class="element text small" maxlength="255" value="5"> 5 </input> 
			<br>	
			<input id="element_7" name="element_7" class="element text medium" type="text" maxlength="255" value=""/> 
		</div><p class="guidelines" id="guide_7"><small>Enter a score between 0-5. Optional: Give additional feedback on how this person can improve on this skill.</small></p> 
		</li>
			
					<li class="buttons">
			    <input type="hidden" name="form_id" value="452478" />
			    
				<input id="saveForm" class="button_text" type="submit" name="submit" value="Submit" />
		</li>
			</ul>
		</form>	
		
	</div>
	<img id="bottom" src="bottom.png" alt="">
	</body>
	<footer>
		<center>
        <p>Microsoft Interns 2012 - Georgia Tech - Berkeley - U Michigan - U Penn</p>
		</center>
      </footer>
</html>
<?php
	}
?>
