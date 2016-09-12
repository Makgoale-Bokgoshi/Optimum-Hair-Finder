<?php
	$mysqlserver ="localhost";
	$mysqlusername ="root";
	$mysqlpassword ='';
	$dbname = "hair_studios";
	
	$con=mysql_connect($mysqlserver,$mysqlusername,$mysqlpassword) or die("Failed to connect to MySQL: " . mysql_error());
	$db=mysql_select_db($dbname,$con) or die("Failed to connect to MySQL: " . mysql_error());	
?>