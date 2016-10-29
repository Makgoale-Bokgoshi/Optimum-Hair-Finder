<?php     //start php tag
error_reporting(E_ALL); ini_set('display_errors', 1);
//include connect.php page for database connection
Include('connect.php');
//if submit is not blanked i.e. it is clicked.
If(isset($_REQUEST['submit']))
{
	If($_POST['name']=='' || $_POST['email']=='' || $_POST['password']==''|| $_POST['name']=='Name' || $_POST['email']=='Email address' || $_POST['password']=='Password')
	{
		
		echo '<script language="javascript">';
	echo 'alert("please fill the empty field.")';
	echo '</script>';
  print "<meta http-equiv=\"refresh\" content=\"0;URL=index01.php\">";
	
		
	}

	Else
	{
		$sql="insert into all_users(User_Full_Name,User_Email,User_Password) values('".$_POST['name']."', '".$_POST['email']."', '".$_POST['password']."')";
		$res=mysqli_query($con,$sql);
		if($res)
		{
		
			echo '<script language="javascript">';
			echo 'alert("Welcome!")';
			echo '</script>';
			print "<meta http-equiv=\"refresh\" content=\"0;URL=startbackup2.php\">";
		}
			
		else
		{
			echo '<script language="javascript">';
			echo 'alert("There is some problem in inserting record")';
			echo '</script>';
			print "<meta http-equiv=\"refresh\" content=\"0;URL=index01.php\">";
				
		}
	 }
}
?>