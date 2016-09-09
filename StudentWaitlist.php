<?php include('includes/studentHeader.html'); ?>
<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if(!isset($_SESSION['sess_firstName']) || (trim($_SESSION['sess_lastName']) == '')) {
	header("location: index.php");
	exit();
}	
?>

					<div class="gridbox gridmain" >
						<div class="main" align="left" style="margin-left:70px;">
							<h2> <font size="2">Indicate the action you want to take: </font> </h2>
							<form action="waitlistResponse" method="post">
								Course CRN:<br>
								<input type="text" name="crn" id="crn">
								<br>
								<select name="choices" id="choices">
									<option value="1">Add yourself to the waitlist</option>
									<option value="2">Remove name off waitlist</option>
								</select>
								<br><br><button type="submit" value="Submit">Submit</button>
								<button type="Reset" value="Reset">Clear</button>
							</form> 
						</div>				 
						</div>
<?php include('includes/footer.html'); ?>					