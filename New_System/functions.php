<?php	
	function minpriceopt(){
		include 'define.php';
		$minpr = mysqli_query($con,"SELECT DISTINCT Min_Price FROM pricing order by Min_Price ASC");
		
		while($results = mysqli_fetch_array($minpr)){
			$min = $results['Min_Price'];
			echo "<option value = $min> $min </option>";
		}
	}
	
	function locationopt(){
		include 'define.php';
		$loc = mysqli_query($con,"SELECT DISTINCT Region FROM all_studios order by Region ASC");
		
		while($results = mysqli_fetch_array($loc)){
			$location = $results['Region'];
			echo "<option value = $location> $location </option>";
		}//end of while
	}//end of minpriceopt
	
	function maxpriceopt(){
		include 'define.php';
		$maxpr = mysqli_query($con,"SELECT DISTINCT Max_Price FROM pricing order by Max_Price ASC");
		
		while($results = mysqli_fetch_array($maxpr)){
			$max = $results['Max_Price'];
			echo "<option value = $max> $max </option>";
		}//end of while
	}//end of maxpriceopt
	
	function hairstyleopt(){
		include 'define.php';
		$all_hair = mysqli_query($con,"SELECT hair_styles.Style_ID, hair_styles.Style_Description FROM hair_styles ORDER BY Style_Description");
		
		while($results = mysqli_fetch_array($all_hair)){
			$description = $results['Style_Description'];
			$StyleID = $results['Style_ID'];
			echo "<option value = $StyleID> $description </option>";
		}//end of while
	}//end of hairstyle
	
	
	function search($hair, $loc, $min, $max){
		include 'define.php';
		errorInput();
		
		if(isset($_POST['hairstyle']) and $_POST['minprice']=="" and $_POST['maxprice']== "" and $_POST['location']==""){
			
			$query = mysqli_query($con,"SELECT DISTINCT all_studios.Studio_Name, all_studios.Telephone, all_studios.Studio_ID
									FROM all_studios, pricing
									WHERE pricing.Style_ID = '$hair'
									AND pricing.Studio_ID = all_studios.Studio_ID");
		}//end of if statement
		elseif(isset($_POST['location'])and $_POST['minprice']=="" and $_POST['maxprice']== "" and $_POST['hairstyle']==""){
			$query = mysqli_query($con,"SELECT DISTINCT all_studios.Studio_Name, all_studios.Telephone, all_studios.Studio_ID
									FROM all_studios
									WHERE region = '$loc'");
		}//end of else if
		elseif(isset($_POST['hairstyle']) and isset($_POST['minprice']) and $_POST['maxprice']== "" and $_POST['location']==""){
			$query = mysqli_query($con,"SELECT DISTINCT all_studios.Studio_Name, all_studios.Telephone, all_studios.Studio_ID
									FROM all_studios, pricing
									WHERE pricing.Min_Price >= '$min'
									AND pricing.Studio_ID = all_studios.Studio_ID
									AND pricing.Style_ID = '$hair'");
			
		}//end of else if
		elseif(isset($_POST['hairstyle']) and isset($_POST['maxprice']) and $_POST['minprice']== "" and $_POST['location']==""){
			$query = mysqli_query($con,"SELECT DISTINCT all_studios.Studio_Name, all_studios.Telephone, all_studios.Studio_ID
									FROM all_studios, pricing
									WHERE pricing.Max_Price <= '$max'
									AND pricing.Studio_ID = all_studios.Studio_ID
									AND pricing.Style_ID = '$hair'");
			
		}//end of else if
		elseif(isset($_POST['hairstyle']) and isset($_POST['minprice']) and isset($_POST['maxprice']) and $_POST['location']==""){
			$query = mysqli_query($con,"SELECT DISTINCT all_studios.Studio_Name, all_studios.Telephone, all_studios.Studio_ID
									FROM all_studios, pricing
									WHERE pricing.Min_Price >= '$min'
									AND pricing.Max_Price <= '$max'
									AND pricing.Studio_ID = all_studios.Studio_ID
									AND pricing.Style_ID = '$hair'");
			
		}//end of else if
		elseif(isset($_POST['hairstyle']) and isset($_POST['location']) and $_POST['minprice']=="" and $_POST['maxprice']== ""){
			$query = mysqli_query($con,"SELECT DISTINCT all_studios.Studio_Name, all_studios.Telephone, all_studios.Studio_ID
									FROM all_studios, pricing
									WHERE all_studios.region = '$loc'
									AND pricing.Studio_ID = all_studios.Studio_ID
									AND pricing.Style_ID = '$hair'");
									
		}//end of else if
		elseif(isset($_POST['hairstyle']) and isset($_POST['location']) and isset($_POST['minprice']) and $_POST['maxprice']== ""){
			$query = mysqli_query($con,"SELECT DISTINCT all_studios.Studio_Name, all_studios.Telephone, all_studios.Studio_ID
									FROM all_studios, pricing
									WHERE all_studios.region = '$loc'
									AND pricing.Studio_ID = all_studios.Studio_ID
									AND pricing.Style_ID = '$hair'
									AND pricing.Min_Price >= '$min'");
									
		}//end of else if
		elseif(isset($_POST['hairstyle']) and isset($_POST['location']) and isset($_POST['maxprice']) and $_POST['minprice']== ""){
			$query = mysqli_query($con,"SELECT DISTINCT all_studios.Studio_Name, all_studios.Telephone, all_studios.Studio_ID 
									FROM all_studios, pricing 
									WHERE all_studios.region = '$loc' 
									AND pricing.Studio_ID = all_studios.Studio_ID 
									AND pricing.Style_ID = '$hair' 
									AND pricing.Max_Price <= '$max'");
									
		}//end of else if
		elseif(isset($_POST['hairstyle']) and isset($_POST['minprice']) and isset($_POST['maxprice']) and isset($_POST['location'])){
			$query = mysqli_query($con,"SELECT DISTINCT all_studios.Studio_Name, all_studios.Telephone, all_studios.Studio_ID
									FROM all_studios, pricing
									WHERE pricing.Min_Price >= '$min'
									AND pricing.Max_Price <= '$max'
									AND pricing.Studio_ID = all_studios.Studio_ID
									AND pricing.Style_ID = '$hair'
									AND all_studios.region = '$loc'");
			
		}//end of else if		
		
		if(!$query){
			die('Failed to produce results'. mysqli_error());
		}//end of if statement
		
		else{
			while($row = mysqli_fetch_assoc($query)){
				$Tel= $row["Telephone"];
				$ID=$row["Studio_ID"] ;
				$var = $row['Studio_Name'];
														echo '<div class="container">
														<div class="details-top">';
														echo '<div class="col-md-6 details-middle wow fadeInUp animated" data-wow-delay=".5s">';
														echo '<h3>' . $var .'</h3>';
														echo $row["Telephone"];
														echo '</div>';
														echo '<div class="col-md-6 details-middle wow fadeInUp animated" data-wow-delay=".5s">';
														
														echo "	<a href='Images.php?id=$ID' class='view'>View Salon Gallery</a>";
																echo '</div>';
																echo '</div>
																</div>
																
																	<div class="clearfix"></div>';
														
														
			}//end of while loop
		}//end of else statemt
		
	}//end of search function
	
	function errorInput(){
		include 'define.php';
		if($_POST['hairstyle'] == "" and $_POST['maxprice'] == "" and $_POST['location'] == "" and $_POST['minprice'] == ""){
			echo '<script>
			alert("Please selct one of the option");
			</script>';
			print "<meta http-equiv=\"refresh\" content=\"0;URL=startbackup2.php\">";
		}
		elseif(isset($_POST['minprice']) and $_POST['hairstyle'] == "" and $_POST['location'] == ""and $_POST['maxprice'] == ""){
			echo '<script>
			alert("Please selct your desired hairstyle or the combination of hairstyle and the minimum price you want to spend ");
			</script>';
			print "<meta http-equiv=\"refresh\" content=\"0;URL=startbackup2.php\">";
			
		}//end of if statement
		elseif(isset($_POST['maxprice'])and $_POST['hairstyle'] == "" and $_POST['location'] == "" and $_POST['minprice'] == ""){
			echo '<script>
			alert("Please selct your desired hairstyle or the combination of hairstyle and the maximum price you are willing to spend");
			</script>';
			print "<meta http-equiv=\"refresh\" content=\"0;URL=startbackup2.php\">";
			
		}
		elseif(isset($_POST['minprice']) and isset($_POST['maxprice']) and $_POST['hairstyle'] == "" and $_POST['location'] == "" ){
			echo '<script>
			alert("Please selct your desired hairstyle ");
			</script>';
			print "<meta http-equiv=\"refresh\" content=\"0;URL=startbackup2.php\">";
			
		}
		elseif(isset($_POST['minprice']) and isset($_POST['location']) and $_POST['hairstyle'] == "" and $_POST['maxprice'] == "" ){
						echo '<script>
			alert("Please selct your desired hairstyle ");
			</script>';
			print "<meta http-equiv=\"refresh\" content=\"0;URL=startbackup2.php\">";
			
			
		}
		elseif(isset($_POST['location']) and isset($_POST['maxprice']) and $_POST['hairstyle'] == "" and $_POST['minprice'] == "" ){
			
				echo '<script>
			alert("Please selct your desired hairstyle ");
			</script>';
			print "<meta http-equiv=\"refresh\" content=\"0;URL=startbackup2.php\">";
			
		}
		elseif(isset($_POST['minprice']) and isset($_POST['maxprice']) and isset($_POST['location']) and $_POST['hairstyle'] == ""){
			echo '<script>
			alert("Please selct your desired hairstyle ");
			</script>';
			print "<meta http-equiv=\"refresh\" content=\"0;URL=startbackup2.php\">";
		}
	}
?>
