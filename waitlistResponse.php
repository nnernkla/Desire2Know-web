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

          <div class="gridbox gridmain">
          <div class="main" align="center">
          <?php
          		extract( $_POST );
	    		$Crn = trim($crn);
	    		$choice = trim($choices);
	    		$id = $_SESSION['sess_ID'];
	    		$FN = $_SESSION['sess_firstName'];
	    		$LN = $_SESSION['sess_lastName'];
	    		$id = trim($id);
	    		$check = false;
	    		
	    		//print($Crn. " ". $choice. " ". $FN. " ". $LN. " ". $id);
											
				if($Crn == "" || $choice == "" )
					header('Location: StudentWaitlist.php');			
							
				if(!($database = mysql_connect("localhost", "cs401g3", "cs401g3")))
					die("could not connect to database </body></html>");
					
				if( !mysql_select_db("cs401g3", $database))
					die("Could not open fses14g5 database</body></html>");
		
				
				if($choice == 1)				
					$query = "INSERT INTO Waitlist (CRN, studentID, studentFirstName, studentLastName) VALUES ('$Crn', '$id', '$FN', '$LN')";
				else
					$query = "DELETE FROM Waitlist WHERE studentID = '$id' AND CRN = '$Crn'";
								
				if(!($result = mysql_query($query))){
					print("failed to update waitlist");	
					die(mysql_error(). "</body></html>");
				}
				else
					$check = true;					
				
				if($check == true){
					$query2 = "SELECT * FROM class WHERE CRN = '$Crn'";	
					if(!($result2 = mysql_query($query2))){
						print("failed to see classes");	
						die(mysql_error(). "</body></html>");
					}//end if
					else{
						$row2 = mysql_fetch_array($result2);
							$depart = $row2['department'];
							$cNum = $row2['classNumber'];
				
						if($choice == 1)
							print("You are currently in the waitlist of : ". $depart. " ".$cNum);	
						
						if($choice == 2)
							print("Your waitlist has been removed from ". $depart." ".$cNum . " class. ");
					}//inner else	
				}//end check					
		
			?>
				<p><a href="d2kStudent.php">[back]</a></p>
							            
            </div>				 
		</div>
<?php include('includes/footer.html'); ?>