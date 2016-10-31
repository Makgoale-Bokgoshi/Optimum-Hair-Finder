<?php
	include_once 'functions.php';

	$h = $_POST['hairstyle'];
	$mi = $_POST['minprice'];
	$ma = $_POST['maxprice'];
	$lo = $_POST['location'];
	search($h, $lo, $mi, $ma);
	

?>