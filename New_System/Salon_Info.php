<?php

$mysqlserver ="localhost";
$mysqlusername ="root";
$mysqlpassword ='';
$dbname = "hair_studios";
$con=mysql_connect($mysqlserver,$mysqlusername,$mysqlpassword) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db($dbname,$con) or die("Failed to connect to MySQL: " . mysql_error());


 $res=mysql_query("SELECT `Studio_Name`,`Address`,`Telephone` FROM `all_studios` WHERE Studio_Name = 'Generale Hair Zone'");
 while($row = mysql_fetch_assoc($res)) 
    { 
$add=$row["Address"] ;
$Tel= $row["Telephone"];

echo $add . ' '. $row["Telephone"]. ' ';
	}


?>