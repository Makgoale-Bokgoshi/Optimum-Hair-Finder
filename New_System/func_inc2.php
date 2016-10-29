<?php
	include_once 'define.php';
	
	function close(){
		mysqli_close();
	}//end of close function
	
	function checkboxquery(){
		$all_hair = mysqli_query("SELECT * FROM hair_category");
		
		while($results = mysqli_fetch_array($all_hair)){
			$description = $results['Category_Description'];
			$cateID = $results['Category_ID'];
			echo "<option value = $cateID> $description </option>";
		}//end of while 
	}//end of query 
	
	$city = $_POST['city'];
	$hair_cate = $_POST['hair_cate'];
	
	function numloc($city){
		$locquery = "SELECT Studio_Name FROM all_studios WHERE region = '$city'";
		$locnum = mysqli_num_rows($locquery);
		return $locnum;
	}//end of numloc
	
	function numhair(){
		$hair = "SELECT DISTINCT all_studios.Studio_Name 
				FROM all_studios, pricing, hair_category, hair_styles 
				WHERE all_studios.Studio_ID = pricing.Studio_ID 
				AND pricing.Style_ID = hair_styles.Style_ID
				AND hair_styles.Category_ID = '$hair_cate'"; //Note to Amy, Please define the checkbox in the following manner <select name = "hair_cate">
		$hairnum = mysqli_num_rows($hair);
		return $hairnum;
	}//end of numhair
	
	function location(){
		$locquery = "SELECT Studio_Name FROM all_studios WHERE region = '$city'";
		$locnum = mysqli_num_rows($locquery);
		$locqueryresults = array();
	
		if(!$locquery){
			die('Failed to produce results'. mysqli_error());
		}//end of if statement
	
		while($row = mysqli_fetch_assoc($locquery)){
			echo '1. {$row['Studio_Name']} <br/>' . '_________________________ <br/>' ;
			$locqueryresults[] = $row;
		}//end of while loop
		return $locqueryresults;
	}//end of location function
	
	
	function haircate(){
		$hair = "SELECT DISTINCT all_studios.Studio_Name 
				FROM all_studios, pricing, hair_category, hair_styles 
				WHERE all_studios.Studio_ID = pricing.Studio_ID 
				AND pricing.Style_ID = hair_styles.Style_ID
				AND hair_styles.Category_ID = '$hair_cate'"; //Note to Amy, Please define the checkbox in the following manner <select name = "hair_cate">
		$hairnum = mysqli_num_rows($hair);
		$hairresults = array();
	
		if(!$hair){
			die('Failed to produce results'. mysqli_error());
		}//end of if statement
	
		while($row = mysqli_fetch_array($hair, MYSQL_ASSOC)){
			$hairresults[] = $row;
			//echo '1. $row['Studio_Name'] <br/>' . '_________________________ <br/>' ;
		}//end of while loop
		return $hairresults;
	}//end of haircate function
	
	function printout(){
		$hnum = numhair();
		$lnum = numloc();
		
		if($hnum < $lnum){
			$max = $lnum;
		}//end of if
		else{
			$max = $hnum;
		}
		
		$hairArr = haircate();
		$locArr = location();
		
		while($i < $hnum){
			for($j = 0; $j < $lnum; $j++){
				if($hairArr[i] == $locArr[j]){
					$var = $locArr['Studio_Name'];
					echo '$var <br/>' . '_________________________ <br/>' ;
				}//end of if statement
			}//end of for
		}//end of while
	}//end of printout
?>
