<!DOCTYPE html>
<html>
<style>
input[type=text], select {
    width: 100%;
    padding: 10px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    
}
input[type=tel], select {
    width: 100%;
    padding: 10px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    
}
input[type=date], select {
	width: 100%;
	padding: 10px 20px;
	margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
select {
width: 100%;
    padding: 10px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>
<body>
<link rel="stylesheet" href="
https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
  
  <script>
  $(document).ready(function() {
    $("#datepicker").datepicker();
  });
  </script>
</head>
<h3>Online Booking</h3>
<h2>Braids</h2>
<img src="one" alt="HairStyle here" style="width:304px;height:228px;">
<div>
  <form action="MakeBooking.php" method="post">
 <div> 
<label for="Full_Name">Full Name</label><br>
    <input type="text" id="Full_Name" name="Full_Name" required><br>
 <label for="Contact_Number">Contact Number</label><br>
    <input type="tel" id="Contact_Number" name="Contact_Number" required><br>

	
 
<label for="Salon ">Select Salon:</label><br>
<select name = 'Studio'required>
<?php 
$mysqlserver ="localhost";
$mysqlusername ="root";
$mysqlpassword ='';
$dbname = "hair_studios";
$con=mysql_connect($mysqlserver,$mysqlusername,$mysqlpassword) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db($dbname,$con) or die("Failed to connect to MySQL: " . mysql_error());

$Studioquery = "Select Studio_Name FROM all_studios";
$Studiores=mysql_query($Studioquery) or die("Query failed");

while($row=mysql_fetch_array($Studiores)) {
$Studio_Name=$row["Studio_Name"];
echo "<option value=$Studio_Name selected>
		$Studio_Name
		</option>";
}
echo "</select>"
?>

	<br> 
	 <label for="Date ">Date</label><br>
    <input type="date" id="Date" name ="Date"required/><br>
	<label for="Time ">Time </label>
<select name="Time" id="time"required>
	<option value="07:30 AM">07:30 AM</option>
	<option value="08:00 AM">08:00 AM</option>
	<option value="08:30 AM">08:30 AM</option>
	<option value="09:00 AM">09:00 AM</option>
	<option value="09:30 AM">09:30 AM</option>
	<option value="10:00 AM">10:00 AM</option>
	<option value="10:30 AM">10:30 AM</option>
	<option value="11:00 AM">11:00 AM</option>
	<option value="11:30 AM">11:30 AM</option>
	<option value="12:00 PM">12:00 PM</option>
	<option value="12:30 PM">12:30 PM</option>
	<option value="01:00 PM">01:00 PM</option>
	<option value="01:30 PM">01:30 PM</option>
	<option value="02:00 PM">02:00 PM</option>
	<option value="02:30 PM">02:30 PM</option>
	<option value="03:00 PM">03:00 PM</option>
	<option value="03:30 PM">03:30 PM</option>
	<option value="04:00 PM">04:00 PM</option>
	<option value="04:30 PM">04:30 PM</option>
	<option value="05:00 PM">05:00 PM</option>
	<option value="05:30 PM">05:30 PM</option>
	<option value="06:00 PM">06:00 PM</option>
	<option value="06:30 PM">06:30 PM</option>
	<option value="0 7:00 PM">07:00 PM</option>
</select>

<label for="Hair Length ">Length </label><br>
<select name="Length" id="Hair Length"required>
	<option value="Short">Short</option>
	<option value="Medium">Medium</option>
	<option value="Long">Long</option>
</select>
	<label for="Hair Thickness ">Thickness </label><br>
<select name="Thickness" id="Hair Thickness" required>
	<option value="Very Thin">Very Thin</option>
	<option value="Thin">Thin</option>
	<option value="Medium">Medium</option>
	<option value="Thick">Thick</option>
	<option value="Very Thick">Very Thick</option>
</select>
	
 <input type="submit" value="Submit">
 
</div>
  </form>
</div>

</body>
</html>
