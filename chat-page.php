<?php
  	include 'includes/connections.php';
  	include 'includes/php_functions.php';

  	include 'header2.php';
?>

            <div class="four-steps">
				<ul class="main-nav">
					<li class="step1 active"><h3>Step 1</h3><p>basic info</p></li>
					<li class="step2"><h3>Step2</h3><p>chat with dev</p></li>
					<li class="step3"><h3>Step3</h3><p>pay</p></li>
					<li class="step4"><h3>Step4</h3><p>relax</p></li>
				</ul>
				<hr>
            	
    			<?php
    				session_start();
    				$description = $_SESSION['description'];
					echo "<div id=\"chatbox\"><div id=\"userchat\"><h4>You said:</h4><p>" . $description . "</p></div></div><hr>";
				?>
	            	<form method="post" action="PHP_SCRIPTS/START_CHAT.php">
	            		<textarea name="description" class="describe" id="describe" placeholder="Type here" rows="6" required></textarea>
						<p>Note: in 99% of the case we need your hosting information. Please have this on hand.</p>
	            		<input name="submit" type="submit" value="Next" />
	            	</form>
            	
            </div>
<?php
  include 'footer.php';
?>