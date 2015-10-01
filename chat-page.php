<?php
  	include 'includes/connections.php';
  	include 'includes/php_functions.php';

  	include 'header2.php';
?>
            <div class="four-steps">
        			<ul class="main-nav">
        				<li class="step1"><h3>Step 1</h3><p>basic info</p></li>
        				<li class="step2 active"><h3>Step 2</h3><p>chat with dev</p></li>
        				<li class="step3"><h3>Step 3</h3><p>pay</p></li>
        				<li class="step4"><h3>Step 4</h3><p>relax</p></li>
        			</ul>
        			<hr>
            	
        			<div id="chatbox">
                  <?php 
                    while($row = mysql_fetch_array($issueResult, MYSQL_ASSOC)){
                      echo $row['messages'] . "<br />";
                    }
                  ?>
        			</div>
            		<textarea type="text" class="describe" id="describe" placeholder="Type here" rows="6" required autofocus></textarea>
					       <p>Note: in 99% of the case we need your hosting information. Please have this on hand.</p>
            		<input type="submit" value="Next" id="submitButton" onClick="postMessage();"/>
            	</form>
            </div>
<?php

  include 'footer.php';
?>