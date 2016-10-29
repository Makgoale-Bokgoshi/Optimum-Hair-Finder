<?php
	include_once 'define.php';
	
	function connect(){
		$con = mysql_connect(DBHOST,DBUSER,DBPASS);
		
		if(!$con){
			die('Could not connect' . mysql_error());
		}//end of if statement
	}//end of connect
	
	function close(){
		mysql_close();
	}//end of close function
	
	function checkboxquery(){
		$all_hair = mysql_query("SELECT * FROM hair_categories");
		
		while($results = mysql_fetch_array($all_hair)){
			echo '<option value = "' . $results['Category_ID'] . '">' . $results['Category_Description'] . '</option>';
		}//end of while 
	}//end of query 
	
	
	function numloc(){
		$locquery = "SELECT Studio_Name FROM studio_list WHERE region = $_POST['city']";
		$locnum = mysql_num_rows($locquery);
		return $locnum;
	}//end of numloc
	
	function numhair(){
		$hair = "SELECT studio_list.Studio_Name FROM studio_list, hair_category, hairstyles where hairstyles.Category_ID = $_POST['hair_cate'] and hairstyles.Studio_ID = studio_list.Studio_ID" //Note to Amy, Please define the checkbox in the following manner <select name = "hair_cate">
		$hairnum = mysql_num_rows($hair);
		return $hairnum;
	}//end of numhair
	
	function location(){
		$locquery = "SELECT Studio_Name FROM studio_list WHERE region = $_POST['city']";
		$locnum = mysql_num_rows($locquery);
		$locqueryresults = array();
	
		if(!$locquery){
			die('Failed to produce results'. mysql_error());
		}//end of if statement
	
		while($row = mysql_fetch_array($locquery, MYSQL_ASSOC)){
			//echo '1. {$row['Studio_Name']} <br/>' . '_________________________ <br/>' ;
			$locqueryresults[] = $row;
		}//end of while loop
		return $locqueryresults;
	}//end of location function
	
	
	function haircate(){
		$hair = "SELECT studio_list.Studio_Name FROM studio_list, hair_category, hairstyles where hairstyles.Category_ID = $_POST['hair_cate'] and hairstyles.Studio_ID = studio_list.Studio_ID" //Note to Amy, Please define the checkbox in the following manner <select name = "hair_cate">
		$hairnum = mysql_num_rows($hair);
		$hairresults = array();
	
		if(!$hair){
			die('Failed to produce results'. mysql_error());
		}//end of if statement
	
		while($row = mysql_fetch_array($hair, MYSQL_ASSOC)){
			$hairresults[] = $row;
			//echo '1. {$row['Studio_Name']} <br/>' . '_________________________ <br/>' ;
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
					echo '1. {$locArr['Studio_Name']} <br/>' . '_________________________ <br/>' ;
				}//end of if statement
			}//end of for
		}//end of while
	}//end of printout
?>