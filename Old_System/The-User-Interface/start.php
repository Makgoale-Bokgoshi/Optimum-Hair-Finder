<?php
	include 'func_inc.php';
	
?>
<!doctype>
<head>
	<title>Home</title>
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
<html>
	<body>
		<!-- top-header -->
			<div class="top-header">
				<div class="container">
					<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 			
						<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >Sign Up</a></li> 
						<li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" >/ Sign In </a></li>
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
											<a href="index.html">Optimum Hair<span>Finder</span></a>	
										</div>
										<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
											<span class="sr-only">Toggle navigation</span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
											<span class="icon-bar"></span>
										</button>
									</div>
									
									<!-- Collect the nav links, forms, and other content for toggling -->
									<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
										<nav class="cl-effect-1">
											<ul class="nav navbar-nav">
												<li><a href="">About</a></li>
													<li><a href="#">Faq</a></li>
													<li><a href="#">Apps</a></li>
													<li><a href="#">Contact Us</a></li>
													<div class="clearfix"></div>
											</ul>
										</nav>
									</div><!-- /.navbar-collapse -->	
								</nav>
						</div>
					
						<div class="clearfix"></div>
					</div>
			</div>
			</div>
		<!--- /footer-btm ---->
		
		<!--- banner ---->
		<div class="banner">
	
		</div>
		<!-- /banner -->
		
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
								<br/>
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