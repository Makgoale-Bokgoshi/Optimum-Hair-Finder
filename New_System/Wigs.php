<<<<<<< HEAD:New_System/Wigs.php


	<html>
	<body> 
	<?php 
	$mysqlserver ="localhost";
$mysqlusername ="root";
$mysqlpassword ='';
$dbname = "hair_studios";
$con=mysqli_connect($mysqlserver,$mysqlusername,$mysqlpassword) or die("Failed to connect to MySQL: " . mysqli_error());
$db=mysqli_select_db($con,$dbname) or die("Failed to connect to MySQL: " . mysqli_error());


    $img_url = "http://www.domain.com/images/"; 
    $result = mysqli_query($con,"SELECT distinct Hairstyle_Picture FROM pricing where Style_ID IN (SELECT Style_ID from hair_styles where Category_ID = 8)");
	///*where Category_ID=1*/
    while($row = mysqli_fetch_assoc($result)) 
    { 
echo '<img src="./Style_Pictures/Wigs/'.$row["Hairstyle_Picture"]. '" width="225" height="200"  style="margin-right: 5px "/>';
        
    }
	?>
	</body>
	</html>
=======


	<html>
	<body> 
	<?php 
	$mysqlserver ="localhost";
$mysqlusername ="root";
$mysqlpassword ='';
$dbname = "hair_studios";
$con=mysqli_connect($mysqlserver,$mysqlusername,$mysqlpassword) or die("Failed to connect to MySQL: " . mysqli_error());
$db=mysqli_select_db($con,$dbname) or die("Failed to connect to MySQL: " . mysqli_error());


    $img_url = "http://www.domain.com/images/"; 
    $result = mysqli_query($con,"SELECT distinct Hairstyle_Picture FROM pricing where Style_ID IN (SELECT Style_ID from hair_styles where Category_ID = 8)");
	///*where Category_ID=1*/
    while($row = mysqli_fetch_assoc($result)) 
    { 
echo '<a href="#" data-toggle="modal" data-target="#myModal4" ><img src="./Style_Pictures/Wigs/'.$row["Hairstyle_Picture"]. '" width="225" height="200"  style="margin-right: 5px "/></a>';
        
    }
	?>
	</body>
	</html>
>>>>>>> c1ac01a71d62aa50b6322fe9587488a1c19ee2cd:The%2520UI/Wigs.php
