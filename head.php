<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<link rel="apple-touch-icon" href="images/apple-touch-icon.png" />
<link rel="apple-touch-startup-image" media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2)" href="apple-touch-startup-image-640x1096.png">
<title>Accesscon APP</title>
<link rel="stylesheet" href="css/framework7.css">
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="css/colors/blue.css">
<link type="text/css" rel="stylesheet" href="css/swipebox.css" />
<link type="text/css" rel="stylesheet" href="css/animations.css" />
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700,900' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

		<script src="js/jquery.js" type="text/javascript"></script>
		<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'> -->
		
		<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
		
		<script type="text/javascript" src="js/Chart.js"></script> 
		<script type="text/javascript" src="js/jquery.openCarousel.js"></script> 
		<script src="js/star-rating.js"></script>
		<script src="js/jquery.easydropdown.js"></script>
		<script type="text/javascript" src="js/jquery.easing.js"></script>
        <script type="text/javascript" src="js/jquery.ulslide.js"></script>
        <script src="js/easyResponsiveTabs.js" type="text/javascript"></script>     										
		<!----Calender -------->
		  <link rel="stylesheet" href="css/clndr.css" type="text/css" />
		  <script src="js/underscore-min.js" type="text/javascript"></script>
		  <script src= "js/moment-2.2.1.js" type="text/javascript"></script>
		  <script src="js/clndr.js" type="text/javascript"></script>
		  <script src="js/site.js" type="text/javascript"></script>
  		<!----End Calender -------->
  		<script type="text/javascript" src="js/smk-accordion.js"></script> 
		<script type="text/javascript">
			jQuery(document).ready(function($){
				
				$(".accordion").smk_Accordion({
					showIcon: true, //boolean
					animation: true, //boolean
					closeAble: false, //boolean
					slideSpeed: 300 //integer, miliseconds
				});
			});
		</script>
	<!---- Slider ------>
	 <link rel="stylesheet" href="css/slider.css" type="text/css" />
	<script type="text/javascript" src="js/jquery.cslider.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>

	<style>
        .container form .actions button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }
		.container form .actions .btn-update {
            background-color: #4CAF50;
            color: white;
        }
        .container form .actions .btn-cancel {
            background-color: #f44336;
            color: white;
        }

	</style>

<script type="text/javascript">

  function hann() {
    alert("ay!!!!");
  }

	function salir() {
		location.href ="salir.php";
	}

	function bit_boton() {
        var varid = "<?php echo $_GET['id']?>";
        var varsw = "<?php echo $_GET['sw']?>";
        var deny = "<?php echo $_GET['deny']?>"

        var varsw0 = "<?php echo $_SESSION['sw0']?>";
        var varsw1 = "<?php echo $_SESSION['sw1']?>";
        var varsw2 = "<?php echo $_SESSION['sw2']?>";
        var varsw3 = "<?php echo $_SESSION['sw3']?>";


		if (varsw0=='1') {
					document.getElementById("sw0").checked = true;
        }else{document.getElementById("sw0").checked = false;}

        if (varsw1=='1') {
					document.getElementById("sw1").checked = true;
        }else{document.getElementById("sw1").checked = false;}

				if (varsw2=='1') {
					document.getElementById("sw2").checked = true;
        }else{document.getElementById("sw2").checked = false;}

        if (varsw3=='1') {
					document.getElementById("sw3").checked = true;
        }else{document.getElementById("sw3").checked = false;}

        if (deny=='1') {
        	alert('PASSWORD INCORRECTO');
        };
     } 	


</script>


</head>