

	<html>
	<body> 
	<?php 
	$mysqlserver ="localhost";
$mysqlusername ="root";
$mysqlpassword ='';
$dbname = "hair_studios";
$con=mysql_connect($mysqlserver,$mysqlusername,$mysqlpassword) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db($dbname,$con) or die("Failed to connect to MySQL: " . mysql_error());


    $img_url = "http://www.domain.com/images/"; 
    $result = mysql_query("SELECT Picture FROM hair_styles where Category_ID=3");
	///*where Category_ID=1*/
    while($row = mysql_fetch_assoc($result)) 
    { 
echo '<img src="./Style_Pictures/Braids/'.$row["Picture"]. '" width="225" height="200"  style="margin-right: 5px "/>';
        
    }
	?>
	</body>
	</html>
