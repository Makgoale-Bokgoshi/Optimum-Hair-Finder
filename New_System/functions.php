<?php	
	include_once 'choice.php';
	
	function minpriceopt(){
		$minpr = mysql_query("SELECT DISTINCT Min_Price FROM pricing order by Min_Price ASC");
		
		while($results = mysql_fetch_array($minpr)){
			$min = $results['Min_Price'];
			echo "<option value = $min> $min </option>";
		}//end of while
	}//end of minpriceopt
	
	function locationopt(){
		$loc = mysql_query("SELECT DISTINCT Region FROM all_studios order by Region ASC");
		
		while($results = mysql_fetch_array($loc)){
			$location = $results['Region'];
			echo "<option value = $location> $location </option>";
		}//end of while
	}//end of minpriceopt
	
	function maxpriceopt(){
		$maxpr = mysql_query("SELECT DISTINCT Max_Price FROM pricing order by Max_Price ASC");
		
		while($results = mysql_fetch_array($maxpr)){
			$max = $results['Max_Price'];
			echo "<option value = $max> $max </option>";
		}//end of while
	}//end of maxpriceopt
	
	function hairstyleopt(){
		$all_hair = mysql_query("SELECT hair_styles.Style_ID, hair_styles.Style_Description FROM hair_styles ORDER BY Style_Description");
		
		while($results = mysql_fetch_array($all_hair)){
			$description = $results['Style_Description'];
			$StyleID = $results['Style_ID'];
			echo "<option value = $StyleID> $description </option>";
		}//end of while
	}//end of hairstyle
	
	
	function search($hair, $loc, $max, $min){
		
		if(isset($_POST['hairstyle'])){
			
			$query = mysql_query("SELECT DISTINCT all_studios.Studio_Name
									FROM all_studios, pricing
									WHERE pricing.Style_ID = '$hair'
									AND pricing.Studio_ID = all_studios.Studio_ID");
		}//end of if statement
		if(isset($_POST['location'])){
			$query = mysql_query("SELECT DISTINCT all_studios.Studio_Name
									FROM all_studios
									WHERE region = '$loc'");
		}//end of else if
		if(isset($_POST['hairstyle']) and isset($_POST['minprice'])){
			$query = mysql_query("SELECT DISTINCT all_studios.Studio_Name
									FROM all_studios, pricing
									WHERE pricing.Min_Price >= '$min'
									AND pricing.Studio_ID = all_studios.Studio_ID
									AND pricing.Style_ID = '$hair'");
		}//end of else if
		if(isset($_POST['hairstyle']) and isset($_POST['maxprice'])){
			$query = mysql_query("SELECT DISTINCT all_studios.Studio_Name
									FROM all_studios, pricing
									WHERE pricing.Max_Price <= '$max'
									AND pricing.Studio_ID = all_studios.Studio_ID
									AND pricing.Style_ID = '$hair'");
		}//end of else if
		if(isset($_POST['hairstyle']) and isset($_POST['minprice']) and isset($_POST['maxprice'])){
			$query = mysql_query("SELECT DISTINCT all_studios.Studio_Name
									FROM all_studios, pricing
									WHERE pricing.Min_Price >= '$min'
									AND pricing.Max_Price <= '$max'
									AND pricing.Studio_ID = all_studios.Studio_ID
									AND pricing.Style_ID = '$hair'");
		}//end of else if
		else if(isset($_POST['hairstyle']) and isset($_POST['location'])){
			$query = mysql_query("SELECT DISTINCT all_studios.Studio_Name
									FROM all_studios, pricing
									WHERE all_studios.region = '$loc'
									AND pricing.Studio_ID = all_studios.Studio_ID
									AND pricing.Style_ID = '$hair'");
		}//end of else if
		else if(isset($_POST['hairstyle']) and isset($_POST['minprice']) and isset($_POST['maxprice']) and isset($_POST['location'])){
			$query = mysql_query("SELECT DISTINCT all_studios.Studio_Name
									FROM all_studios, pricing
									WHERE pricing.Min_Price >= '$min'
									AND pricing.Max_Price <= '$max'
									AND pricing.Studio_ID = all_studios.Studio_ID
									AND pricing.Style_ID = '$hair'
									AND all_studios.region = '$loc'");
		}//end of else if
		
		else{
			errorInput();
		}
		
		if(!$query){
			die('Failed to produce results'. mysql_error());
		}//end of if statement
		else{
			while($row = mysql_fetch_assoc($query)){
				echo $row['Studio_Name']. '<br/> _________________________ <br/>' ;
			}//end of while loop
		}//end of else statemt
		
	}//end of search function
	
	function errorInput(){
		if(isset($_POST['minprice'])){
			echo 'Please selct your desired hairstyle or the combination of hairstyle and the maximum price you want to spend <br/>';
		}//end of if statement
		else if(isset($_POST['maxprice'])){
			echo 'Please selct your desired hairstyle or the combination of hairstyle and the minimum price you are willing to spend <br/>';
		}
		else if(isset($_POST['minprice']) and isset($_POST['maxprice'])){
			echo 'Please selct your desired hairstyle <br/>';
		}
		else if(isset($_POST['minprice']) and isset($_POST['maxprice'])){
			echo 'Please selct your desired hairstyle <br/>';
		}
		else if(isset($_POST['minprice']) and isset($_POST['location'])){
			echo 'Please selct your desired hairstyle <br/>';
		}
		else if(isset($_POST['location']) and isset($_POST['maxprice'])){
			echo 'Please selct your desired hairstyle <br/>';
		}
		else if(isset($_POST['minprice']) and isset($_POST['maxprice']) and isset($_POST['location'])){
			echo 'Please selct your desired hairstyle <br/>';
		}
	}
?>