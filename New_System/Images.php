<?php session_start();?>
<!DOCTYPE HTML>
<html>
<head>
<title>gallery</title><link rel='shortcut icon' href='favicon.ico'/>
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
	<div class="container">
		<div class="col-md-6 agent-left wow fadeInDown animated" data-wow-delay=".5s">
			
			
			<?php 
			include_once 'define.php';
			$var = $_GET['id'];

			
					$Studioquery = "Select `salon_Details`,`Studio_Name` FROM `all_studios` Where Studio_ID=$var";
					$Studiores=mysqli_query($con,$Studioquery) or die("Query failed");

					while($row=mysqli_fetch_array($Studiores)) {
					$Studio_Name=$row["Studio_Name"];
					$Details=$row["salon_Details"];
					
					echo'<div class="ag-bt"><h3 style="text-align: -moz-right;">'. $Studio_Name.'</h3> </div>';
					echo '<p style="padding-top: 50px;">'.$Details.'</p>
					<h3>Contact Us</h3>
					<p><a href="mailto:example@email.com">info@salon.com</a></p>
					<p>+277129890</p>';
					}
					
					?>
		
				
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
<!--- agent ---->

<div class="agent">
<div class="ag-bt"><h3 style="text-align: -moz-center;">Gallery</h3> </div>
	<div class="container"style="/*! border: blue; */border: 1px solid rgba(183, 209, 224, 0.6);">
		
	
	<?php 
include_once 'define.php';

    $img_url = "http://www.domain.com/images/"; 
	
	
	$id=$_GET['id'];
    $result = mysqli_query($con,"SELECT Hairstyle_Picture,Style_ID FROM pricing where Studio_ID='$id'");
	$_GET['id']=$id;
    while($row = mysqli_fetch_assoc($result)) 
    { echo "<a href='booking.php?id=$id'>";
echo '<img src="./Style_Pictures/'.$row["Hairstyle_Picture"]. ' "width="225" height="200"  style="margin-right: 5px"/></a>';
        
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
				<script>

				var lat='<?php
						$mysqlserver ="localhost";
									$mysqlusername ="root";
									$mysqlpassword ='';
									$dbname = "hair_studios";
									$con=mysqli_connect($mysqlserver,$mysqlusername,$mysqlpassword) or die("Failed to connect to MySQL: " . mysqli_error());
									$db=mysqli_select_db($con,$dbname) or die("Failed to connect to MySQL: " . mysqli_error());
						
						$name=$_GET['id'] ;
						$cord= mysqli_query($con,"SELECT `Latitude` FROM `all_studios` where Studio_ID='$name' ");
						
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
