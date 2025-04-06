<?php include_once('adb.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Hacked by Siam</title>
	<link rel="icon" href="img/logo.png" type="image/png" />
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="css/style.css?v=0.3">
	<link rel="stylesheet" type="text/css" href="css/slider.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
	
	<!--Newly added map view by Mortuza -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>

	<style>
		.leaflet-container {
			height: 100%;
			width: 100%;
			max-width: 100%;
			max-height: 100%;
		}
	</style>
	<!-- End Map References-->
	
	<script>
	$(document).ready(function(){
	  $("#vac3").click(function(){
	    $("#vacD3").toggle();
	    $("#vacD2").hide();
	    $("#vacD1").hide();
	  });
	});
	
	$(document).ready(function(){
	  $("#vac1").click(function(){
	    $("#vacD1").toggle();
	    $("#vacD2").hide();
	    $("#vacD3").hide();
	  });
	});

	$(document).ready(function(){
	  $("#vac2").click(function(){
	    $("#vacD2").toggle();
	    $("#vacD1").hide();
	    $("#vacD3").hide();
	  });
	});
	</script>
	<style type="text/css">
		
	</style>
</head>
