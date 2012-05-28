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

  <title>Validation</title>
  <meta name="description" content="validation with php">
  <meta name="author" content="Tony Brown">

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
  <style type="text/css">
  	.number{
  		font-weight:  900;
  		color: #d00;
  	}
  </style>
</head>

<body>

  <div id="wrapper">
  <header>
  <h1>Validate it!</h1>
	<?php require('templates/header.php')?>
	
	<div id="main" role="main">
		<form method="post" action="handle2.php" name='form1'>
		
		<table>
		
			<tr>
				<td>Please complete this form.</td>
				<td>&nbsp;</td>
			</tr>
			
			<tr>
				<td>&nbsp;</td>
			</tr>
			
			<tr>
				<td>Email:</td> 
				<td><input type='text' name='email' size='30' />
			</tr>
			
			<tr>
				<td>Password:</td> 
				<td><input type='password' name='password' size='20' /></td>
			</tr>
			
			<tr>
				<td>Confirm: </td>
				<td><input type='password' name='confirm' size='20' /></td>
			</tr>
			
			<tr>
				<td><p>Date of Birth:</p></td>
				
				<td>
					<select name='month'>
					<option value="">Month</option>
					<option value="1">January</option>
					<option value="1">February</option>
					<option value="1">March</option>
					<option value="1">April</option>
					<option value="1">May</option>
					<option value="1">June</option>
					<option value="1">July</option>
					<option value="1">August</option>
					<option value="1">September</option>
					<option value="1">October</option>
					<option value="1">November</option>
					<option value="1">December</option>	
				</select></td>
				
				<td>
					<select name='day'>
						<option value=''>Day</option>
						<option value='day'><?php for ($i = 1; $i <= 31; $i++) {echo "<option value=\"$i\">$i</option>\n";} ?></option>
					</select>
				</td>
			</tr>
			
			
			<tr>
				<td>Year you were born: </td>
				<td><input type='text' name='year' value='YYYY' size='4' /></td>
			</tr>
			
			<tr>
				<td>Favorite Color</td>
				<td>
					<select name='color'>
							<option value=''>pick one</option>
							<option value='red'>red</option>
							<option value='blue'>blue</option>
							<option value='green'>green</option>
							<option value='black'>black</option>
							<option value='purple'>purple</option>
							<option value='pink'>pink</option>
							<option value='orange'>orange</option>
							<option value='yellow'>yellow</option>
							<option value='white'>white</option>
							<option value='aqua'>aqua</option>
					</select>
				</td>
				
			</tr>
			
			<tr>
				<td>I agree to the terms (whatever they may be).</td>
				<td><input type='checkbox' name='terms' value='yes' /></td>
			</tr>
			
			<tr>
				<td><input type="submit" name="submit" value="register" /></td>
			</tr>
			
			<tr>
				<td><input type='hidden' name="secret" value='blue' /></td>
		
			</tr>
		</table>
		</form>
		
	<!-- PHP TEMPLATE FILE HERE -->
	
	<?php require('templates/footer.php'); ?>



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