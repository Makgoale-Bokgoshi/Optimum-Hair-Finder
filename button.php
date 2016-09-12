<!DOCTYPE HTML>
<html>
<head>
<title>Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="google-signin-scope" content="profile email">
<meta name="google-signin-client_id" content="13248507629-qm3uctmco2pqvi8f33oht28qrh79jpol.apps.googleusercontent.com">
<script src="https://apis.google.com/js/platform.js" async defer></script>
<meta name="keywords" content="" />
<script type="applijewelleryion/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
<link href="css/font-awesome.css" rel="stylesheet">
<!-- Custom Theme files -->
<script src="js/jquery-1.12.0.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
<?php

	include_once 'func_inc.php';
	
	function whatever(){
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
											echo '<div class="clearfix"></div>
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
	}//end of function whatever
	whatever();
?>
</html>