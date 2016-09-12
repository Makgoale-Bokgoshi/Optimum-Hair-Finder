<?php
// Create connection
$con=mysql_connect(localhost,root,'') or die("Failed to connect to MySQL: " . mysql_error());
print "Connected";
$db=mysql_select_db(Hair_Studios,$con) or die("Failed to connect to MySQL: " . mysql_error());//connecting to the database
// Check connection

$sql = "SELECT *  FROM 'all_studios' WHERE Region = 'Braamfontein' ";
$result = mysql_query($sql);

if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {
         echo "<br>  ". $row["Studio_Name"]. "<br>";
     }
} else {
     echo "No Results";
}
//$con->close();
?>