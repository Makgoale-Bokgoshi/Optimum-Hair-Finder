	<html>
	<style type="text/css">
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
	<body> 
	<?php 

		$mysqlserver ="localhost";
		$mysqlusername ="root";
		$mysqlpassword ='';
		$dbname = "hair_studios";
		$con=mysql_connect($mysqlserver,$mysqlusername,$mysqlpassword) or die("Failed to connect to MySQL: " . mysql_error());
		$db=mysql_select_db($dbname,$con) or die("Failed to connect to MySQL: " . mysql_error());


		    $img_url = "http://www.domain.com/images/"; 
		    $result = mysql_query("SELECT DISTINCT Hairstyle_Picture,Style_Description,Max_Price,Min_Price FROM `hair_styles`,`pricing` WHERE hair_styles.Category_ID = 1 AND hair_styles.Style_ID = pricing.Style_ID");
			///*where Category_ID=1*/
		    while($row = mysql_fetch_assoc($result)) 
		    { 
		    	$max = $row["Max_Price"];
		    	$min = $row["Min_Price"];
		    	$range = 'R'.$min.'    -    R'.$max;

				echo '<img id="myImg" src="./Style_Pictures/Hair-Cut/'.$row["Hairstyle_Picture"]. '" alt="" width="225" height="200"  style="margin-right: 5px " onclick="showX(./Style_Pictures/Hair-Cut/'.$row["Hairstyle_Picture"]. ','.$row["Style_Description"]. ','.$range. ')"/>';
		        
		    }

	?>

		<div id="myModal" class="modal">
			    <span class="close">Close</span>
			    <div  style="float: left; margin-left:50px; margin-right:30px;">
			        <div id="caption" style="margin-bottom: 10px;"></div>
			        <img class="modal-content" id="img01">
			    </div>

			    <div style="margin-top: 95px;">
			    	<p id="prices" style="color: #ccc;" >Price range:</p>
			        <div id="range" style="margin-bottom: 10px;"></div>
			    </div>
			    <div class="sear">
			        <button style="padding: 6px 13px; font-size: 13px; margin-top:8px; margin-bottom:50px; width:100px;" >Book Now</button>
			    </div>
			    <div>
			    	<p style="font-size: 15px; color: #ccc;" >View salons that offer this hairstyle.</p>
			    </div>
			    <div class="sear">
			        <button style="padding: 6px 13px; font-size: 13px; margin-bottom:15px; ">View salons</button>
			    </div>
			    <div class="sear" data-href="https://developers.facebook.com/docs/plugins/">
			    	<a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse"><button style="padding: 6px 13px; font-size: 13px; width:100px; ">Share</button></a>
			        
			    </div>
			</div>


	</body>

	<script type="text/javascript">
		// Get the modal
		var modal = document.getElementById('myModal');

		// Get the image and insert it inside the modal - use its "alt" text as a caption
		var img = document.getElementById('myImg');
		var modalImg = document.getElementById("img01");
		var captionText = document.getElementById("caption");
		
		function showX(src,alt,range){
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
	</html>
