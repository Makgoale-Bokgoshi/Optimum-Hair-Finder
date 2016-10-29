﻿<?php
	include 'func_inc.php'; //include this part of your code. Make sure the func_inc.php is in the same folder as the index.php file
	
?>
<!DOCTYPE HTML>
<html>
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
<body>
<!-- top-header -->
<div class="top-header">
	<div class="container">
		<ul class="tp-hd-rgt wow fadeInRight animated" data-wow-delay=".5s"> 			
			<li class="sig"><a href="#" data-toggle="modal" data-target="#myModal" >Sign Up</a></li> 
			<li class="sigi"><a href="#" data-toggle="modal" data-target="#myModal4" >/ Sign In</a></li>
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
<!--- /footer-btm ---->
<!--- banner ---->
<div class="banner">
	
</div>
<div class="container">
	
	<div class="col-md-7 bann-info wow fadeInRight animated" data-wow-delay=".5s">
		<h2>Search for Salons in Gauteng</h2>
		<div class="ban-top">
			<select name="city" id="city" class="grayTextNormal">
					<!--<option value="-- Select State --">-- Select Location --</option>-->
					<option value="Braamfontein">Braamfontein</option>
					<option value="Auckland park">Auckland park</option>
					<option value="parktown">parktown</option>
					<option value="Bedfordview">Bedfordview</option>
				</select>
		</div>
		<div class="sear">
			<form action="#More">
				<button class="seabtn" onclick="showDiv()">Search for salons</button>
			</form>
		</div>
	</div>
	<!--copy and paste until the last comment--->
	<div class="col-md-7 bann-info wow fadeInRight animated" data-wow-delay=".5s"><!-- Checkboxes -->
		<h2>Search for Salons by Hair Category</h2>
		<div class="ban-top">
		<form action="button.php">
				<select name="hair_cate" id="haircategory" class="grayTextNormal">
					<option value="-- Select State --">-- Select Location --</option>
					<?php
						checkboxquery(); 
					?>
				</select>
		</div>
		<div class="sear">
			
				<button class="seabtn">Search by Hair Category</button>
			
		</div>
		</form>
	</div>
	<!-- stop Copying and pasting here -->
	<div class="clearfix"></div>
	<div id="More" style="display:none;"> 
	
	<!--- details ---->
<div class="details">
	<div class="container">
		 <div class="head">
			<h3 id="cityH"> </h3>
		</div>
		<div class="details-top">
			<div class="col-md-3 details-left wow fadeInLeft animated" data-wow-delay=".5s">
				<img src="images/c5.jpg" class="img-responsive" alt="">
			</div>
			<div class="col-md-6 details-middle wow fadeInUp animated" data-wow-delay=".5s">
				<h3><a href="#">Skydiva Beauty Works - Newtown</a></h3>
				<p>Newtown</p>
				<div class="clearfix"></div>
				<li><i class="fa fa-female"></i></li>
			</div>
			<div class="col-md-3 details-right wow fadeInRight animated" data-wow-delay=".5s">
				<a href="salonDetails.html" ><h5>Map directions</h5></a>
				<a href="hairstyles.html" class="view">View salon details</a>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="details-top">
			<div class="col-md-3 details-left wow fadeInLeft animated" data-wow-delay=".5s">
				<img src="images/c5.jpg" class="img-responsive" alt="">
			</div>
			<div class="col-md-6 details-middle wow fadeInUp animated" data-wow-delay=".5s">
				<h3><a href="#">FM Hair and Nail Salon - 78 Biccard str</a></h3>
				<p>Braamfontein</p>
				
				<div class="clearfix"></div>
				<li><i class="fa fa-female"></i></li>
			</div>
			<div class="col-md-3 details-right wow fadeInRight animated" data-wow-delay=".5s">
				<a href="salonDetails.html" ><h5>Map directions</h5></a>
				<a href="hairstyles.html" class="view">View salon details</a>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="details-top">
			<div class="col-md-3 details-left wow fadeInLeft animated" data-wow-delay=".5s">
				<img src="images/c5.jpg" class="img-responsive" alt="">
			</div>
			<div class="col-md-6 details-middle wow fadeInUp animated" data-wow-delay=".5s">
				<h3><a href="#">Caleb's Barbershop- 11 De Beer & Corner De Korte str</a></h3>
				<p>Braamfontein</p>
				
				<div class="clearfix"></div>
				
				<li><i class="fa fa-male"></i></li>
			</div>
			<div class="col-md-3 details-right wow fadeInRight animated" data-wow-delay=".5s">
				<a href="salonDetails.html" ><h5>Map directions</h5></a>
				<a href="hairstyles.html" class="view">View salon details</a>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="details-top">
			<div class="col-md-3 details-left wow fadeInLeft animated" data-wow-delay=".5s">
				<img src="images/c5.jpg" class="img-responsive" alt="">
			</div>
			<div class="col-md-6 details-middle wow fadeInUp animated" data-wow-delay=".5s">
				<h3><a href="#">Skydiva Beauty Works - Newtown</a></h3>
				<p>Newtown</p>
				
				<div class="clearfix"></div>
				<li><i class="fa fa-female"></i></li>
			</div>
			<div class="col-md-3 details-right wow fadeInRight animated" data-wow-delay=".5s">
				<a href="salonDetails.html" ><h5>Map directions</h5></a>
				<a href="hairstyles.html" class="view">View salon details</a>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="details-top">
			<div class="col-md-3 details-left wow fadeInLeft animated" data-wow-delay=".5s">
				<img src="images/c5.jpg" class="img-responsive" alt="">
			</div>
			<div class="col-md-6 details-middle wow fadeInUp animated" data-wow-delay=".5s">
				<h3><a href="#">FM Hair and Nail Salon - 78 Biccard str</a></h3>
				<p>Braamfontein</p>
				
				<div class="clearfix"></div>
				<li><i class="fa fa-female"></i></li>
			</div>
			<div class="col-md-3 details-right wow fadeInRight animated" data-wow-delay=".5s">
				<a href="salonDetails.html" ><h5>Map directions</h5></a>
				<a href="hairstyles.html" class="view">View salon details</a>
			</div>
				<div class="clearfix"></div>
		</div>
		<div class="details-top">
			<div class="col-md-3 details-left wow fadeInLeft animated" data-wow-delay=".5s">
				<img src="images/c5.jpg" class="img-responsive" alt="">
			</div>
			<div class="col-md-6 details-middle wow fadeInUp animated" data-wow-delay=".5s">
				<h3><a href="#">Caleb's Hair works - 11 De Beer & Corner De Korte str</a></h3>
				<p>Braamfontein</p>
				
				<div class="clearfix"></div>
				<li><i class="fa fa-female"></i></li>
				<li><i class="fa fa-male"></i></li>
			</div>
			<div class="col-md-3 details-right wow fadeInRight animated" data-wow-delay=".5s">
				<a href="salonDetails.html" ><h5>Map directions</h5></a>
				<a href="hairstyles.html" class="view">View salon details</a>
			</div>
				<div class="clearfix"></div>
		</div>
	</div>
</div>
<!--- /details ---->
	
	
	</div>
</div>
<script> 
function showDiv(){
document.getElementById('More').style.display = "block";
var e = document.getElementById("city");
cityH.innerText ="Salons in: " + e.options[e.selectedIndex].text;

}

</script>
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
		<p class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">© 2016 Optimum hair finder . All Rights Reserved</p>
	</div>
</div>
<!--- /copy-right ---->
<!-- sign -->
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
							<section>
								<div class="modal-body modal-spa">
									<div class="login-grids">
										<div class="login">
											<div class="login-left">
												<ul>
													<li><a class="fb" href="#"><i></i>Sign in with Facebook</a></li>
													<li><a class="goog" href="#"><i></i>Sign in with Google</a></li>
													
												</ul>
											</div>
											<div class="login-right">
												<form>
													<h3>Create Account </h3>
													<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
													<input type="text" value="Mobile number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required="">
													<input type="text" value="Email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required="">	
													<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
													<input type="submit" value="CREATE ACCOUNT">
												</form>
											</div>
												<div class="clearfix"></div>								
										</div>
											
									</div>
								</div>
							</section>
					</div>
				</div>
			</div>
<!-- //sign -->
<!-- signin -->
		<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog" role="document">
					<div class="modal-content modal-info">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-left">
										<ul>
											<li><a class="fb" href="#"><i></i>Sign in with Facebook</a></li>
											<li><a class="goog" href="#"><i></i>Sign in with Google</a></li>
								
										</ul>
									</div>
									<div class="login-right">
										<form>
											<h3>Sign in </h3>
											<input type="text" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your mobile number or Email';}" required="">	
											<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
											<h4><a href="#">Forgot password</a></h4>
											<div class="single-bottom">
												<input type="checkbox" id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<input type="submit" value="SIGNIN">
										</form>
									</div>
									<div class="clearfix"></div>								
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
<!-- //signin -->

</body>
</html>
