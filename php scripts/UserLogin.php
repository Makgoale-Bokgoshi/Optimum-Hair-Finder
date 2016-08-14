<?php     //start php tag
error_reporting(E_ALL); ini_set('display_errors', 1);
//include connect.php page for database connection
Include('connect.php');
//if submit is not blanked i.e. it is clicked.


if(isset($_POST['submit']))
{
	$query = mysqli_query($con,"SELECT *  FROM all_users where User_Email = '$_POST[email]' AND User_Password = '$_POST[password]'") or die(mysql_error());
	$row = mysqli_fetch_array($query);
	if(!empty($row['User_Email']) AND !empty($row['User_Password']))
	{
		$_SESSION['User_Email'] = $row['User_Password'];
		echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";

	}
	else
	{
		echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
	}
}






?>
