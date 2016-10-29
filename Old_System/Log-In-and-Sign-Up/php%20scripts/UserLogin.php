<?php     //start php tag
//include connect.php page for database connection
Include('connect.php');
//if submit is not blanked i.e. it is clicked.

//If($_REQUEST['email']=='' || $_REQUEST['password']=='')//
//{
//Echo "Please fill in all fields.";
//}
//Else
//{
$sql=" select User_Full_Name from all_users where User_Email='laura.magoshi@gmail.com' and User_Password ='aa' " ;
$res=mysql_query($sql);
If($res)
{
Echo "Welcome ";
while($row = mysql_fetch_assoc($res)){
	foreach($row as $cname=>$cvalue){
		print "$cvalue";
	}
}
}
Else
{
Echo "Error in connection";

//}
}
?>