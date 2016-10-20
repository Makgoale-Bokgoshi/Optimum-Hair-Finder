
<html>
<body> 
<?php 
$mysqlserver ="localhost";
$mysqlusername ="root";
$mysqlpassword ='';
$dbname = "hair_studios";
$con=mysql_connect($mysqlserver,$mysqlusername,$mysqlpassword) or die("Failed to connect to MySQL: " . 
mysql_error());
$db=mysql_select_db($dbname,$con) or die("Failed to connect to MySQL: " . mysql_error());

   // $img_url = "http://www.domain.com/images/"; 
    $result = mysql_query("SELECT * from pricing where Min_Price>=150 and Max_Price<300");
    
    while($row = mysql_fetch_assoc($result)) 
    { 
echo '<img src="./Style_Pictures/'.$row["Hairstyle_Picture"]. '" width="225" height="200"  
style="margin-right: 5px " onclick="showX(src,.$row1[""])"/>';
        
    }
	?>
	</body>
	</html>
