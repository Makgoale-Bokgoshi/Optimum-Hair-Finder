<?php
	//for connecting to database
	$dbserver = 'localhost';
	$dbusername = 'root';
	
	$conn = mysql_connect($dbserver,$dbusername);
	if(!$conn){
		die('Technical Problems connecting to the server. ' . mysql_error($conn));
	}//end of if statement
	echo 'Connected!';
	
	//mysql_close($conn);//remember to close your database
?>
