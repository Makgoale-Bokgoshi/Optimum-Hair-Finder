<<<<<<< HEAD:New_System/index01.php

<!DOCTYPE HTML>
<html>
<head>
<title>Home</title><link rel='shortcut icon' href='favicon.ico'/><link rel='shortcut icon' href='favicon.ico'/>
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

	<div class="col-md-7 bann-info wow fadeInRight animated" data-wow-delay=".5s">

		<h2>Search by hair category</h2>
		<div class="ban-top">
			<select name="" id="category" class="grayTextNormal" onclick="showCheckboxes()" style="width: 50%;" >
			<option value="-- Select State --">-- Select Hair Category --</option>
			</select>
		</div>
		<div id="checkboxes">
            
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

	<div id = "haircuts" >	 
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
	
	if(count == 0){ 
		haircuts.style.display = "block";
		cornrows.style.display = "block";
		braids.style.display = "block";
		chemicals.style.display = "block";
		dreadlocks.style.display = "block";
		extensions.style.display = "block";
		weaves.style.display = "block";
		wigs.style.display = "block";
	}
}
</script>
<!---copy-right ---->
<!-- sign SIPHAMANDLA-->
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
													<li><g:plusone data-onsuccess="onSignIn"></g:plusone></li>
													
												</ul>
											</div>
											<div class="login-right">
												<form name="registration" method="post" action="registration.php">
													<h3>Create Account </h3>
													<input type="text" name="name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
											
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
										<form name="login" method="post" action="UserLogin.php">
											<h3>Sign in </h3>
											<input type="text" name="email" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your mobile number or Email';}" required="">	
											<input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
											<h4><a href="changep.html">Forgot password</a></h4>
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
			
<!-- FACEBOOK SCRIPT -->
<script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }
  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }
  window.fbAsyncInit = function() {
  FB.init({
    appId      : '939527269490619',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.5' // use graph api version 2.5
  });
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
  };
  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Welcome to Optimum Hair Finder, ' + response.name + '!';
    });
  }
</script>


<!-- GOOGLE PLUS SCRIPT -->
<script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId());
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());
        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      };
    </script>
	
<!-- It doesn’t affect website loading speed -->
<script type="text/javascript">
 (function() {
 var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
 po.src = 'https://apis.google.com/js/plusone.js';
 var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
 })();
</script>

</body>


</html>
=======

<!DOCTYPE HTML>
<html>
<head>
<title>Home</title><link rel='shortcut icon' href='favicon.ico'/><link rel='shortcut icon' href='favicon.ico'/>
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

	<div class="col-md-7 bann-info wow fadeInRight animated" data-wow-delay=".5s">

		<h2>Search by hair category</h2>
		<div class="ban-top">
			<select name="" id="category" class="grayTextNormal" onclick="showCheckboxes()" style="width: 50%;" >
			<option value="-- Select State --">-- Select Hair Category --</option>
			</select>
		</div>
		<div id="checkboxes">
            
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

	<div id = "haircuts" >	 
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
	
	if(count == 0){ 
		haircuts.style.display = "block";
		cornrows.style.display = "block";
		braids.style.display = "block";
		chemicals.style.display = "block";
		dreadlocks.style.display = "block";
		extensions.style.display = "block";
		weaves.style.display = "block";
		wigs.style.display = "block";
	}
}
</script>
<!---copy-right ---->
<!-- sign SIPHAMANDLA-->
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
													<li><g:plusone data-onsuccess="onSignIn"></g:plusone></li>
													
												</ul>
											</div>
											<div class="login-right">
												<form name="registration" method="post" action="registration.php">
													<h3>Create Account </h3>
													<input type="text" name="name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
											
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
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span></button>						
						</div>
						<div class="modal-body modal-spa">
							<div class="login-grids">
								<div class="login" id="login1">
									<div class="login-left">
										<ul>
											<li><fb:login-button scope="public_profile,email" onlogin="checkLoginState();">Sign in with facebook</fb:login-button></li>
										</ul>
									</div>
									<div class="login-right">
										<form name="login" method="post" action="UserLogin.php">
											<h3>Sign in </h3>
											<input type="text" name="email" value="Email Address" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter your mobile number or Email';}" required="">	
											<input type="password" name="password" value="Password" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">	
											<h4><a href="changep.html">Forgot password</a></h4>
											<h4>Don't have an account?<a href="#" data-toggle="modal" data-target="#myModal">Sign Up</a> </h4>
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
			
<!-- FACEBOOK SCRIPT -->
<script>
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log('statusChangeCallback');
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
      // Logged into your app and Facebook.
      testAPI();
    } else if (response.status === 'not_authorized') {
      // The person is logged into Facebook, but not your app.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into this app.';
    } else {
      // The person is not logged into Facebook, so we're not sure if
      // they are logged into this app or not.
      document.getElementById('status').innerHTML = 'Please log ' +
        'into Facebook.';
    }
  }
  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }
  window.fbAsyncInit = function() {
  FB.init({
    appId      : '939527269490619',
    cookie     : true,  // enable cookies to allow the server to access 
                        // the session
    xfbml      : true,  // parse social plugins on this page
    version    : 'v2.5' // use graph api version 2.5
  });
  FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
  });
  };
  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "//connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    console.log('Welcome!  Fetching your information.... ');
    FB.api('/me', function(response) {
      console.log('Successful login for: ' + response.name);
      document.getElementById('status').innerHTML =
        'Welcome to Optimum Hair Finder, ' + response.name + '!';
    });
  }
</script>


<!-- GOOGLE PLUS SCRIPT -->
<script>
      function onSignIn(googleUser) {
        // Useful data for your client-side scripts:
        var profile = googleUser.getBasicProfile();
        console.log("ID: " + profile.getId());
        console.log('Full Name: ' + profile.getName());
        console.log('Given Name: ' + profile.getGivenName());
        console.log('Family Name: ' + profile.getFamilyName());
        console.log("Image URL: " + profile.getImageUrl());
        console.log("Email: " + profile.getEmail());
        // The ID token you need to pass to your backend:
        var id_token = googleUser.getAuthResponse().id_token;
        console.log("ID Token: " + id_token);
      };
    </script>
	
<!-- It doesn’t affect website loading speed -->
<script type="text/javascript">
 (function() {
 var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
 po.src = 'https://apis.google.com/js/plusone.js';
 var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
 })();
</script>

</body>


</html>
>>>>>>> c1ac01a71d62aa50b6322fe9587488a1c19ee2cd:The%2520UI/index01.php
