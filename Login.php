<?php
Include('connect.php');
	$con=mysql_connect(localhost,root,'') or die("Failed to connect to MySQL: " . mysql_error()); //for connecting to the localhost 
	$db=mysql_select_db(users,$con) or die("Failed to connect to MySQL: " . mysql_error());//connecting to the database

	/*Validating User ID*/
	$User_Email = $_POST['User_Email'];
	$User_Password = $_POST['User_Password'];
	$Confirm_Password = $_POST['Confirm_Password'];
	
	$query = "SELECT User_Password from All_Users WHERE User_Email = '$User_Email' ";
	$result = mysql_query($query);
	
	/*To Verify Password*/
	if($result){
		if($result == $User_Password){
			echo "Correct Credentials";
			/* More Script to be writen for user to access the application*/
		} //end of inner if statement
		else{
			echo "Incorrect password!!";
		}
	}//end of if statement
	else{ //if we did not get a password, meaning that the User_Email is not there, meaning the user doesn't exist 
		echo "User does not exist";
		/*More code to be written for user to register */
	}
?>