<?php
	include_once 'functions.php';

	$h = $_POST['hairstyle'];
	$mi = $_POST['minprice'];
	$ma = $_POST['maxprice'];
	//echo $min;
	$l = $_POST['location'];
	search($h, $l, $mi, $ma);
?>