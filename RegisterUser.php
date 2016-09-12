<?php //connecting to the database 
$con=mysql_connect(localhost,root,'') or die("Failed to connect to MySQL: " . mysql_error());
 $db=mysql_select_db(users,$con) or die("Failed to connect to MySQL: " . mysql_error());
 //inserting Record to the database 
 $User_Email = $_POST['User_Email'];
 $User_Full_Name = $_POST['User_Full_Name'];
 $User_Password = $_POST['User_Password'];
 
 
 $query = "INSERT INTO All_Users(User_ID,User_Email,User_Full_Name,State)VALUES($User_ID,'$User_Email','$User_Full_Name','$User_Password',1)";
 $result = mysql_query($query);
 if($result) 
 { 
 echo "Successfully updated database";
 } 
 else {
 die('Error: '.mysql_error($con)); 
 } 
 mysql_close($con); ?>
