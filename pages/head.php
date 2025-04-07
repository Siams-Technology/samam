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
		#scramble-text {
    position: fixed;
    top: 20px;
    left: 20px;
    background: black;
    color: lime;
    padding: 10px;
    border-radius: 8px;
    font-family: monospace;
    z-index: 9999;
  }
		.leaflet-container {
			height: 100%;
			width: 100%;
			max-width: 100%;
			max-height: 100%;
		}
		    html, body {        	
            width: 100%;
            background-color: #000000;
            background-image: url('data:image/png;base64,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');
            word-wrap: break-word;
            overflow: hidden;
            background-position: 0 0;
            animation: animatedBackground 10s linear infinite;
            font-size: 25px;
            text-align: center;
            font-family: Arial, sans-serif;
        }
        
        .wrapper {
            font-size: 25px;
        }
        
        .neil {
            display: block;
            text-align: center;
        }
        
        .neil img {
            margin-top: 30px;
        }
        
        .neil img:hover {
            animation: shake 0.5s;
            animation-iteration-count: infinite;
        }

        @keyframes shake {
            0% { transform: translate(1px, 1px) rotate(0deg); }
            10% { transform: translate(-1px, -2px) rotate(-1deg); }
            20% { transform: translate(-3px, 0px) rotate(1deg); }
            30% { transform: translate(3px, 2px) rotate(0deg); }
            40% { transform: translate(1px, -1px) rotate(1deg); }
            50% { transform: translate(-1px, 2px) rotate(-1deg); }
            60% { transform: translate(-3px, 1px) rotate(0deg); }
            70% { transform: translate(3px, 1px) rotate(-1deg); }
            80% { transform: translate(-1px, -1px) rotate(1deg); }
            90% { transform: translate(1px, 2px) rotate(0deg); }
            100% { transform: translate(1px, -2px) rotate(-1deg); }
        }

        p { 
            padding: 5px; 
            margin: 2px;
        }

        #greyshadow {
            color: gold;
            font-size: 30px;
            display: block;
            text-align: center;
            margin-top: 10px;
            letter-spacing: 10px;            
            width: auto;
            background-color: transparent;
        }
        
        #gs1 {
            color: #3578e5;
        }
        
        #gs2 {
            color: #f00;
        }
        
        .text {
            color: #f00;
            font-size: 25px;
            display: block;
            text-align: center;
            margin-top: 10px;
            letter-spacing: 8px;            
            width: auto;
            background-color: transparent;
        }
        
        #notag {
            color: #fff;
            font-weight: bold;
            letter-spacing: 4px;
            font-family: 'Electrolize', Monospace;
            font-size: 20.5px;
            text-align: center;
        }
        
        #tagline {
            font-weight: bold;
            color: #ffffff;
            letter-spacing: 7px;
            font-family: 'Electrolize', Monospace;
            font-size: 20.5px;
            text-align: center;
        }
        
        #taglines {
            font-weight: bold;
            color: #ffffff;
            letter-spacing: 4px;
            font-family: 'Electrolize', Monospace;
            font-size: 20.5px;
            text-align: center;
        }
        
        #tagliness {
            font-weight: bold;
            color: #ff0000;
            letter-spacing: 4px;
            font-family: 'Electrolize', Monospace;
            font-size: 19px;
            text-align: center;
        }
        
        #taglinesss {
            font-weight: bold;
            color: #fff;
            letter-spacing: 4px;
            font-family: 'Electrolize', Monospace;
            font-size: 19px;
            text-align: center;
        }
        
        #pages {
            margin-bottom: 10px;
            font-weight: bold;
            background-color: transparent;             
            letter-spacing: 3px;
            font-family: 'Electrolize', Monospace;
            color: #609af7; 
            font-size: 19.5px;
            text-align: center;
            background: transparent;
            text-decoration: none;
            display: block;
        }
        .logo-container {
            margin-bottom: 30px;
        }

        #logo {
            width: 200px;
            height: auto;
        }

        
        #pages:hover {
            background: transparent;
            text-decoration: none;
            display: block;
            color: #2574f4;
        }

        .footer {
            position: fixed;
            left: 0%;
            right: 0%;
            bottom: 0%;
            background: transparent;
            text-align: center;
            color: white;
        }
        
        @keyframes animatedBackground {
            from { background-position: 0 0; }
            to { background-position: 0 100%; }
        }
        
        @media screen and (max-width: 480px) {
            body {
                font-size: 10px;
            }
            
            #greyshadow {
                color: gold;
                font-size: 20px;
            }
            
            .text {
                font-size: 14px;
            }
            
            #notag {
                font-size: 10px;
            }
            
            #tagline {
                font-size: 10px;
            }
            
            #taglines {
                font-size: 10px;
            }
            
            #tagliness {
                font-size: 10px;
            }
            
            #taglinesss {
                font-size: 8px;
            }
            
            #pages {
                font-size: 10px;
            }
            
            .neil img {
                width: 200px;
                margin-top: 10px;
            }
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
