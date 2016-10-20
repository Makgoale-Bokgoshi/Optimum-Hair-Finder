
<!DOCTYPE HTML>
<html>
<head>
<title></title><link rel='shortcut icon' href='favicon.ico'/>
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

 <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
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
			<a href="index.html"><img src="images/logo.jpg" class="img-responsive" alt=""></a>	
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
<!--- banner-1 ---->
<div class="banner-2">
	<div class="container"></div>
</div>
<!--- /banner-1 ---->
<!--- agent ---->
<div class="agent">
	<div class="container">
		<div class="col-md-6 agent-left wow fadeInDown animated" data-wow-delay=".5s">
			<div class="ag-bt">
				<h3>Generale Hair Zone </h3>
			</div>
			<h4>About Salon</h4>
			<p><?php 
					$mysqlserver ="localhost";
					$mysqlusername ="root";
					$mysqlpassword ='';
					$dbname = "hair_studios";
					$con=mysqli_connect($mysqlserver,$mysqlusername,$mysqlpassword) or die("Failed to connect to MySQL: " . mysqli_error());
					$db=mysqli_select_db($con,$dbname) or die("Failed to connect to MySQL: " . mysqli_error());

					$Studioquery = "Select `salon_Details` FROM `all_studios` Where Studio_Name='Generale Hair Zone'";
					$Studiores=mysqli_query($con,$Studioquery) or die("Query failed");

					while($row=mysqli_fetch_array($Studiores)) {
					$Studio_Name=$row["salon_Details"];
					echo $Studio_Name;
					}
					
					?></p>
		
			<h3>Contact Us</h3>
			<p><a href="mailto:example@email.com">info@salon.com</a></p>
			<p>+277129890</p>	
		</div>
		<div class="col-md-6 agent-right wow fadeInUp animated" data-wow-delay=".5s"  style="padding-top: 100px;">
			<div  style="background-color:#eee;width:500px;height:500px;" >
		<div id="mapcanvas" style="width:100%;  height:500px;  border: 1px solid rgb(29, 26, 26);"></div>
			
		</div>
			<div class="clearfix"></div>
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
<?php 
					$mysqlserver ="localhost";
					$mysqlusername ="root";
					$mysqlpassword ='';
					$dbname = "hair_studios";
					$con=mysqli_connect($mysqlserver,$mysqlusername,$mysqlpassword) or die("Failed to connect to MySQL: " . mysqli_error());
					$db=mysqli_select_db($con,$dbname) or die("Failed to connect to MySQL: " . mysql_error());

					?>
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
				<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBB_kFmHTM9RJQcroE6GC3100QjFfd4L5o&callback=initMap"></script>
				<script>

				var lat='<?php
						$mysqlserver ="localhost";
									$mysqlusername ="root";
									$mysqlpassword ='';
									$dbname = "hair_studios";
									$con=mysqli_connect($mysqlserver,$mysqlusername,$mysqlpassword) or die("Failed to connect to MySQL: " . mysqli_error());
									$db=mysqli_select_db($con,$dbname) or die("Failed to connect to MySQL: " . mysqli_error());

						$cord= mysqli_query($con,"SELECT `Latitude` FROM `all_studios` where Studio_Name='Generale Hair Zone' ");
						
						while($results = mysqli_fetch_array($cord)){
							$lat = $results['Latitude'];
						
							
				echo $lat;
							
							 
						}
						?>';
						
						var lo='<?php
						$mysqlserver ="localhost";
									$mysqlusername ="root";
									$mysqlpassword ='';
									$dbname = "hair_studios";
									$con=mysqli_connect($mysqlserver,$mysqlusername,$mysqlpassword) or die("Failed to connect to MySQL: " . mysqli_error());
									$db=mysqli_select_db($con,$dbname) or die("Failed to connect to MySQL: " . mysqli_error());

						$cord= mysqli_query($con,"SELECT `Longitude` FROM `all_studios` where Studio_Name='Generale Hair Zone' ");
						
						while($results = mysqli_fetch_array($cord)){
							
							$long = $results['Longitude'];
							
				echo $long ;
							
							 
						}
						?>';
						
					if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(success, error);
      } else {
        error('not supported');
      }

      var directionDisplay;
      var directionsService = new google.maps.DirectionsService();
      var map;

      function success(position) {
        directionsDisplay = new google.maps.DirectionsRenderer();
        var latlng = new google.maps.LatLng(lat, lo);
        var mapOptions = {
          zoom:15,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          center: latlng
        }
        map = new google.maps.Map(document.getElementById('mapcanvas'), mapOptions);
        directionsDisplay.setMap(map);
        directionsDisplay.setPanel(document.getElementById("directionPanel"));
		
        var start =  position.coords.latitude + ',' + position.coords.longitude;
        var end = lat+','+lo;
        var mode;

        switch ( 'driving' )
        {
          case 'bicycling' :
            mode = google.maps.DirectionsTravelMode.BICYCLING;
            break;
          case 'driving':
            mode = google.maps.DirectionsTravelMode.DRIVING;
            break;
          case 'walking':
            mode = google.maps.DirectionsTravelMode.WALKING;
            break;
        }
        var request = {
            origin:start,
            destination:end,
            travelMode: mode
        };
        
        directionsService.route(request, function(response, status) {
          if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
          }
        });

      }

      function error(msg) {
        var s = document.querySelector('#status');
        s.innerHTML = typeof msg == 'string' ? msg : "failed";
        s.className = 'fail';
  
        console.log(arguments);
       }

				</script>
</body>
</html>
