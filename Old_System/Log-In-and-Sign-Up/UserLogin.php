<?php     //start php tag
error_reporting(E_ALL); ini_set('display_errors', 1);
//include connect.php page for database connection
Include('connect.php');
//if submit is not blanked i.e. it is clicked.


if(isset($_POST['submit']))
{
	If($_POST['email']=='' || $_POST['password']=='' || $_POST['email']=='Email address' || $_POST['password']=='Password')
	{
		
		echo '<script language="javascript">';
	echo 'alert("please fill the empty field.")';
	echo '</script>';	
	print "<meta http-equiv=\"refresh\" content=\"0;URL=index01.php\">";
	}
	
	else{
	$query = mysqli_query($con,"SELECT *  FROM all_users where User_Email = '$_POST[email]' AND User_Password = '$_POST[password]'") or die(mysql_error());
	$row = mysqli_fetch_array($query);
	if(!empty($row['User_Email']) AND !empty($row['User_Password']))
	{
		$query = "SELECT User_Full_Name FROM all_users where User_Email = '$_POST[email]' AND User_Password = '$_POST[password]'";
		$result = mysqli_query($con,$query);
		if (mysqli_num_rows($result) == 1) 
		{ 
			while($row = mysqli_fetch_array($result)) 
			{
				
				print "<meta http-equiv=\"refresh\" content=\"0;URL=startbackup2.php\">";

				 
			}
		} 

	}
	else
	{
	echo '<script language="javascript">';
	echo 'alert("SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...")';
	echo '</script>';
	print "<meta http-equiv=\"refresh\" content=\"0;URL=index01.php\">";
		
	}
	}
}






?>