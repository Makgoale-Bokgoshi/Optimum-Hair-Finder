<?php
	include_once 'define.php';
	
	function hairstyle(){
		$all_hair = mysql_query("SELECT hair_styles.Style_ID, hair_styles.Style_Description FROM hair_styles ORDER BY Style_Description ASC");
		
		while($results = mysql_fetch_array($all_hair)){
			$description = $results['Style_Description'];
			$styleID = $results['Style_ID'];
			echo "<option value = $styleID> $description </option>";
		}//end of while 
	}//end of query 
	
	function minprice(){
		$min_price = mysql_query("SELECT DISTINCT Min_Price FROM pricing order by Min_Price ASC");
		
		while($results = mysql_fetch_array($min_price)){
			$Min = $results['Min_Price'];
			echo "<option value = $Min> $Min </option>";
		}//end of while 
		
	}//end of minprice
	
	function maxprice(){
		$max_price = mysql_query("SELECT DISTINCT Max_Price FROM pricing ORDER BY Max_Price ASC");
		
		while($results = mysql_fetch_array($max_price)){
			$Max = $results['Max_Price'];
			echo "<option value = $Max> $Max </option>";
		}//end of while
	}//end of maxprice
	
	$min = $_POST['min_price'];
	$max = $_POST['max_price'];
	$hair = $_POST['hair_style'];
	
	function priceSearch($min, $max, $hair){
		
		
		if(isset($_POST['shair'])){
			$sql = "SELECT DISTINCT all_studios.Studio_Name
				FROM all_studios, pricing, hair_styles
				WHERE all_studios.Studio_ID = pricing.Studio_ID 
				AND pricing.Style_ID = '$hair_style'    
				AND pricing.Min_Price >= '$min_price'
				AND pricing.Max_Price <= '$max_price'"; 
				//sql code to select all studio names that have the same Studio_ID in all_studios as in pricing
				//and the Studio_ID in all_studios must match with the value in the  hairstyles dropdrop list 
				//and the price must be below or equal to the max price specified by the user 
				//and the price must be above or equal to the min price specified by the user
			
			$hair_query = mysql_query($sql);
			
			while($row = mysql_fetch_array($hair_query, MYSQL_ASSOC)){
				$var = $row['Studio_Name'];
				echo '$var <br/>' . '_________________________ <br/>' ;
			}//end of while loop
		}//end of if statement
		
				
	}//end of priceSearch function
?>