

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
    $result = mysql_query("SELECT distinct Hairstyle_Picture FROM pricing where Style_ID IN (SELECT Style_ID from hair_styles where Category_ID = 2)");
	///*where Category_ID=1*/
    while($row = mysql_fetch_assoc($result)) 
    { 
echo '<img src="./Style_Pictures/Cornrows/'.$row["Hairstyle_Picture"]. '" width="225" height="200"  style="margin-right: 5px "/>';
        
    }
	?>
	</body>
	</html>
