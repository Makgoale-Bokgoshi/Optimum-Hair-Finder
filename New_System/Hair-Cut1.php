<?php session_start();?>
<!DOCTYPE HTML>
<html>
<head>
<title>Gallery</title><link rel='shortcut icon' href='favicon.ico'/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<script src="js/modal.js"></script>
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
<script src="js/modal.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->


<script>
    var expanded = false;
    function showCheckboxes() {
        var checkboxes = document.getElementById("checkboxes");
        if (!expanded) {
            checkboxes.style.display = "block";
            expanded = true;
        } else {
            checkboxes.style.display = "none";
            expanded = false;
        }
    }
</script>
</head>
<body>
<!-- top-header -->
<div class="top-header">
	<div class="container">
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 			
			<li class="sig"><a href="#"  ><?php 

			$name = $_SESSION['res'];
			echo $name;?></a></li> 
			<li class="sigi"><a href="index01.php" >  Sign out</a></li>
        </ul>
		<div class="clearfix"></div>
	</div>
</div>
<!--- /top-header ---->
<!--- footer-btm ---->
<div class="footer-btm wow fadeInLeft animated" data-wow-delay=".5s">
		<div class="container">
				<div class="navigation">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						<div style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;" class="logo wow fadeInDown animated animated" data-wow-delay=".5s">
			<a href="index01.html"><img src="images/logo.jpg" class="img-responsive" alt=""></a>	
		</div>
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						</div>	
					</nav>
				</div>
		
		<div class="clearfix"></div>
	</div>
</div>
<div class="agent">
<div class="ag-bt"><h3 style="text-align: -moz-center;">Gallery</h3> </div>
	<div class="container"style="/*! border: blue; */border: 1px solid rgba(183, 209, 224, 0.6);">
	
<?php

include 'define.php';
	$var=$_GET['id'];
	$result = mysqli_query($con,"SELECT DISTINCT pricing.Hairstyle_Picture from hair_styles,hair_category,pricing where hair_styles.Category_ID=1 and hair_styles.Style_ID=pricing.Style_ID and pricing.Studio_ID='$var'");
	
    while($row = mysqli_fetch_assoc($result)) 
    { 
echo '<img src="./Style_Pictures/'.$row["Hairstyle_Picture"]. '" width="225" height="200"  style="margin-right: 5px "/>';
        
    }
?>



</div>
	</div>
	<!---copy-right ---->
<div class="copy-right">
	<div class="container">
	
		<div class="footer-social-icons wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
			<ul>
				<li><a class="facebook" href="#"><span>Facebook</span></a></li>
				<li><a class="twitter" href="#"><span>Twitter</span></a></li>
				<li><a class="flickr" href="#"><span>Flickr</span></a></li>
				<li><a class="googleplus" href="#"><span>Google+</span></a></li>
				<li><a class="dribbble" href="#"><span>Dribbble</span></a></li>
			</ul>
		</div>
		<p class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">?2016 Optimum hair finder . All Rights Reserved</p>
	</div>
</div>
<!---copy-right ----><script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBB_kFmHTM9RJQcroE6GC3100QjFfd4L5o&callback=initMap"></script>
				
	</body>
	</html>

