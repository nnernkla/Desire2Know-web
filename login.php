<?php
	/*ob_start();
	session_start();
 
	//$username = $_POST['username'];
	//$password = $_POST['password'];
	extract( $_POST );		
		if(!($database = mysql_connect("localhost", "cs401g3", "cs401g3")))
					die("could not connect to database </body></html>");
					
		if( !mysql_select_db("cs401g3", $database))
					die("Could not open fses14g5 database</body></html>");
		$u = trim($username);
		$p = trim($password);
		$query = "SELECT * FROM USER WHERE username = '$u' AND password = '$p'"; 
					
		if(!($result = mysql_query($query, $database)))
		{
			//print("your username/password is incorrect!<br/>");
			//die(mysql_error(). "</body></html>");
			 header('Location: index.html');
		}
		else
		{
			// Redirect to home page after successful login.
			$row = mysql_fetch_array($result);
			
			session_regenerate_id();
			$_SESSION['sess_userID'] = $row['userID'];
			//$_SESSION['sess_firstName'] = $row['firstName'];
			//$_SESSION['sess_lastName'] = $row['lastName'];
			$_SESSION['sess_username'] = $row['username'];
			$_SESSION['sess_password'] = $row['password'];
			$_SESSION['sess_type'] = $row['type'];
			$_SESSION['sess_picture'] = $row['picPath'];			
			session_write_close();
			
			if($_SESSION['sess_type'] == 1)
				header('Location: d2kStudent.php');
			else
				header('Location: d2kAdmin.php');			
		}
*/
	ob_start();
	session_start();
 
		extract( $_POST );		
		if(!($database = mysql_connect("localhost", "cs401g3", "cs401g3")))
					die("could not connect to database </body></html>");
					
		if( !mysql_select_db("cs401g3", $database))
					die("Could not open fses14g5 database</body></html>");
		$u = trim($username);
		$p = trim($password);
		$query = "SELECT * FROM USER WHERE username = '$u' AND password = '$p'"; 
					
		if(!($result = mysql_query($query)))
		{
			//print("your username/password is incorrect!<br/>");
			//die(mysql_error(). "</body></html>");
			 header('Location: index.html');
		}
		else
		{
			// Redirect to home page after successful login.
			$row = mysql_fetch_array($result);
			$userId = $row['userID'];
			$id = $row['ID'];
			$id = trim($id);
			$username = $row['username'];
			$password = $row['password'];
			$type = $row['type'];
			$picture = $row['picPath'];
			
			/*session_regenerate_id();
			$_SESSION['sess_userID'] = $row['userID'];
			$_SESSION['sess_ID'] = $row['ID'];
			$_SESSION['sess_username'] = $row['username'];
			$_SESSION['sess_password'] = $row['password'];
			$_SESSION['sess_type'] = $row['type'];
			$_SESSION['sess_picture'] = $row['picPath'];			
			session_write_close();	*/
		}
		
		$query2 = "SELECT * FROM student WHERE studentID = '$id'";
		if($type == 1){
			$page = 'Location: d2kStudent.php';
			$query2 = "SELECT * FROM student WHERE studentID = '$id'";
		}
		else if($type == 2){
			$page = 'Location: d2kAdmin.php';
			$query2 = "SELECT * FROM admin WHERE adminID = '$id'";
		}
		else{
			$page = 'Location: index.php';
			$query2 = " ";

		}		
		
		if(!($result2 = mysql_query($query2)))
		{
 			header('Location: index.php');
		}
		else
		{
			$row2 = mysql_fetch_array($result2);
			
			session_regenerate_id();
			$_SESSION['sess_firstName'] = $row2['firstName'];
			$_SESSION['sess_lastName'] = $row2['lastName'];
			$_SESSION['sess_department'] = $row2['department'];
			$_SESSION['sess_userID'] = $userId;
			$_SESSION['sess_ID'] = $id;
			$_SESSION['sess_username'] = $username;
			$_SESSION['sess_password'] = $password;
			$_SESSION['sess_type'] = $type;
			$_SESSION['sess_picture'] = $picture;
			session_write_close();
			
			header($page);
		}

?>
 
	   
