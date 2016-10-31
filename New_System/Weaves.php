<!DOCTYPE HTML>
<html>
<head>
<title>Gallery</title><link rel='shortcut icon' href='favicon.ico'/>
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


<div class="agent">
<div class="ag-bt"><h3 style="text-align: -moz-center;">Weaves</h3> </div>
	<div class="container"style="/*! border: blue; */border: 1px solid rgba(183, 209, 224, 0.6);">
	
<?php

include 'define.php';
    $result = mysqli_query($con,"SELECT distinct Hairstyle_Picture FROM pricing where Style_ID IN (SELECT Style_ID from hair_styles where Category_ID = 7)");
	///*where Category_ID=1*/
    while($row = mysqli_fetch_assoc($result)) 
    { 
echo '<a href="#" id="link1" data-toggle="modal" data-target="#myModal4"><img src="./Style_Pictures/Weaves/'.$row["Hairstyle_Picture"]. '" width="225" height="200"  style="margin-right: 5px "/></a>';
        
    }
	?>

</div>
	</div>
	
	             
  </div>  

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-lg">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="text-align: center;"> Weaves</h4>
        </div>
        <div class="modal-body" id="showImg">
          <!-- here we create the image dynamically -->
        </div>
        <div class="modal-footer">
		<a href="#" data-toggle="modal" data-target="#myModal4" >View details</a>
        </div>
      </div>
      
    </div>
  </div>
</div>
<script>
$(document).ready(function() {
    $('img').on('click', function() {
        $("#showImg").empty();
        var image = $(this).attr("src");
        $("#showImg").append("<img class='img-responsive' src='" + image + "' />")
    })
});


</script>
	
	</body>
	</html>

