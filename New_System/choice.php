<?php
	include 'define.php';
	include 'functions.php';
	session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
<title>Home</title><link rel='shortcut icon' href='favicon.ico'/>
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
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
</head>
<body>
<!-- top-header -->
<div class="top-header">
	<div class="container">
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 			
			<li class="sig"><a href="#"  ><?php 
			include 'define.php';
			
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
<!--- /footer-btm ---->
<!--- banner ---->
<div class="banner">
	
</div>
	<div class="container">

<script> 
	function showDiv1(){
		document.getElementById('More1').style.display = "block";
	}
	</script>	
		<div>
			<h1>Select your Search Option</h1>
			<br>
			
			<br>
				<h2>Choose HairStyle</h2>
					<form method = "POST" action = "call.php">
						
						<select name ="hairstyle" >
							<option value="">-- Select HairStyle --</option>
							<?php
								hairstyleopt();
							?>
							
						</select>
				<br>
				<h2>Choose Location</h2>
						<select name = "location" id = "location">
							<option value="">-- Select Location --</option>
							<?php
								locationopt();
							?>
							
						</select>
						
				<h2>Choose MinPrice</h2>		
						<select name = "minprice" id = "MinPrice">
							<option value="">-- Select MinPrice --</option>
							<?php
								minpriceopt();
							?>
							
						</select>
						
				<h2>Choose MaxPrice</h2>		
						<select name = "maxprice" id = "MaxPrice">
							<option value="">-- Select MaxPrice --</option>
							<?php
								maxpriceopt();
							?>							
						</select>
						<br/>
						<br/>
						
						
						<input type="submit" name = "submit" onClick = "call.php">
					</form>

							
		</div>
<script> 
function showDiv(){
document.getElementById('More').style.display = "block";
var e = document.getElementById("city");
cityH.innerText ="Salons in: " + e.options[e.selectedIndex].text;

}

</script>
<div class="clearfix"></div></div>
	<!---copy-right ---->
<div class="copy-right">
	<div class="container">
	
		<div class="footer-social-icons wow fadeInDown animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInDown;">
			<ul>
				<li><a class="facebook" href="#"><span>Facebook</span></a></li>
				<li><a class="twitter" href="#"><span>Twitter</span></a></li>
				
			</ul>
		</div>
		<p class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">2016 Optimum hair finder . All Rights Reserved</p>
	</div>
</div>
<!---copy-right ---->
</body>

</html>
