<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>	<html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>	<html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
	   More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <!-- CSS: implied media=all -->
  <!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="css/style.css">
  <!-- end CSS-->

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except for Modernizr / Respond.
	   Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
	   For optimal performance, use a custom Modernizr build: www.modernizr.com/download/ -->
  <script src="js/libs/modernizr-2.0.6.min.js"></script>
  <style type='text/css' rel='stylesheet'>
  	.error {
  		color:  #c00;
  		text-shadow: -1px -1px 0 #000;
  		font-size:  1.4em;
  	}
  	.red {
  		color: red;
  	
  	}
  	.blue {
  		color:  blue;
  	}
  	.green {
  		color:  green;
  	}
  	.orange {
  		color: orange;
  	}
  	.yellow {
  		color:  yellow;
  	}
  	.black {
  		color: black;
  	}
  	.pink {
  		color: pink;
  	}
  </style>
  
</head>

<body>

  <div id="wrapper">
	<header>
	<h1>Validate it again!</h1>
		<?php require('templates/header.php'); ?>
	
	<div id="main" role="main">
	
	 <form action="handle_reg.php" method="post" name="form">
	 <h3>Please fill out the form to register:</h3>
	 <p>Email address:  <input type='text' name="email"></p>
	 <p>Password: <input type="password" name="password" size="20" /></p>
	 <p>Confirm password: <input type="password" name="confirm" size="20" /></p>
	 <p>Date of Birth: 
	 	<select name="month">
	 		<option value=''>Month</option>
	 		<option value='01'>January</option>
	 		<option value='02'>Febuary</option>
	 		<option value='03'>March</option>
	 		<option value='04'>April</option>
	 		<option value='05'>May</option>
	 		<option value='06'>June</option>
	 		<option value='07'>July</option>
	 		<option value='08'>August</option>
	 		<option value='09'>September</option>
	 		<option value='10'>October</option>
	 		<option value='11'>November</option>
	 		<option value='12'>December</option>
	 	</select>
	 	<select name="day">
	 		<option value="">Day</option>
	 		<?php  
	 			
	 			for ($i = 1; $i <= 31; $i++) {
	 				print "<option value=\"0$i\">$i</option>\n";
	 			
	 			}
	 	
	 		
	 		?>
	 	</select>
	 </p>
	 <p>Year of birth: <input type="text" name="year" value="YYYY" size="4" /></p>
	 <p>Favorite color: <select name="color">
	 	<option value="color">Pick One</option>
	 	<option value="red">red</option>
	 	<option value="blue">blue</option>
	 	<option value="green">green</option>
	 	<option value="yellow">yellow</option>
	 	<option value="orange">orange</option>
	 	<option value="pink">pink</option>
	 	<option value="black">black</option>
	 	<option value="white">white</option>
	 	<option value="purple">purple</option>
	 </select></p>
	 <p><input type="checkbox" name="terms" value="Yes" /> I agree to the terms (whatever they might be).</p>
	 <p><input type="submit" name="submit" value="register" /></p>
	 </form>
	</div>
<?php require('templates/footer.php');  ?>
  </div> <!--! end of #container -->


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/mootools/1.4.1/mootools-yui-compressed.js"></script>


  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="js/plugins.js"></script>
  <script defer src="js/script.js"></script>
  <!-- end scripts-->

	
  <!-- Change UA-XXXXX-X to be your site's ID -->
  <script>
	window._gaq = [['_setAccount','UAXXXXXXXX1'],['_trackPageview'],['_trackPageLoadTime']];
	Modernizr.load({
	  load: ('https:' == location.protocol ? '//ssl' : '//www') + '.google-analytics.com/ga.js'
	});
  </script>


  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
	   chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
	<script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>