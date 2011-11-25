<?php
  // setup the db variables
	$db_host="localhost";
	$db_user="";
	$db_pswd="";
	$db_name="unix";
	
	//hook up to my db
	$db_connect = mysql_connect($db_host,$db_user,$db_pswd); 
	if (!$db_connect) {
		echo "Error connecting to database";
		die();
	}
	
	//stop sql injection for $_GET
	
	//stop sql injection for $_POST
	
	// select the database
	mysql_select_db($db_name);
	
?>