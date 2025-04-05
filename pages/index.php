<?php
// Simple PHP greeting page
$pageTitle = "Welcome to My Server";
$mainHeading = "Hey There";
$subHeading = "Welcome to My Server";
$footerText = "Thanks for visiting";
?>
<!DOCTYPE html>
<html oncontextmenu="return false;" onkeypress="return false;" onkeydown="return false;" onkeyup="return false;">
<head>
    <title><?php echo $pageTitle; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, user-scalable=0">
    <meta name="Author" content="Admin">
    <meta name="keywords" content="Server, Welcome, Greeting" />
    <meta name="copyright" content="Admin"/>
    <meta name="description" content="Welcome to my server"/>
    <meta property="og:title" content="<?php echo $pageTitle; ?>"/>
    <meta property="og:image" content="https://i.postimg.cc/ZYGd2jVg/filtechhackerslogo.jpg">
    <link rel="shortcut icon" type="image/x-icon" href="https://i.ibb.co/4t6070S/gs.png">

    <link href='http://fonts.googleapis.com/css?family=Electrolize' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/animatecss/3.5.2/animate.min.css"/>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>
    <style>
        @font-face {
            font-family: 'Silent';
            src: url('data:font/truetype;charset=utf-8;base64,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');
        }
        body {
            background-color: #000;
            color: #fff;
            font-family: 'Electrolize', sans-serif;
            margin: 0;
            padding: 0;
            overflow: hidden;
        }
        .container {
            width: 100%;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        .header {
            font-family: 'Silent', sans-serif;
            font-size: 4em;
            margin-bottom: 20px;
            text-shadow: 0 0 10px #00ffff, 0 0 20px #00ffff, 0 0 30px #00ffff;
            animation: glow 2s ease-in-out infinite alternate;
        }
        .subheader {
            font-size: 2em;
            margin-bottom: 30px;
            text-shadow: 0 0 5px #00ffff, 0 0 10px #00ffff;
        }
        .content {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }
        .footer {
            position: fixed;
            bottom: 20px;
            width: 100%;
            text-align: center;
            font-size: 1em;
            color: #00ffff;
        }
        @keyframes glow {
            from {
                text-shadow: 0 0 10px #00ffff, 0 0 20px #00ffff, 0 0 30px #00ffff;
            }
            to {
                text-shadow: 0 0 20px #00ffff, 0 0 30px #00ffff, 0 0 40px #00ffff;
            }
        }
        .animated {
            animation-duration: 1s;
            animation-fill-mode: both;
        }
        .animated.infinite {
            animation-iteration-count: infinite;
        }
        .animated.hinge {
            animation-duration: 2s;
        }
        .animated.flipOutX,
        .animated.flipOutY,
        .animated.bounceIn,
        .animated.bounceOut {
            animation-duration: .75s;
        }
        .particles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }
    </style>
</head>
<body>
    <div id="particles-js" class="particles"></div>
    <div class="container">
        <div class="header animated bounceIn"><?php echo $mainHeading; ?></div>
        <div class="subheader animated fadeIn"><?php echo $subHeading; ?></div>
        <div class="content animated fadeIn">
            <p>Thank you for visiting our server. We hope you enjoy your stay!</p>
            <p>This server is dedicated to providing a great experience for all users.</p>
        </div>
        <div class="footer"><?php echo $footerText; ?></div>
    </div>

    <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            particlesJS("particles-js", {
                "particles": {
                    "number": {
                        "value": 80,
                        "density": {
                            "enable": true,
                            "value_area": 800
                        }
                    },
                    "color": {
                        "value": "#00ffff"
                    },
                    "shape": {
                        "type": "circle",
                        "stroke": {
                            "width": 0,
                            "color": "#000000"
                        },
                        "polygon": {
                            "nb_sides": 5
                        }
                    },
                    "opacity": {
                        "value": 0.5,
                        "random": false,
                        "anim": {
                            "enable": false,
                            "speed": 1,
                            "opacity_min": 0.1,
                            "sync": false
                        }
                    },
                    "size": {
                        "value": 3,
                        "random": true,
                        "anim": {
                            "enable": false,
                            "speed": 40,
                            "size_min": 0.1,
                            "sync": false
                        }
                    },
                    "line_linked": {
                        "enable": true,
                        "distance": 150,
                        "color": "#00ffff",
                        "opacity": 0.4,
                        "width": 1
                    },
                    "move": {
                        "enable": true,
                        "speed": 6,
                        "direction": "none",
                        "random": false,
                        "straight": false,
                        "out_mode": "out",
                        "bounce": false,
                        "attract": {
                            "enable": false,
                            "rotateX": 600,
                            "rotateY": 1200
                        }
                    }
                },
                "interactivity": {
                    "detect_on": "canvas",
                    "events": {
                        "onhover": {
                            "enable": true,
                            "mode": "repulse"
                        },
                        "onclick": {
                            "enable": true,
                            "mode": "push"
                        },
                        "resize": true
                    },
                    "modes": {
                        "grab": {
                            "distance": 400,
                            "line_linked": {
                                "opacity": 1
                            }
                        },
                        "bubble": {
                            "distance": 400,
                            "size": 40,
                            "duration": 2,
                            "opacity": 8,
                            "speed": 3
                        },
                        "repulse": {
                            "distance": 200,
                            "duration": 0.4
                        },
                        "push": {
                            "particles_nb": 4
                        },
                        "remove": {
                            "particles_nb": 2
                        }
                    }
                },
                "retina_detect": true
            });
        });
    </script>
</body>
</html>

