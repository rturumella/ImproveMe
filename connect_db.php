<?php
    $con = mysql_connect(
            $server = "us-cdbr-east.cleardb.com",
            $username = "b677b793190802",
            $password = "d2e4924b");
	if (!$con) {
		die('could not connect:'.mysql_error());
	}
    $db = "heroku_fad4ce7a1c4af8a";
    
    mysql_select_db($db, $con);
	$category = array("sociability", "humor", "health", "honesty", "attentive", "spontaneous");
	
?>