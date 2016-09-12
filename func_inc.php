<?php
	include_once 'define.php';
	
	
	function close(){
		mysql_close();
	}//end of close function
	
	function checkboxquery(){
		$all_hair = mysql_query("SELECT * FROM hair_category");
		
		while($results = mysql_fetch_array($all_hair)){
			$description = $results['Category_Description'];
			$cateID = $results['Category_ID'];
			echo "<option value = $cateID> $description </option>";
		}//end of while 
	}//end of query 
	
	function numloc(){
		if (isset($_POST['cityB'])){
			$city = $_POST['cityB'];
		}//end of if statement
		else {
			$city = $_POST['cityB'];
		}
		
		$locquery = "SELECT Studio_Name FROM all_studios WHERE region = '$city'";
		$sqlloc = mysql_query($locquery);
		$locnum = mysql_num_rows($sqlloc);
		return $locnum;
	}//end of numloc
	
	function numhair(){
		$hair_cate = $_POST['hair_cate'];
		$hair = "SELECT DISTINCT all_studios.Studio_Name 
				FROM all_studios, pricing, hair_category, hair_styles 
				WHERE all_studios.Studio_ID = pricing.Studio_ID 
				AND pricing.Style_ID = hair_styles.Style_ID
				AND hair_styles.Category_ID = '$hair_cate'"; //Note to Amy, Please define the checkbox in the following manner <select name = "hair_cate">
		$sql = mysql_query($hair);
		$hairnum = mysql_num_rows($sql);
		return $hairnum;
	}//end of numhair
	
	function location(){
		$city = $_POST['cityB'];
		
		$locquery = "SELECT Studio_Name FROM all_studios WHERE region = '$city'";
		$queryloc = mysql_query($locquery);
		$locnum = mysql_num_rows($queryloc);
		$locqueryresults = array();
	
		if(!$queryloc){
			die('Failed to produce results'. mysql_error());
		}//end of if statement
	
		while($row = mysql_fetch_assoc($queryloc)){
			//echo $row['Studio_Name']. '<br/> _________________________ <br/>' ;
			$locqueryresults[] = $row;
		}//end of while loop
		return $locqueryresults;
	}//end of location function
	
	
	function haircate(){
		$hair_cate = $_POST['hair_cate'];
		$hair = "SELECT DISTINCT all_studios.Studio_Name 
				FROM all_studios, pricing, hair_category, hair_styles 
				WHERE all_studios.Studio_ID = pricing.Studio_ID 
				AND pricing.Style_ID = hair_styles.Style_ID
				AND hair_styles.Category_ID = '$hair_cate'"; //Note to Amy, Please define the checkbox in the following manner <select name = "hair_cate">
		$queryhair = mysql_query($hair);
		$hairnum = mysql_num_rows($queryhair);
		$hairresults = array();
	
		if(!$queryhair){
			die('Failed to produce results'. mysql_error());
		}//end of if statement
	
		while($row = mysql_fetch_array($queryhair, MYSQL_ASSOC)){
			$hairresults[] = $row;
			//echo $row['Studio_Name']. '<br/>_________________________ <br/>' ;
		}//end of while loop
		return $hairresults;
	}//end of haircate function
	
	function printout(){
		$hnum = numhair();
		$lnum = numloc();
		
		$hairArr = haircate();
		$locArr = location();
		$i = 0;
		$j = 0;
		while($i < $hnum){
			for($j = 0; $j < $lnum; $j++){
				if($hairArr[$i] == $locArr[j]){
					$var = $locArr['Studio_Name'];
					echo $var.' <br/> _________________________ <br/>' ;
					break;
				}//end of if statement
			}//end of for
			$i++;
		}//end of while
	}//end of printout
?>