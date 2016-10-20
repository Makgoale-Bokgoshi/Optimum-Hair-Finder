<?php     //start php tag
error_reporting(E_ALL); ini_set('display_errors', 1);
//include connect.php page for database connection
Include('define.php');
//if submit is not blanked i.e. it is clicked.
If(isset($_REQUEST['submit']))
{
	If( $_POST['password']=='Password')
	{
		
		echo '<script language="javascript">';
	echo 'alert("please fill the empty field.")';
	echo '</script>';
  print "<meta http-equiv=\"refresh\" content=\"0;URL=index01.php\">";
	
		
	}

	Else
	{
		$sql="UPDATE all_users SET User_Password=$_POST['password'] WHERE User_Email=$_POST['name'] ;
		$res=mysqli_query($con,$sql);
		if($res)
		{
		
			echo '<script language="javascript">';
			echo 'alert("Successfully Changed")';
			echo '</script>';
			print "<meta http-equiv=\"refresh\" content=\"0;URL=startbackup2.php\">";
		}
			
		else
		{
			echo '<script language="javascript">';
			echo 'alert("There is some problem in Updating password")';
			echo '</script>';
			print "<meta http-equiv=\"refresh\" content=\"0;URL=index01.php\">";
				
		}
	 }
}
?>