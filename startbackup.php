<?php
	include 'func_inc.php';
	
?>
<!doctype>
<html>
	<body>
		

		<div class="col-md-7 bann-info wow fadeInRight animated" data-wow-delay=".5s"><!-- Checkboxes -->
			
					<div class="ban-top">
						<form method = "post" action="button.php">
						
						<div class="col-md-7 bann-info wow fadeInRight animated" data-wow-delay=".5s">
			<h2>Search for Salons in Gauteng</h2>
			<div class="ban-top">
				
				<select name="cityB" id="city" onchange="showDiv1()" class="grayTextNormal">
					<option value="-- Select State --">-- Select Location --</option>
					<option value="Braamfontein">Braamfontein</option>
					<option value="Auckland park">Auckland park</option>
					<option value="Newtown">Newtown</option>
					<option value="Bedfordview">Bedfordview</option>
				</select>
					
			</div>
					
			</div>
			<div class = "More1" id="More1" style="display:None;">
				<h2>Search for Salons by Hair Category</h2>
							<select name="hair_cate" id="haircategory" class="grayTextNormal">
								<option value="-- Select State --">-- Select Category --</option>
								<?php
									checkboxquery(); 
								?>
							</select>
					
					<div class="sear">
						<?php
							if (isset($_POST['shair'])){
								$hnum = numhair();
								$lnum = numloc();
		
								$hairArr = haircate();
								$locArr = location();
								$i = 0;
								$j = 0;
								
								while($i < $hnum){
									for($j = 0; $j < $lnum; $j++){
										if($hairArr[$i]['Studio_Name'] == $locArr[$j]['Studio_Name']){
											$var = $hairArr[$i]['Studio_Name'];
											
											
											
											echo '<h3>' . $var .'</h3>';
											echo '<p>Newtown</p>';
				echo '							
				<div class="clearfix"></div>
				<li><i class="fa fa-female"></i></li>
			</div>
			<div class="col-md-3 details-right wow fadeInRight animated" data-wow-delay=".5s">
				<a href="salonDetails.html" ><h5>Map directions</h5></a>
				<a href="hairstyles.html" class="view">View salon details</a>
			</div>
				<div class="clearfix">';
											
											break;
										}//end of if statement
									}//end of for
									$i++;
								}//end of while
							}//end of if isset
						?>
						<input type="submit" name="shair"  value="Search For Salons" class="seabtn">
					
					</div>
			</div>					
			</div>
				</div>
				
					</form>
		</div>
		<script> 
	function showDiv1(){
		document.getElementById('More1').style.display = "block";
	}
	</script>
	</body>

</html>