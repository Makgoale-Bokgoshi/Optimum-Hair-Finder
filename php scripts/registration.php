<?php     //start php tag
error_reporting(E_ALL); ini_set('display_errors', 1);
//include connect.php page for database connection
Include('connect.php');
//if submit is not blanked i.e. it is clicked.
If(isset($_REQUEST['submit']))
{
	If($_REQUEST['name']=='' || $_REQUEST['email']=='' || $_REQUEST['password']=='')
	{
		Echo "please fill the empty field.";
	}

	Else
	{
		$sql="insert into all_users(User_Full_Name,User_Email,User_Password) values('".$_REQUEST['name']."', '".$_REQUEST['email']."', '".$_REQUEST['password']."')";
		$res=mysqli_query($con,$sql);
		If($res)
		{
			Echo "Record successfully inserted";
		}
		Else
		{
			Echo "There is some problem in inserting record";
		}
	}
}
?>
