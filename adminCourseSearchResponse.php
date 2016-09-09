<?php include('includes/adminHeader.html'); ?>
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
	    		$crn = trim($Crn);
											
				if($crn == "")
					header('Location: CourseSearch.php');			
							
				if(!($database = mysql_connect("localhost", "cs401g3", "cs401g3")))
					die("could not connect to database </body></html>");
					
				if( !mysql_select_db("cs401g3", $database))
					die("Could not open fses14g5 database</body></html>");
					
				$query = "SELECT * FROM class WHERE CRN = '$crn'";
								
				if(!($result = mysql_query($query))){
					print("No class information");	
					die(mysql_error(). "</body></html>");
				}					
				else
				{							
						$row = mysql_fetch_array($result);
						$clNo = $row['classNumber'];
						$depart = $row['department'];
						$clName = $row['className'];
						$clSize = $row['classSize'];
						$wtSize = $row['waitlistSize'];
						$adID = $row['adminID'];
						$day = $row['day'];
						$start = $row['startTime'];
						$end = $row['endTime'];
						$room = $row['room'];
				}
				
				$adId = trim($adID);
				$query2 = "SELECT * FROM admin WHERE adminID = '$adId'";
				if(!($result2 = mysql_query($query2))){
					print("No class information");	
					die(mysql_error(). "</body></html>");
				}
				else
				{							
						$row = mysql_fetch_array($result2);
						$adminFN = $row['firstName'];
						$adminLN = $row['lastName'];
				}
			?>
			<table align="center" style="width:auto; margin-top:auto; margin-bottom:auto; border-bottom-style:outset">
			<tr style="height:30px; width:155px; background-color:#CCCCCC">
				<td><strong><center>ClassID</center></strong></td>
				<td><strong><center>CLassName</center></strong></td>
				<td><strong><center>Capacity</center></strong></td>
				<td><strong><center>Waitlist</center></strong></td>	
				<td><strong><center>Instructor</center></strong></td>
				<td><strong><center>Day</center></strong></td>	
				<td><strong><center>start</center></strong></td>	
				<td><strong><center>End</center></strong></td>	
				<td><strong><center>Location</center></strong></td>
			</tr>

			<?php
				print("<tr><td>$depart $clNo</td><td>$clName</td><td>$clSize</td><td>$wtSize</td><td>$adminFN $adminLN</td><td>$day</td><td>$start</td><td>$end</td><td>$room</td></tr>");
			?>
     
            </table>
            </div>				 
		</div>
<?php include('includes/footer.html'); ?>