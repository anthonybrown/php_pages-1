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

  <title>Handle Form 3</title>
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
  	.purple {
  		color: purple;
  	}
  	.white {
  		color: #fff;
  	}
  </style>
</head>

<body>

  <div id="wrapper">
	<header>
		<h1>Playground</h1>
<nav>
	<ul>
		<li><a href="index.php">home</a></li>
		<li><a href="calc.html">calc</a></li>
		<li><a href="calc2.html">calc2</a></li>
		<li><a href="strings1.html">post</a></li>
		<li><a href="rand.php">random</a></li>
		<li><a href="strings.php">strings</a></li>
		<li><a href="register.php">registration</a></li>
		<li><a href="soups1.php">soups1</a></li>
		<li><a href="soups3.php">soups3</a></li>
		<li><a href="books.php">books</a></li>
		<li><a href="sort.php">sort</a></li>
		<li><a href="contact.php">contact</a></li>
	</ul>
</nav> 
		<h2><span class="red">&hearts;</span>&nbsp; <sapn class="aqua">&diams;</sapn>&nbsp;
			<span class='yellow'>&clubs;</span>&nbsp;<span class="orange">&spades;</span></h2>
		   
	</header>
	
	<div id="main" role="main">
		<a href="register.php"><input type="submit" name="return" value="back" /></a>
	<?php
	 
		// Script handle_reg.php v 1.0
		
		// Constant
		$okay = TRUE;
		
		$color_type = $_POST['color'];
		
		$trim_pass = trim($_POST['password']);
		$trim_confirm = trim($_POST['confirm']);
		
		$email = $_POST['email'];
		
		$color = $_POST['color'];
		
		$birth = $_POST['month'] . $_POST['day'] . $_POST['year'];
		
		$month = $_POST['month'];
		$day = $_POST['day'];
		$year = $_POST['year'];
		
		date_default_timezone_set("America/New_York");
		$date = date('Y');
		
		
		
		if (strlen($email <='0')) {
			echo '<p class="error">Please enter your email address</p>';
			$okay = FALSE;
		}
		if(empty($trim_pass)) {
			print '<p class="error">Please enter your password</p>';
			$okay = FALSE;
		}
		
		if ($trim_pass != $trim_confirm) {
			print '<p class="error">Your confirmed password did not match your original password</p>';
			$okay = FALSE;
		}
		
		if ( is_numeric($_POST['year'] ) AND ( strlen($_POST['year'] ) == 4) ) {
			if ( $_POST['year']< $date) {
				$age = $date - $_POST['year'];
			} 
			else { 
				print '<p class="error">Either you entered the wrong date or you have yet to be born.</p>';
				$okay = FALSE;
			}
		}
		else {
			print '<p class="error">Please enter a four year digit for your date of birth</p>';
			$okay = FALSE;
		}
		
		if ( !isset( $_POST['terms'] ) ) {
			print '<p class="error">You must agree to the terms</p>';
			$okay = FALSE;
		}
		
		
		switch ($_POST['color']) {
			case  'red':
				$color_type = 'primary';
				print '<p class="red">You picked '. $_POST['color'].'</p><br />';
				break;
			case 'yellow':
				$color_type = 'primary';
				print '<p class="yellow">You picked '. $_POST['color'].'</p><br />';
				break;
			case 'blue':
				$color_type = 'primary';
				print '<p class="blue">You picked '. $_POST['color'].'</p><br />';
				break;
			case 'green':
				$color_type = 'secondary';
				print '<p class="green">You picked '. $_POST['color'].'</p><br />';
				break;
			case 'purple':
				$color_type = 'secondary';
				print '<p class="purple">You picked '. $_POST['color'].'</p><br />';
				break;
			case 'white':
				$color_type = 'secondary';
				print '<p class="white">You picked '. $_POST['color'].'</p><br />';
				break;
			case 'pink':
				$color_type = 'secondary';
				print '<p class="pink">You picked '. $_POST['color'].' </p><br />';
				break;
			case 'orange':
				$color_type = 'secondary';
				print '<p class="orange">You picked '. $_POST['color'].'</p><br />';
				break;
			case 'black':
				$color_type = 'secondary';
				print '<p class="black">You picked '. $_POST['color'].'</p><br />';
				break;
			default: 
				print '<p class="error">Please pick your favorite color.</p>';
				$okay = FALSE;
				break;
		}
		if ($year >= 1991) {
			echo "you are not old enough to drink?";	
			$okay = FALSE;
		}
		
				
		if ($okay) {
			print "<h3>You have been successfully registered  <p class='error'>(but not really),</p> thanks for filling out the form.</h3>";
			echo '<p>you will be '. $age . ' some time this year.'."<br />".'And your favorite color is a '. $color_type . ' color</p>';
		
		}
		print "<p>You were born on $day/$month/$year</p>";
		
		print 'Today is: '.date('r').' from where you are.';
	
	

		/*if (is_numeric($_POST['year'])) {
			$age = 2012 - $_POST['year'];
			if ($_POST['birth'] >= 2012) {
				print '<p class="error">Either you filled in your birth year wrong or you have yet to be born, which would be something.</p>';
				$okay = FALSE;
			}
			// Calculate age this year
		} else {
			print '<p class="error">Please enter the year in which you were born as four digits</p>';
			$okay = FALSE;
		}
		if ($okay) {
			print '<p>You have been sucessfully registered (but not really).</p>';
			print "<p>You will turn $age this year</p>";
		}
		
		if ( $_POST['color'] == 'red') {
			$color_type = 'primary';
			print '<p>Your favorite color is red and it is a '. $color_type. ' color.</p>';
		}
		
		else if ( $_POST['color'] == 'blue') {
			$color_type = 'primary';
			print '<p>Your favorite color is blue and it is a '. $color_type. ' color.</p>';
		}
		else if($_POST['color'] == 'blue') {
			$color_type ='primary';
		}
		else if ($_POST['color'] == 'yellow') {
			$color_type = 'primary';
			print '<p>Your favorite color is yellow and it is a '. $color_type. ' color.</p>';
		}
		
		else if ($_POST['color'] == 'green') {
			$color_type = 'secondary';
			print '<p>Your favorite color is green and it is a '. $color_type. ' color.</p>';
		}
		
		else if ($_POST['color'] == 'purple') {
			$color_type = 'secondary';
			print '<p>Your favorite color is purple and it is a '. $color_type. ' color.</p>';
		}
		
		else if ($_POST['color'] == 'orange') {
			$color_type = 'secondary';
			print '<p>Your favorite color is orange and it is a '. $color_type. ' color.</p>';
		}
		
		else if ($_POST['color'] == 'white') {
			$color_type ='secondary';
			print '<p>Your favorite color is white and it is a '. $color_type. ' color.</p>';
		}
		
		else if ($_POST['color'] == 'black') {
			$color_type = 'secondary';
			print '<p>Your favorite color is black and it is a '. $color_type. ' color.</p>';
		}
		
		else if ($_POST['color'] == 'pink') {
			$color_type = 'secondary';
			print '<p>Your favorite color is pink and it is a '. $color_type. ' color.</p>';
		}
		*/
		

	 ?>
	 
	</div>
	<footer>

	</footer>
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