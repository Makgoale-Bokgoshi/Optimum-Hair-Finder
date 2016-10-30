<!doctype html>

<?php
	include_once 'define.php';
	include_once 'functions.php';
?>

<html>
	<head></head>
	
	<body>
		<div>
			<h1>Search for Hair Salons</h1>
				<h2>Choose HairStyle</h2>
					<form method = "POST" action = "call.php">
						
						<select name ="hairstyle" >
							<option value="-- Select HairStyle --">-- Select HairStyle --</option>
							<?php
								hairstyleopt();
							?>
							
						</select>
				
				<h2>Choose Location</h2>
						<select name = "location" id = "location">
							<option value="-- Select Location --">-- Select Location --</option>
							<?php
								locationopt();
							?>
							
						</select>
						
				<h2>Choose MinPrice</h2>		
						<select name = "minprice" id = "MinPrice">
							<option value="-- Select MinPrice --">-- Select MinPrice --</option>
							<?php
								minpriceopt();
							?>
							
						</select>
						
				<h2>Choose MaxPrice</h2>		
						<select name = "maxprice" id = "MaxPrice">
							<option value="-- Select MaxPrice --">-- Select MaxPrice --</option>
							<?php
								maxpriceopt();
							?>
							
						</select>
						<br/>
						<br/>
						
						
						<input type="submit" name = "submit" onClick = "search.php">
					</form>

							
		</div>
	</body>
</html>