<?php 
	$mysqlserver ="localhost";
$mysqlusername ="root";
$mysqlpassword ='';
$dbname = "hair_studios";
$con=mysql_connect($mysqlserver,$mysqlusername,$mysqlpassword) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db($dbname,$con) or die("Failed to connect to MySQL: " . mysql_error());


    $img_url = "http://www.domain.com/images/"; 
    $result = mysql_query("SELECT Hairstyle_Picture,Style_ID FROM pricing where Studio_ID=1");
//    $name = mysql_query("SELECT Style_Description FROM hair_styles where ");
	
    while($row = mysql_fetch_assoc($result)) 
    { echo '<a href="booking.php">';
//	$Sty_ID= $row['Style_ID'];
  // $name = mysql_query("SELECT Style_Description FROM hair_styles where Style_ID='.$Sty_ID' ");
   //$Name2 = mysql_fetch_assoc($name);
echo '<img src="./Style_Pictures/'.$row["Hairstyle_Picture"]. ' "width="225" height="200"  style="margin-right: 5px"/>

/></a>';
        
    }
	?>