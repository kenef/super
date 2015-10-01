<?php
	//include 'includes/connections.php';
//connecting database
	$dbhost = 'localhost:8889';
	$dbuser = 'root';
	$dbpass = 'root';
	$db = 'chatbox';
	
	$con = mysql_connect($dbhost, $dbuser, $dbpass);
	mysql_select_db($db);

//storing the issue as a session variable and as php variable
	$_SESSION['description'] = $_POST['description'];
	$issue = $_SESSION['description'];
	$issue = mysql_real_escape_string($issue);
	$labledIssue = "<h4>You said:</h4><p>" . $issue . "</p><br />";
	
//Generating  and storing random user id
	$user = rand(100, 199);
	$_SESSION['user'] = $user;

	$query = "INSERT INTO messages (user, messages) VALUES ('" . $user . "', '" . $labledIssue . "')";

	if (!mysql_query($query, $con)) {
			die('Error: ' . mysql_error($con));
	}

//finding available dev with 0 clients
	$devSearch = "SELECT* FROM devs WHERE status=1 AND clients=0 LIMIT 1";
	$result = mysql_query($devSearch, $con);
	$devInfo = mysql_fetch_assoc($result);//devInfo is an asoc array with id, name, status and clients

	session_start();
	$_SESSION['dev'] = $devInfo['name'];
	$_SESSION['experience'] = $devInfo['experience'];
	$_SESSION['degree'] = $devInfo['degree'];
	$_SESSION['projects'] = $devInfo['projects'];
	$_SESSION['school'] = $devInfo['school'];

	header('location: ../chat-page.php');

	//exit;

?>