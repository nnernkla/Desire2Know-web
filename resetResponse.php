<?php include('includes/unLoginHeader.html');
session_start();
?>
<div class="gridbox gridmain">
            <div class="main">
            	<div class="info" align="center">
            	<?php 
            		extract( $_POST );
	    			$np = trim($npassword);
	    			$userId = $_SESSION['sess_userId'];
	    			$userId = trim($userId);
	    			
	    			if(!($database = mysql_connect("localhost", "cs401g3", "cs401g3")))
						die("could not connect to database </body></html>");
					
					if( !mysql_select_db("cs401g3", $database))
						die("Could not open fses14g5 database</body></html>");
								

	    			$query = "UPDATE USER SET password = '$np' WHERE userID = '$userId'";
								
					if(!($result = mysql_query($query)))
							trigger_error("Failed to change password, please try again!");	
					else
						print('<h3>Successfully changing password!</h3>');
            	?>
            	
            	<p><a href="index.php">[back]</a></p>
				<?php
															
				?>
				</div>
			</div>				 
		</div>
<?php include('includes/footer.html'); ?>