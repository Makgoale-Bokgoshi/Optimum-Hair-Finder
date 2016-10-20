<?php
$mysqlserver ="localhost";
$mysqlusername ="root";
$mysqlpassword ='';
$dbname = "hair_studios";

$from=$POST['User_Email'];
$to=$POST['Studio'];
$Subject="Book an Appointment";
$FullName=$POST['Full_Name'];
$Number = $POST['Contact_number'];
$Date=$POST['Date'];
$Time=$POST['Time'];
$Length=$POST['Length'];
$Thickness=$POST['Thickness'];
$message=$FullName."\n\n" .$Number."\n\n".$Date."\n\n".$Time."\n\n".$Length."".$Thickness."\n\n".$POST['message'];
$Copy=$message."\n\n";

if(!filter_var($Email,FILTER_VALIDATE_EMAIL)===false){
	echo("Valid");
}else
{
	echo "invalid";
}
$con=mysql_connect($mysqlserver,$mysqlusername,$mysqlpassword) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db($dbname,$con) or die("Failed to connect to MySQL: " . mysql_error());

$Studioquery = "Select Email Address FROM all_studios where Studio_Name='Optimum Hair Studio'";
$Studiores=mysql_query($Studioquery) or die("Query failed");


mail($to,$Subject,$message);
mail($from,$Subject,$message);




?>