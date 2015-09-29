<?php
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

        //echo $devInfo['experience'];
?>
<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Super Fast Developer</title>
		<link rel="stylesheet" href="stylesheets/app.css" />
		<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
                <script src="js/jquery-1.11.3.min.js"></script>
	</head>
	<header>

	</header>
	<body class="body-two">
        <div class="banner">
        	<div class="merchants">
        			<img src="images/secured_by_pp.png" alt="Secured By PayPal" width="120px" />
        			<img src="images/Powered-By-Stripe.png" alt="Powered By Stripe" width="120px" />
        	</div>
        	<h1>Chatting with <?php echo $dev; ?></h1>
        	<div class="banner-content">
        		<div class="banner-left">
        			<h3><?php echo $experience;?> Years Experience</h3>
        			<p>Currently Employed at Alopex Interaction Design</p>
        		</div>
        		<div class="banner-middle">
        			<h3><?php echo $degree;?></h3>
        			<p><?php echo $school; ?></p>
        		</div>
        		<div class="banner-right">
        			<h3><?php echo $projects;?> Projects</h3>
        			<p>Saved the day for <?php echo $projects; ?> projects</p>
        		</div>
        	</div>
                <!--
        	<div class="banner-timer">
        		<div class="timer">
        			<h1></h1>
        		</div>
        	</div>
                -->
        </div>

