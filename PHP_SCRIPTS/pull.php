<?php
	
	//connections to database
    include 'includes/connections';
    session_start();
    $dev = $_SESSION['dev'];
    $experience = $_SESSION['experience'];
    $degree = $_SESSION['degree'];
    $projects = $_SESSION['projects'];
    $school = $_SESSION['school'];

    $query = "SELECT* FROM devs WHERE name='" . $dev . "'";

    //pull in dev's info as assoc array
    $result = mysql_query($query, $con);
    $devInfo = mysql_fetch_assoc($result);

    //pull issue for beginning of chat
    $issueQuery = "SELECT messages FROM messages ORDER BY id DESC";
    $issueResult = mysql_query($issueQuery, $con);

?>