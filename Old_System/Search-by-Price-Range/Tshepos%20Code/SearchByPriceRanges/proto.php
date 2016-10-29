<!doctype html>

<!-- To compile and run this code please have 'define.php', 'func_inc3.php' under one folder -->
<?php
	include_once 'func_inc4.php'; // I included func_inc3.php which is totally different to func_inc2.php
?>
<html>
	<body>
		<form action="func_inc3.php" method = "post">
			<div class="col-md-7 bann-info wow fadeInRight animated" data-wow-delay=".5s">
						<h2>Select Hair Style</h2>
							<select name="hair_style" id="hairsytle" class="grayTextNormal">
								<option value="-- Select Style --">-- Select hairstyle --</option>
									<?php
										hairstyle(); //value = Style_ID
									?>
							</select>
							
						<h2>Select Minimum Price you Want to Pay</h2>	
							<select name="min_price" id="minprice" class="grayTextNormal">
								<option value="-- Select Min Price --">-- Select Min Price --</option>
									<?php
										 minprice();
									?>
							</select>
							
						<h2>Select Maximum Price you Want to Pay</h2>
							<select name="max_price" id="maxprice" class="grayTextNormal">
								<option value="-- Select Max Price --">-- Select Max Price --</option>
									<?php
										 maxprice();
									?>
							</select>
							<br/>
							<br/>
						<input type="submit" name="shair" onclick="#More" value="Search For Salons" class="seabtn">
			</div>
			
		</form>
		
		
	</body>
</html>