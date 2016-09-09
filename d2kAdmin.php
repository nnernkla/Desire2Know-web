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

      <div class="gridbox gridmenu">
        </div>
        <div class="gridbox gridmain">
        	 

            <div class="main">
            	<div class="info" align="center">
				<?php
												
					//print("<br/>");
					print("<h2> You are loging in D2K website : </h2>");
					print($_SESSION["sess_picture"]);
					print("<h1>". $_SESSION["sess_firstName"]. " ". $_SESSION["sess_lastName"]. "</h1>");
					print("<h3>Department: ". $_SESSION["sess_department"] . " staff. </h3>");
				?>
				</div>
			</div>				 
		</div>
<?php include('includes/footer.html'); ?>