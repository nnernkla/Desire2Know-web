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
          <div class="main" align="left" style="margin-left:100px;">
          <h3>Registration Completed!</h3>
          <?php
          		extract( $_POST );
	    		$crn1 = trim($Course1);
	    		$crn2 = trim($Course2);
	    		$crn3 = trim($Course3);
	    		$crn4 = trim($Course4);
	    		$id = $_SESSION['sess_ID'];
	    		$FN = $_SESSION['sess_firstName'];
	    		$LN = $_SESSION['sess_lastName'];
	    		$id = trim($id);

											
				if(($crn1 == "") && ($crn2 == "")&& ($crn3 == "")&&($crn4 == ""))
					header('Location: StudentRegist.php');		

							
				if(!($database = mysql_connect("localhost", "cs401g3", "cs401g3")))
					die("could not connect to database </body></html>");
					
				if( !mysql_select_db("cs401g3", $database))
					die("Could not open fses14g5 database</body></html>");
	
				
				if ($crn1 != ""){
					//$query = "SELECT * FROM class WHERE classNumber = '$courseId'";
					$query = "INSERT INTO Registration (CRN, studentID, studentFirstName, studentLastName) VALUES ('$crn1', '$id', '$FN', '$LN')";
					mysql_query($query);
					
					$query2 = "SELECT * FROM class WHERE CRN = '$crn1'"; 
					$result = mysql_query($query2);
					$row = mysql_fetch_array($result);
					$depart = $row['department'];
					$cNum = $row['classNumber'];
					$cName = $row['className'];
					
					print("<p> ***** Registered *****  " .$depart." ".$cNum. " : " . $cName. "</p>");

				}
				if ($crn2 != ""){
					$query = "INSERT INTO Registration (CRN, studentID, studentFirstName, studentLastName) VALUES ('$crn2', '$id', '$FN', '$LN')";
					mysql_query($query);
					
					$query2 = "SELECT * FROM class WHERE CRN = '$crn2'"; 
					$result = mysql_query($query2);
					$row = mysql_fetch_array($result);
					$depart = $row['department'];
					$cNum = $row['classNumber'];
					$cName = $row['className'];
					
					print("<p> ***** Registered *****  " .$depart." ".$cNum. " : " . $cName. "</p>");

				}
				if($crn3 != ""){
					$query = "INSERT INTO Registration (CRN, studentID, studentFirstName, studentLastName) VALUES ('$crn3', '$id', '$FN', '$LN')";
					mysql_query($query);
					
					$query2 = "SELECT * FROM class WHERE CRN = '$crn3'"; 
					$result = mysql_query($query2);
					$row = mysql_fetch_array($result);
					$depart = $row['department'];
					$cNum = $row['classNumber'];
					$cName = $row['className'];
					
					print("<p> ***** Registered *****  " .$depart." ".$cNum. " : " . $cName. "</p>");

				}
				if($crn4 != ""){
					$query = "INSERT INTO Registration (CRN, studentID, studentFirstName, studentLastName) VALUES ('$crn4', '$id', '$FN', '$LN')";
					mysql_query($query);
					
					$query2 = "SELECT * FROM class WHERE CRN = '$crn4'"; 
					$result = mysql_query($query2);
					$row = mysql_fetch_array($result);
					$depart = $row['department'];
					$cNum = $row['classNumber'];
					$cName = $row['className'];
					
					print("<p> ***** Registered *****  " .$depart." ".$cNum. " : " . $cName. "</p>");

				}					
				/*else
				{							
						$row = mysql_fetch_array($result);
						$clNo = $row['classNumber'];
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
				}*/
			?>
		
     
           
           <p align="center"><a href="d2kStudent.php">[return]</a></p>
            </div>				 
		</div>
<?php include('includes/footer.html'); ?>