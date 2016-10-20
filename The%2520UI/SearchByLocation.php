<?php
	include 'connect.php';
	
	$sql = 'SELECT Studio_Name FROM studio_list WHERE region = $_POST['city']';
	// error might be <select name = "" id = "city">
	$query = mysql_query($con, $sql);
	
	if(!$query){
		die('Failed to produce results'. mysql_error($con));
	}//end of if statement
	
	while($row = mysql_fetch_array($query, MYSQL_ASSOC)){
		echo '1. {$row['Studio_Name']} <br/>'.
			'_________________________ <br/>' ;
	}//end of while loop
	mysql_close();
?>