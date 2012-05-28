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

  <title>Handle the Post Script</title>
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
		<li><a href="#">contact</a></li>
	</ul>
</nav>		
</header>
<h2><span class="red">&hearts;</span>&nbsp; <sapn class="aqua">&diams;</sapn>&nbsp;
	<span class='yellow'>&clubs;</span>&nbsp;<span class="orange">&spades;</span></h2>

	<div id="main" role="main">
	<?php 
	 $s1 = 'Hello';
	 $s2 = 'World';
	 $greeting = $s1 . $s2;
	 
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];
		$posting = nl2br($_POST['posting']);
		
		$name = $first_name . ' '.$last_name;
		
		
		$html_post = htmlentities($_POST['posting']); // the htmlspecialchars only converts some tags where the htmlentities converts all tags.
		$strip_post = strip_tags($_POST['posting']);
		$htmlspecialchars = htmlspecialchars($_POST['posting']);
		
		
		// Get word count
		$words = str_word_count($posting);
		
		// Get a snippet from the posting
		$posting = substr($posting, 0, 50);
		
		// Print message
		print "<div>Thank you, $name, for your posting:
		<p>$posting...</p>
		<p>($words words)</p></div>";
		
		 
		
		
		
		$name = urlencode($name);
		$email = urlencode($_POST['email']);
		
		print '<br />Click <a href="thanks.php? name='.$name.'&email='.$email .'">Here</a> to continue';
		
			
		
		
		print "<div>Thank you, $name, for your posting: 
			<p>Original: $posting</p>
			<p>Entity: $html_post</p>
			<p>Stripped: $strip_post</p></div>
			<p>Special Chars: $htmlspecialchars</p>";
		
		
		//########## New Code here ! #########\\
		
		
		
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