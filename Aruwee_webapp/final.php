<?php
ini_set( "display_errors", 0);
session_start();
if(!session_is_registered(myusername)){
header("location:main_login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8" />
	<title>Google Froogle</title> 
	<meta content="" name="description" />
	<meta content="" name="keywords" />
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
	<!-- end: Mobile Specific -->

    <!-- start: CSS -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/bootstrap-responsive.css" />
    <link rel="stylesheet" href="css/style.css" />
    <!-- end: CSS -->

    <!-- start: style switcher -->
    <link rel="stylesheet" href="css/style-bgd-white.css" class="switchable" />
    <link rel="stylesheet" href="css/style-bgd-maze-white.css" class="switchable" />
    <link rel="stylesheet" href="css/style-bgd-kinda-jean.css" class="switchable" />
    <link rel="stylesheet" href="css/style-bgd-white-wall.css" class="switchable" />
	<link rel="stylesheet" href="css/style-bgd-gray-jean.css" class="switchable" />
	<link rel="stylesheet" href="css/style-color-darkslategrey.css" class="switchable" />	
	<link rel="stylesheet" href="css/style-color-SteelBlue.css" class="switchable" />	
    <link rel="stylesheet" href="css/style-color-orange.css" class="switchable" />
    <link rel="stylesheet" href="css/style-color-red.css" class="switchable" />
	<!-- end: style switcher -->

	<noscript>
		<link rel="stylesheet" type="text/css" href="css/nojs.css" />
	</noscript>	

	<!-- start: favicon 
	<link href="//s3.amazonaws.com/wrapbootstrap/live/imgs/favicon.ico" rel="shortcut icon" />
	end: favicon -->

    <!--[if IE 9]>
		<style></style>
	<![endif]-->    
    <!--[if IE 8]>
		<style>.nav-btn{display:none}.close-btn{display:none}.home-marker {top: 74px;}</style>
	<![endif]-->

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /></head>

<body>

<div id="outer-wrap">
	<div id="inner-wrap">


		<!--start: sidebar -->
		<div class="span2">
			<div id="top" class="sidebar-style sidebar-nav sidebar-nav-fixed">
				<div class="block logo">
					<!-- Logo --><a class="block-title" href="index.php">Google Froogle</i></a>
					<a class="nav-btn" data-icon="icon-lightbulb" id="nav-open-btn" href="#nav"><i class="icon-reorder icon-2x"></i></a>
				</div>
				
				<div class="baseline-border">
					<div class="baseline">
						<p>A Google product insight event </p>
					
					</div>
				</div>

			    <nav id="nav" role="navigation">
			        <div class="block">
						<ul>
							<!--<li class="is-active"><a href="index.php" class="home">Home</a></li>-->
						
				
							<li><a href="logout.php" class="contact">Log Out</a></li>
						</ul>
						<a class="close-btn" id="nav-close-btn" href="#top"><i class="icon-remove icon-2x icon-border"></i></a>
					</div>	
				</nav>		
				<div class="social">
			
				
					
				</div>
			</div>
		</div><!--end: sidebar -->

		<!--start: content -->
		<div class="content">

			<div class="span9">


				<div class="span9 offset1 home-content">
						<div class="project-slider">
						    <div class="callbacks_container">
							
						
<iframe src="https://docs.google.com/forms/d/1ANgkLCrYEQqTUQ-Kf2G0MiYn4jz3Zkagd7sG4gppFzY/viewform" width="800" height="600"></iframe>
						    </div>
						</div>	
				</div>					


			</div>

		</div><!--end: content --> 

		<!-- start: back to top -->
		<div class="up">
			<a href="#" class="btn btn-large btn-orange btn-red-pastel btn-steelblue btn-darkslategrey">Back to top <i class="icon-chevron-up"></i></a>	
		</div>
		<!-- end: back to top -->

	</div> <!--end: inner-wrap -->
</div> <!--end: outer-wrap -->

	<!-- start: style switcher -->
	<div class="switcher">
		<div class="cogs"><i class="icon-cogs icon-2x"></i></div>

		<ul id="cssSwitch">
			<li class="color">Color :</li>
			<li><a href="#" rel="css/style.css" class="default" title="default"></a></li>
		    <li><a href="#" rel="css/style-color-SteelBlue.css" class="steelblue" title="steelblue"></a></li>
		    <li><a href="#" rel="css/style-color-red.css" class="red" title="red"></a></li>
		    <li><a href="#" rel="css/style-color-orange.css" class="orange" title="orange"></a></li>
		</ul>
		<ul id="cssSwitch">
			<li class="background">Background : </li>
		    <li><a href="#" rel="css/style-bgd-gray-jean.css" class="gray-jean" title="gray-jean"></a></li>
		    <li><a href="#" rel="css/style-bgd-maze-white.css" class="maze-white" title="maze-white"></a></li>
		    <li><a href="#" rel="css/style-bgd-kinda-jean.css" class="kinda-jean" title="kinda-jean"></a></li>
		    <li><a href="#" rel="css/style-bgd-white-wall.css" class="white-wall" title="white-wall"></a></li>
		    <li><a href="#" rel="css/style-bgd-white.css" class="white" title="white"></a></li>
		</ul>
	</div>
	<!-- end: style switcher -->

	<!-- start: script -->
  	<script src="js/jquery.js"></script>
  	<script src="js/bootstrap.min.js"></script>
	<script src="js/modernizr.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>
  	<script src="js/gmap3.min.js"></script>
	<script src="js/responsiveslides.min.js"></script>
	<script src="js/isotope.js"></script>
	<script src="js/knob.js"></script>	
	<script src="js/jquery.cookie.js"></script>		
	<script src="js/custom.js"></script>
	<!-- end: script -->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->	

	</body>

</html>