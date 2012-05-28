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

  <title>Handle information 2</title>
  <meta name="description" content="validating user information with php">
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
</head>

<body>


<div id="wrapper">
<header>
	<h1>Validating user information</h1>
	<!-- PHP TEMPLATE FILE -->
		<?php require('templates/header.php')?>
		
	<!-- MAIN PART OF SITE -->
	<div id="main" role="main">
	
	<form method="post" action="register2.php">
	
		<table>
			<th><h1>Registration Results</h1></th>
			<tr>
				<td><?php $secret = $_POST['secret'];echo $secret  . '<p>Is the secret color</p>'; ?></td>
			</tr>
			
			<tr>
				<td><input type="submit" name="back" value="back" /></td>
			</tr>
			
			<tr>
				<td class="prompt">
					<?php 
						
						// FLAG
						$okay	= TRUE;
						
						// PASSING A VARIABLE
						$terms = (isset($_POST['terms'])) ;
						$color = ($_POST['color']);
						
						// CHECK THAT AN EMAIL ADDRESS HAS BEEN ENTERED HAVE TO UPDATE WITH A REGULAR EXPRESSION
						if (empty($_POST['email'])) {
							echo "<input type='submit' name='error' size='30' value='Please supply an email address'. /><br />";
							
							$okay = FALSE;
						}
						
						// MAKE SURE A PASSWORD IS ENTERED
						if (empty($_POST['password'])) {
							echo "<input type='submit' name='error' size='25' value='Please supply a password' /><br />";
							
							$okay = FALSE;
						}
						// CHECK THAT THE PASSWORDS MATCH
						if ($_POST['password'] != $_POST['confirm']) {
							echo "<p class='error'>Sorry, but your passwords don't match.</p>";
							
							$okay = FALSE;
						}
						
						// MAKE THE PASSWORD LONGER THAN TWO CHARACTERS
						if (strlen($_POST['password'] <= 2) && (strlen($_POST['confirm'] <= 2)) ) {
							echo "<p class='error'>Please make your password longer.</p>";
							$okay = FALSE;
						}
						
						// MAKE SURE A FOUR DIGIT NUMBER HAS BEEN ENTERED AND THAT THE YEAR IS BEFORE THE PRESENT
						if (is_numeric($_POST['year']) AND (strlen($_POST['year']) == 4) ) {
							if ($_POST['year'] < 2012) {
								$age = 2012 - $_POST['year'];
							} 
							else {
								echo "<p class='error'>Either you entered your age wrong or your from the future!</p>";
								
								$okay = FALSE;
							}
						}
						else {
							echo "<p class='error'>Please enter a four digit entry</p>";
							
							$okay = FALSE;
						}
						
						// CHECK THE FAVORITE COLOR
						
						if ($_POST['color'] == 'red') {
							echo "<p class='red'>Your favorite color is red!</p>";
						
						}
						else if ($_POST['color'] == 'blue') {
							echo "<p class='blue'>Your favorite color is blue!</p>";
						}
						else if ($_POST['color'] == 'green') {
							echo "<p class='green'>Your favorite color is green!</p>";
						}
						else if ($_POST['color'] == 'purple') {
							echo "<p class='purple'>Your favorite color is purple!</p>";
						}
						else if ($_POST['color'] == 'white') {
							echo "<p class='white'>Your favorite color is white!</p>";
						}
						else if ($_POST['color'] == 'pink') {
							echo "<p class='pink'>Your favorite color is pink!</p>";
						}
						else if ($_POST['color'] == 'black') {
							echo "<p class='black'>Your favorite color is black!</p>";
						}
						else if ($_POST['color'] == 'orange') {
							echo "<p class='orange'>Your favorite color is orange!</p>";
						}
						else if ($_POST['color'] == 'aqua') {
							echo "<p class='aqua'>Your favorite color is aqua!</p>";
						}
						else if ($_POST['color'] == 'yellow') {
							echo "<p class='yellow'>Your favorite color is yellow!</p>";
						}
						else {
							echo "<p class='white'>Please tell us your favorite color.</p>";
							
							$okay = FALSE;
						}
						
						// SWITCH STATEMENT OF THE COLOR VALIDATION
						
						 switch ($_POST['color']){
								case 'red':
									$color_type = 'primary';
									break;
								case 'yellow':
									$color_type = 'primary';
									break;
								case 'green':
									$color_type = 'secondary';
									break;
								case 'blue':
									$color_type = 'primary';
									break;
								case 'pink':
									$color_type = 'secondary';
									break;
								case 'white':
									$color_type = 'base';
									break;
								case 'black':
									$color_type = 'base';
									break;
								case 'orange':
									$color_type = 'secondary';
									break;
								case 'aqua':
									$color_type = 'secondary';
									break;
								default:
									echo "<button>&diams;&nbsp;&spades;&nbsp;&hearts;&nbsp;&clubs;&nbsp;</button>";
									$okay = FALSE;
									break;
						}// END OF SWITCH
						
						// CHECK TO SEE IF THE TERMS HAS BEEN CHECKED
						if (isset($_POST['terms']) AND (isset($_POST['terms']) == 'yes') ) {
							echo '<p class="error">You have to agree to the terms to proceed</p>';							
							
							$okay = FALSE;
						}
						
						// IF EVERYTHING IS GOOD THEN SEND A MESSAGE
						if ($okay) {
							echo "<p>You have successfully been registered (and all that it implies).</p>";
							
							echo "<p>You will be $age this year and your favorite color is <span class='black'>$color</span></p>";
						}
					
					?>
				</td>
			</tr>
		</table>
		
	</form>

	

<!-- PHP TEMPLATE FILE -->

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