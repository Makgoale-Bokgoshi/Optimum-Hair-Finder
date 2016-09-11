
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
<script src="js/modal.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<style>
    .multiselect {
        width: 200px;
    }
    .selectBox {
        position: relative;
    }
    .selectBox select {
        width: 100%;
        font-weight: bold;
    }
    .overSelect {
        position: absolute;
        left: 0; right: 0; top: 0; bottom: 0;
    }
    #checkboxes {
        display: none;
        border: 1px #dadada solid;
    }
    #checkboxes label {
        display: block;
    }
    #checkboxes label:hover {
        background-color: #1e90ff;
    }
    #myImg {
	    border-radius: 5px;
	    cursor: pointer;
	    transition: 0.3s;
	    display: inline;
	    width: 24%;
	    height: 23.5%;
	}

	#myImg:hover {opacity: 0.7;}

	/* The Modal (background) */
	.modal {
	    display: none; /* Hidden by default */
	    position: fixed; /* Stay in place */
	    z-index: 1; /* Sit on top */
	    padding-top: 100px; /* Location of the box */
	    margin-left: 300px;
	    margin-top: 50px;
	    width: 700px; /* Full width */
	    height: 600px; /* Full height */
	    overflow: auto; /* Enable scroll if needed */
	    background-color: rgb(0,0,0); /* Fallback color */
	    background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
	}

	/* Modal Content (image) */
	.modal-content {
	    margin: auto;
	    display: block;
	    width: 400px;
	    height: 400px;
	}

	/* Caption of Modal Image */
	#caption {
	    display: block;
	    width: 80%;
	    text-align: center;
	    font-size: 20px;
	    color: #ccc;
	    padding: 10px 0;
	    height: 40px;
	}

	/* Add Animation */
	.modal-content, #caption {
	    -webkit-animation-name: zoom;
	    -webkit-animation-duration: 0.6s;
	    animation-name: zoom;
	    animation-duration: 0.6s;
	}

	@-webkit-keyframes zoom {
	    from {-webkit-transform:scale(0)}
	    to {-webkit-transform:scale(1)}
	}

	@keyframes zoom {
	    from {transform:scale(0)}
	    to {transform:scale(1)}
	}

	/* The Close Button */
	.close {
	    position: absolute;
	    top: 15px;
	    right: 35px;
	    color: #f1f1f1;
	    font-size: 20px;
	    font-weight: bold;
	    transition: 0.3s;
	}

	.close:hover,
	.close:focus {
	    color: #bbb;
	    text-decoration: none;
	    cursor: pointer;
	}

	/* 100% Image Width on Smaller Screens */
	@media only screen and (max-width: 700px){
	    .modal-content {
	        width: 100%;
	    }
	}
</style>

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

		<h2>Search by category</h2>
		<div class="ban-top">
			<select name="" id="category" class="grayTextNormal" onclick="showCheckboxes()">
			</select>
		</div>
		<div id="checkboxes">
            <label class="grayTextNormal">--Select hairstyle categories--</label>
            <label for="1">Haircuts<input type="checkbox" id="1"/></label>
            <label for="2">Cornrows<input type="checkbox" id="2"/></label>
            <label for="3">Braids<input type="checkbox" id="3"/></label>
            <label for="4">Chemicals and hair wash<input type="checkbox" id="4"/></label>
            <label for="5">Dreadlocks<input type="checkbox" id="5"/></label>
            <label for="6">Hair extensions<input type="checkbox" id="6"/></label>
            <label for="7">Weaves<input type="checkbox" id="7"/></label>
            <label for="8">Wigs<input type="checkbox" id="8"/></label>
        </div>
		<div class="sear">
			<form action="#More">
				<button class="seabtn" onclick="showDiv()">Search</button>
			</form>
		</div>
	</div>
	<div class="clearfix"></div>
	<div id="More" style="display:none;"> 
	
	<!--- details ---->
<div class="details">
	<div class="head">
			<h3 id="cityH"></h3>
		</div>

	<div id = "haircuts">	 
		<?php 
			include 'Hair_Cut.php';
		?>	
	</div>

	<div id = "cornrows">	 
		<?php 
			include 'Cornrows.php';
		?>	
	</div>	
	<div id = "braids">	 
		<?php 
			include 'Braids.php';
		?>	
	</div>
	
	<div id = "chemicals">	 
		<?php 
			include 'Chemicals_and_Hair_Wash.php';
		?>	
	</div>
	<div id = "dreadlocks">	 
		<?php 
			include 'Dreadlocks.php';
		?>	
	</div>
	<div id = "extensions">	 
		<?php 
			include 'Hair_Extensions.php';
		?>	
	</div>
	<div id = "weaves">	 
		<?php 
			include 'Weaves.php';
		?>	
	</div>
	<div id = "wigs">	 
		<?php 
			include 'Wigs.php';
		?>	
	</div>
	
	
</div>
<!--- /details ---->
	
	
	</div>
</div>

<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('myImg');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}
</script>
<script> 
function showDiv(){
	var count = 0;
	document.getElementById('More').style.display = "block";
	var cont = document.getElementById("countainer");
if(document.getElementById("2").checked){
		if(count == 0){
			cityH.innerText = "Cornrows";
		} else {cityH.innerText = cityH.innerText + " + Cornrows";}
		cornrows.style.display = "block";
		count++;
	} else {cornrows.style.display = "none";}
	if(document.getElementById("1").checked){
		cityH.innerText = "Haircuts";
		haircuts.style.display = "block";
		count++;
	} else {haircuts.style.display = "none";}
	
	if(document.getElementById("3").checked){
		if(count == 0){
			cityH.innerText = "Braids";
		} else {cityH.innerText = cityH.innerText + " + Braids";}
		braids.style.display = "block";
		count++;
	} else {braids.style.display = "none";}
	if(document.getElementById("4").checked){
		if(count == 0){
			cityH.innerText = "Chemicals and hair wash";
		} else {cityH.innerText = cityH.innerText + " + Chemicals and hair wash";}
		chemicals.style.display = "block";
		count++;
	} else {chemicals.style.display = "none";}
	if(document.getElementById("5").checked){
		if(count == 0){
			cityH.innerText = "Dreadlocks";
		} else {cityH.innerText = cityH.innerText + " + Dreadlocks";}
		dreadlocks.style.display = "block";
		count++;
	} else {dreadlocks.style.display = "none";}
	if(document.getElementById("6").checked){
		if(count == 0){
			cityH.innerText = "Hair extensions";
		} else {cityH.innerText = cityH.innerText + " + Hair extensions";}
		extensions.style.display = "block";
		count++;
	} else {extensions.style.display = "none";}
	if(document.getElementById("7").checked){
		if(count == 0){
			cityH.innerText = "Weaves";
		} else {cityH.innerText = cityH.innerText + " + Weaves";}
		weaves.style.display = "block";
		count++;
	} else {weaves.style.display = "none";}
	if(document.getElementById("8").checked){
		if(count == 0){
			cityH.innerText = "Wigs";
		} else {cityH.innerText = cityH.innerText + " + Wigs";}
		wigs.style.display = "block";
		count++;
	} else {wigs.style.display = "none";}
	if(count == 0){ cityH.innerText = "Choose hair Category"; }
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
