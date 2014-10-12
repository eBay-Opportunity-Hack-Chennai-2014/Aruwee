<!DOCTYPE html>
<html lang="en">
<head>

	<!-- start: Meta -->
	<meta charset="utf-8" />
	<title>Aruwe</title> 
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
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>

<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
	<noscript>
		<link rel="stylesheet" type="text/css" href="css/nojs.css" />
	</noscript>	 

<script type="text/javascript">
function validate()
{
var x=document.forms["regform"]["name"].value;
if (x==null || x=="")
  {
  alert("Name must be filled out");
  return false;
  }
  var y=document.forms["regform"]["age"].value;
if (y==null || y=="")
  {
  alert("Age is needed");
  return false;
  }
  var e=document.forms["regform"]["sex"].value;
if (e==null || e=="")
  {
  alert("email should be entered");
  return false;
  }
  var z=document.forms["regform"]["marital"].value;
if (z==null || z=="")
  {
  alert("Marital Status must be selected");
  return false;
  }
   
}
</script>
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
					<!-- Logo --><a class="block-title" href="index.php">Aruwe</i></a>
					<a class="nav-btn" data-icon="icon-lightbulb" id="nav-open-btn" href="#nav"><i class="icon-reorder icon-2x"></i></a>
				</div>
				
				<div class="baseline-border">
					<div class="baseline">
						<p>ARUWE is a Public Charitable Trust run by a group of committed social work professionals who are concerned about the welfare of the elderly destitute and deprived children </p>
					
					</div>
				</div>

			    <nav id="nav" role="navigation">
			        <div class="block">
						<ul>
							<li class="is-active"><a href="index.php" class="home">Home</a></li>
							<li><a href="register.php" class="about">Register</a></li>
							
							<li><a href="contact.html" class="contact">Contact</a></li>
						</ul>
						<a class="close-btn" id="nav-close-btn" href="#top"><i class="icon-remove icon-2x icon-border"></i></a>
					</div>	
				</nav>		
				<div class="social">
					<a href="#"><i class="icon-facebook"></i></a>
				
					
				</div>
			</div>
		</div><!--end: sidebar -->

		<!--start: content -->
		<div class="content">

			<div class="span9">

				

				<div class="span9 offset1 home-content">
						<div class="project-slider">
						    <div class="callbacks_container">
						   <center>
	<h3>Please Enter the Client Details! </h3>
<!--
<form  name="regform" method="post" action="regisproc.php" onsubmit="return validate()">
<label>Enter your name:</label><input id="box" type="text" name="name"/><br><br>
<label>Enter IEEE membership number:</label><input id="box" type="text" name="ieee"/><br><br>
<label>Enter email ID:</label><input id="box" type="text" name="mail" /><br><br>
<label>Enter Year:</label><select id="box" name="year">
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
</select><br><br>
<label>Department:</label><input id="box" type="text" name="dept" /><br><br>
<input id="sub" type="submit" name="submit" value="Start Test" />
</form>
-->

<div id="form">
<form  name="regform" method="post" action="regisproc.php" onsubmit="return validate()">
<label>Enter client name:</label><input id="box" type="text" name="name"/><br><br>
<label>Enter age:</label><input id="box" type="number" name="age"/><br><br>
<label>Enter gender:</label><input id="box" type="text" name="sex" /><br><br>
<label>Marital Status:</label><select id="box" name="marital">
<option value="Single">Single</option>
<option value="Married">Married</option>
<option value="Widow">Widow</option>
<option value="Divorsed">Divorsed</option>
</select><br><br>
<label>Medical Condition:</label><input id="box" type="text" name="medcon" /><br><br>

<label>Description:</label><input id="box" type="text" name="description"/><br><br>
<label>Reference Name:</label><input id="box" type="text" name="refname"/><br><br>
<label>Reference Contact:</label><input id="box" type="text" name="refcontact" /><br><br>

<label>Additional Medical details:</label><input id="box" type="text" name="addmed"/><br><br>
<label>Doctor in concern:</label><input id="box" type="text" name="docconcern"/><br><br>
<label>Activity:</label><input id="box" type="text" name="activity" /><br><br>

<input id="sub" type="submit" name="submit" value="Add Client" />
</form></div>
						
  			</center>
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
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
</script>
  
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->	

	</body>

</html>