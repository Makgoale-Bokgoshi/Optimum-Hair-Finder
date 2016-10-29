
<?php 
$mysqlserver ="localhost";
$mysqlusername ="root";
$mysqlpassword ='';
$dbname = "hair_studios";
$con=mysql_connect($mysqlserver,$mysqlusername,$mysqlpassword) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db($dbname,$con) or die("Failed to connect to MySQL: " . mysql_error());

$Studioquery = "Select Studio_Name FROM all_studios";
$Studiores=mysql_query($Studioquery) or die("Query failed");
echo "<select name = 'Studio'>";
while($row=mysql_fetch_array($Studiores)) {
$Studio_Name=$row["Studio_Name"];
echo "<option>
		$Studio_Name
		</option>";
}
echo "</select>"
?>
