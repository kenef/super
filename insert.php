<?php
include 'includes/connections.php';
//$message = "<h4>You said:</h4><p>testing from php file</p>";

$message = $_POST['message'];

$realMessage = mysql_real_escape_string($message);
$labledMessage = "<h4>You said:</h4><p>" . $realMessage . "</p>";

//adding most recent message to database
$insertQuery = "INSERT INTO messages (messages) VALUES ('" . $labledMessage . "')";

if (!mysql_query($insertQuery, $con)) {
		die('Error: ' . mysql_error($con));
}

//pulling all messages after adding most recent
$result1 = mysql_query("SELECT messages FROM messages ORDER BY id DESC", $con);

//printing only the messages that are new
/*		$recent = mysql_fetch_array($result1, MYSQL_ASSOC);
		$length = count($recent);
		for($i=0; $i<$length; $i++){
			if($recent[$i] != $_SESSION['mostRecent']){
				echo $recent['messages'];
			}
			else if ($recent == $_SESSION['mostRecent']){
				echo $recent['messages'];
				return;
			}
		}*/

//printing ALL messages in db to the screen
while($extract = mysql_fetch_array($result1, MYSQL_ASSOC)){
  echo $extract['messages'] . "<br />";
}

?>