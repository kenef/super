<?php
	$dbhost = 'localhost:8889';
	$dbuser = 'root';
	$dbpass = 'root';
	$db = 'chatbox';
	
	$con = mysql_connect($dbhost, $dbuser, $dbpass);
	mysql_select_db($db);

	//Create 

	/* // Check connection
	if ($con->connect_error) {
    	die("Connection failed: " . $conn->connect_error);
	} 
	
	echo "Connected successfully";

	*/
	
?>