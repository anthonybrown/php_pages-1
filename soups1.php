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

  <title>No Soup for You!</title>
  <meta name="description" content="php functions, arrays, literals">
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
	<h1>Mmm..soups</h1>
<?php require('templates/header.php'); ?>
	<div id="main" role="main">
	<?php echo('<h2>let\'s get some PHP up in here!</h2>')?>
	
	<?php 
		$fname 		= 'Anthony';
		$soups		=  array(
		'Monday' 	=> 'Clam Chowder',
		'Tuesday' 	=> 'White Chicken Chile',
		'Wednesday' => 'Vegetarin',
		'Thursday' 	=> 'Italian Wedding', 
		);
		
		$count1 = count($soups);
		
		echo '<p>The soups array originally had '. $count1 . ' elements</p>';
	
		$soups['Friday'] = 'French Onion';
		$soups['Saturday'] = 'French Chicken Noodle';
		$soups['Sunday'] = 'Tomatoe &amp; Basil or Chicken &amp; Broccoli';
		
		$count2 = count($soups);
		
		echo 'Now the array has '. $count2.' elements.<br />';
		
		#$soups['Thursday'] = 'Chicken &amp; rice';
		
		#echo 'The soup for Sunday is '. $soups['Sunday']. '<br />';
		
		$even = range(0, 50, 2);
		$odd = range(0, 50, 3);
		
		//echo 'even: '.$even[2].'<br />';
		//echo 'odd: '.$odd[6].'<br />';
		
		//echo $soups;
		//print_r($fname."<br />");
		print_r ($soups).'<br />' ;
		
		echo "<br />The first item in the array is:  {$soups['Monday']}"; // Curly braces prevents the error when wrapping in double quotes.
	?>
	</div>
<?php require('templates/footer.php') ?>
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