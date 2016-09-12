
<!DOCTYPE HTML>
<html>
<head>
<title></title>
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
<!--- banner-1 ---->
<div class="banner-1">
	
</div>
<!--- /banner-1 ---->
<!--- agent ---->
<div class="agent">
	<div class="container">
		<div class="col-md-6 agent-left wow fadeInDown animated" data-wow-delay=".5s">
			
				<h2>Book a session</h2>
			
			<p>Submit details and we will call you back</p>
			<form Name="book" method="post" action="booking.php">
				<input Name="Name" type="text" placeholder="Name">
				<input Name="Telephone" type="text" placeholder="Contact Number">
				<input Name="Email" type="text" placeholder="Email">
				<input Name="Date" class="date" id="datepicker" type="date" value="dd-mm-yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'dd-mm-yyyy';}" required=>
			
				<select name="Salons" class="grayTextNormal" required>
				<option value="null" >Select Salon</option>
					<?php 
					$mysqlserver ="localhost";
					$mysqlusername ="root";
					$mysqlpassword ='';
					$dbname = "hair_studios";
					$con=mysql_connect($mysqlserver,$mysqlusername,$mysqlpassword) or die("Failed to connect to MySQL: " . mysql_error());
					$db=mysql_select_db($dbname,$con) or die("Failed to connect to MySQL: " . mysql_error());

					$Studioquery = "Select Studio_Name FROM all_studios";
					$Studiores=mysql_query($Studioquery) or die("Query failed");

					while($row=mysql_fetch_array($Studiores)) {
					$Studio_Name=$row["Studio_Name"];
					echo "<option value=$Studio_Name selected>
							$Studio_Name
							</option>";
					}
					
					?>
					
				</select>
				<select name="Time" id="" class="grayTextNormal" required>
					<option value="null">Select appointment time</option>
					<option value="07:30 AM">07:30 AM</option>
					<option value="08:00 AM">08:00 AM</option>
					<option value="08:30 AM">08:30 AM</option>
					<option value="09:00 AM">09:00 AM</option>
					<option value="09:30 AM">09:30 AM</option>
					<option value="10:00 AM">10:00 AM</option>
					<option value="10:30 AM">10:30 AM</option>
					<option value="11:00 AM">11:00 AM</option>
					<option value="11:30 AM">11:30 AM</option>
					<option value="12:00 PM">12:00 PM</option>
					<option value="12:30 PM">12:30 PM</option>
					<option value="01:00 PM">01:00 PM</option>
					<option value="01:30 PM">01:30 PM</option>
					<option value="02:00 PM">02:00 PM</option>
					<option value="02:30 PM">02:30 PM</option>
					<option value="03:00 PM">03:00 PM</option>
					<option value="03:30 PM">03:30 PM</option>
					<option value="04:00 PM">04:00 PM</option>
					<option value="04:30 PM">04:30 PM</option>
					<option value="05:00 PM">05:00 PM</option>
					<option value="05:30 PM">05:30 PM</option>
					<option value="06:00 PM">06:00 PM</option>
					<option value="06:30 PM">06:30 PM</option>
					<option value="0 7:00 PM">07:00 PM</option>
				</select>
				<select name="Thickness" id="Hair Thickness" class="grayTextNormal">
					<option value="null">*Select thickness (if applicable)</option>
					<option value="Very Thin">Very Thin</option>
					<option value="Thin">Thin</option>
					<option value="Medium">Medium</option>
					<option value="Thick">Thick</option>
					<option value="Very Thick">Very Thick</option>
				</select>
				<select name="Length" id="Hair Length" class="grayTextNormal" >
				<option value="null">*Select length (if applicable)</option>
					<option value="Short">Short</option>
					<option value="Medium">Medium</option>
					<option value="Long">Long</option>
				</select>
				<textarea placeholder="*Message"></textarea>
				<div class="sub">
					<input type="submit" Name="submit" value="Submit">
				</div>
			</form>
		</div>
		<div class="col-md-6 agent-right wow fadeInUp animated" data-wow-delay=".5s">
			<h3>About Salon</h3>
			<p>Salon Media Group has driven the national conversation since 1995 through its fearless journalism and, more recently, original video, distributed across Salon.com, social media, mobile devices, and wearable apps. Salon’s award-winning content reaches an audience of approximately 20 million monthly unique visitors. </p>
			
		</div>
			<div class="clearfix"></div>
	</div>
</div>
<!--- /agent ---->
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
												<form name="registration" method="post" action="registration.php">
													<h3>Create Account </h3>
													<input type="text" name="name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
													<input type="text" value="Mobile number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required="">
													<input type="text" name="email" value="Email address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email id';}" required="">	
													<input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
													<input type="submit" name="submit" value="submit" >
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
										<form name="login" method="post" action="UserLogin.php">
											<h3>Sign in </h3>
											<input type="text" name="email" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your mobile number or Email';}" required="">	
											<input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
											<h4><a href="#">Forgot password</a></h4>
											<div class="single-bottom">
												<input type="checkbox" id="brand" value="">
												<label for="brand"><span></span>Remember Me.</label>
											</div>
											<input type="submit" name="submit" value="Login">
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