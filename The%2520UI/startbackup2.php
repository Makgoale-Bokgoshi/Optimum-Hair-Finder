<?php
	include 'func_inc.php';
	
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
			session_start();
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
	
	
						<form method = "post" action="#More">
						
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
						<div class="clearfix"></div>
					<div id="More1" style="display:None;">
								<div class="col-md-7 bann-info wow fadeInRight animated" data-wow-delay=".5s">
								<h2>Search for Salons by Hair Category</h2>
										<select name="hair_cate" id="haircategory" class="grayTextNormal">
											<option value="-- Select State --">-- Select Category --</option>
											<?php
												checkboxquery(); 
											?>
										</select>
								
								<div class="sear">
									<?php
								include_once 'define.php';
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
														$res=mysqli_query($con,"SELECT `Studio_ID`,`Studio_Name`,`Address_link`,`Telephone` FROM `all_studios` WHERE Studio_Name = '$var'");

														$row = mysqli_fetch_assoc($res);
														
														$Tel= $row["Telephone"];
														
														
														echo '<div class="container">
														<div class="details-top">';
														echo '<div class="col-md-6 details-middle wow fadeInUp animated" data-wow-delay=".5s">';
														echo '<h3>' . $var .'</h3>';
														echo $row["Telephone"];
														echo '</div>';
														echo '<div class="col-md-6 details-middle wow fadeInUp animated" data-wow-delay=".5s">';
														echo '
																	<a href="salonDetails.php" ><h5>Map directions</h5></a>';
														echo '		<a href="Images.php" class="view">View Salon Gallery</a>';
																echo '</div>';
																echo '</div>
																</div>
																
																	<div class="clearfix"></div>';
														
														break;
													}//end of if statement
												}//end of for
												$i++;
											}//end of while
										}//end of if isset
									?>
									<input type="submit" name="shair" onclick="#More" value="Search For Salons" class="seabtn">
								
								</div>
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
	</script>	<div id="More" style="display:none;"> 
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
													<a href="salonDetails.php" ><h5>Map directions</h5></a>
													<a href="hairstyles.html" class="view">View Salon Gallery</a>
												</div>
												<div class="clearfix">';
											
											break;
				}//end of if statement
			}//end of for
			$i++;
		}//end of while
	}//end of function whatever
	//whatever();
?>
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
		<p class="wow zoomIn animated animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">2016 Optimum hair finder . All Rights Reserved</p>
	</div>
</div>
<!---copy-right ---->
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
													<li><fb:login-button scope="public_profile,email" onlogin="checkLoginState();">Sign in with facebook</fb:login-button></li>
													
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
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login">
									<div class="login-left">
										<ul>
											<li><fb:login-button scope="public_profile,email" onlogin="checkLoginState();">Sign in with facebook</fb:login-button></li>
										</ul>
									</div>
									<div class="login-right">
										<form>
											<h3>Sign in </h3>
											<input type="text" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your mobile number or Email';}" required="">	
											<input type="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
											<h4><a href="#myModal4">Forgot password</a></h4>
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
		

			


</body>

</html>
