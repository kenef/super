<?php
        include 'includes/connections.php';
//counting available devs
        $query = "SELECT clients FROM devs WHERE status=1 AND clients=0";
        $queryResult = mysql_query($query, $con);
        $devs = mysql_num_rows($queryResult);
        //echo $devs;

        session_start();
        $_SESSION['devs'] = $devs;
?>
<!doctype html>
<html class="no-js" lang="en">
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Super Fast Developer</title>
		<link rel="stylesheet" href="stylesheets/app.css" />
		<link href='https://fonts.googleapis.com/css?family=Abel' rel='stylesheet' type='text/css'>
		<script src="js/jquery-1.11.3.min.js"></script>
	</head>
	<header>

	</header>
	<body>
        <div class="banner">
        	<div class="merchants">
        			<img src="images/secured_by_pp.png" alt="Secured By PayPal" width="120px" />
        			<img src="images/Powered-By-Stripe.png" alt="Powered By Stripe" width="120px" />
        	</div>
        	<h1>Super Fast Development</h1>
        	<div class="banner-content">
        		<div class="banner-left">
        			<h3>Emergency Fix</h3>
        			<p>On demand developers for when your site crashes, something
        			 goes wrong or you just want something fixed right now.</p>
        		</div>
        		<div class="banner-middle">
        			<h3>Expert American Devs</h3>
        			<p>All our developers have at least 3 years of professional 
        				programming experience and sometimes, degrees.</p>
        		</div>
        		<div class="banner-right">
        			<h3>$200 Per Hour</h3>
        			<p>Immediate, simple and confidential. You get our undivided attention at $200 per hour.</p>
        		</div>
        	</div>
        	<div class="banner-timer">
        		<div class="timer">
        			<h1><?php echo $devs;?> Devs on Standby</h1>
        		</div>
        	</div>
        </div>

