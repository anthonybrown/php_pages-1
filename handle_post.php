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
</head>

<body>

  <div id="wrapper">
	<header>
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
	
	</header>
	<div id="main" role="main">
	<?php
	
	// Create shorthand versions of the pre-defined variable
	
	$file	= $_SERVER['SCRIPT_FILENAME'];
	$user	= $_SERVER['HTTP_USER_AGENT'];
	$server = $_SERVER['SERVER_SOFTWARE'];	
	
	// Print the name of this script
	
	#echo '<p>You are running the file: </p>' . $file. '<br />';
	
	// Print the users information
	
	#echo 'You are viewing this page using: <br /><b>'. $user.'</b><br />';
	
	// Print the server's information
	
	#echo 'This server is running: <br /><b>'. $server . '</b><br />';
	
	// Variables for string
	
	$name	= "<h1 style=\"color:red; font-size: 3em; padding: 4px 10px; background: #181818;\">Tony Brown yeah</h1>";
	
	echo $name;
	
	
	 $first_name = trim($_POST['first_name']);
	 $last_name = trim($_POST['last_name']);
	 $posting = trim($_POST['posting']);
	 $posting = nl2br($_POST['posting']);
		
	$name = $first_name .'  ' . $last_name;
	
	$name = urlencode($name);
	$email = urlencode($_POST['email']);
	$posting = urldecode($_POST['posting']);
	
	print 'Click <a href="thanks.php? name='. $name . '&email=' . $email . '&posting=' . $posting . '">here</a> to continue';
		
	//print "<div>Thank you for your message Mr: $name,<br /> this is what you had to say:<br /> <p>$posting</p></div>";
	
	$string = 'yesman';
	$sub = substr($string, -3, 3);
	
	$me = "Tony D Brown";
	$me = str_ireplace('D', 'Douglas', $me);
	
	echo "$me";
	
	//echo "<h2 style=\"color: #d00;\">$sub</h2>";
	
	$words = str_word_count($posting);
	
	//$posting = substr($posting, 0, 10);
	
	$string = ' extra space at  the before and after text  ';
	//echo($string);
	$string = trim($string);
	//echo "<br />$string <br />";
	
	$posting = str_ireplace('fuck you', '&$@*! @%*^*#', $posting);
	$posting = str_ireplace('fuck', '#%@*^ #*^%@', $posting);
	$posting = str_ireplace('cunt', '$*&^% @*&%$#', $posting);
	$posting = str_ireplace('ass', 'XXXX XXXX', $posting);
	$posting = str_ireplace('shit', 'XXXX XXXX', $posting);
	$posting = str_ireplace('pussy', 'XXXX XXXX', $posting);
	$posting = str_ireplace('nigger', 'XXXX XXXX', $posting);
	$posting = str_ireplace('dick', 'XXXX XXXX', $posting);
	$posting = str_ireplace('suck', 'XXXX XXXX', $posting);
	$posting = str_ireplace('bitch', '@', $posting);
	$posting = str_ireplace('bastard', 'XXXXX', $posting);
	
	//echo "Thank you $name for your posting:<br /> <p><em>$posting</em></p>$words words long";
	
	

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