<?php
$hostname="localhost"; //local server name default localhost
$username="root";  //mysql username default is root.
$password="";       //blank if no password is set for mysql.
$database="highcharts_php";  //database name which you created
$con=mysqli_connect($hostname,$username,$password,$database);
if(! $con)
{
        die('Connection Failed'.mysql_error());
}

mysqli_select_db( $con,"highcharts_php");

$result = mysqli_query($con,"SELECT * FROM highcharts_php");
while($row = mysqli_fetch_array($result)) {
  echo $row['timespan'] . "\t" . $row['visits']. "\n";
}

mysqli_close($con);
?> 