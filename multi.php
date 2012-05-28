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

<?php require('templates/header.php'); ?>
	<div id="main" role="main">
	<?php 
		// First Book
		$phpvqs 	= array(
						1 => 'Getting started with PHP.',
						2 => 'Variables.',
						3 => 'HTML forms and PHP.',
						4 => 'Using numbers.'
						);
		// SECOND BOOK
		$phpadv 	= array(
						1 => 'Advanced PHP techniques',
						2 => 'Developing web applications',
						3 => 'Advanced database concepts',
						4 => 'Security techniques'
						);
		// THIRD BOOK
		$phpmysql 	= array(
						1 => 'Introduction to PHP',
						2 => 'Programming wiht PHP',
						3 => 'Creating dynamic websites with PHP',
						4 => 'Introduction to MySQL'
						);
		// CREATE MULTIDIMENSIONAL ARRAYS
		$books 		= array(
						'PHP VQS' => $phpvqs,
						'PHP Advanced VQP' => $phpadv,
						'PHP and MySQL VQP' => $phpmysql
						);

			
			echo "<table><th>Books by Larry Ullman</th>
					<tr>
						<td>The third chapter of my first book is:</td>
						<td>&nbsp;&nbsp;&nbsp;</td>
						<td>{$books['PHP VQS'][3]}</td>
					</tr>
					<tr>
						<td>The first chapter of my second book is</td>
						<td>&nbsp;&nbsp;&nbsp;</td>
						<td>{$books['PHP Advanced VQP'][1]}</td>
					</tr>
					
					<tr>
						<td>The fourth chapter of third  book is</td>
						<td>&nbsp;&nbsp;&nbsp;</td>
						<td>{$books['PHP and MySQL VQP'][4]}</td>
					</tr>
					
			
				  </table>";
				  
				  foreach ($books as $title => $chapters) {
				  		echo "<table><th><h2>$title</h2></th>";
				  			foreach ($chapters as $number => $chapter) {
				  				echo "<tr><td>Chapter $number: $chapter</td></tr><br /></table>";
				  			}
				  }
				  
				 $grades 	= array(
				 				'Richard' 	=> 95,
				 				'Sherwood'  => 82,
				 				'Toni'		=> 98,
				 				'Franz'		=> 87,
				 				'Melissa'	=> 75,
				 				'Rodney'	=> 85
				 				);
				 echo '<p>Originally the array looks like this: <br />'; 
				 	foreach ($grades as $student => $grade) {
				 		echo "$student: $grade<br />\n";
				 	}
				 echo '</p>';
				 
				 asort($grades);
				 
				 echo '<p>After sorting the array by VALUE from lowest to highest using asort(), the array look like this: <br />';
				 foreach ($grades as $student => $grade) {
				 	echo "$student: $grade<br />\n";
				 }
				 echo '</p>';
				 arsort($grades);
				 echo '<p>After sorting the array by VALUE from highest to lowest using arsort(), the array look like this: <br />';
				 		 foreach ($grades as $student => $grade) {
				 		 	echo "$student: $grade<br />\n";
				 		 }
				 		 echo '</p>';
				 		 
				  ksort($grades);
				  
				  echo '<p>After sorting the array by KEYS (in this case the keys are strings so it will do it by alphabetically) from lowest to highest using ksort(), the array look like this: <br />';
				  		 foreach ($grades as $student => $grade) {
				  		 	echo "$student: $grade<br />\n";
				  		 }
				  		 echo '</p>';
				  		 
				  krsort($grades);
				  
				  echo '<p>After sorting the array by KEYS (in this case the keys are strings so it will do it by alphabetically) from Highest to lowest using krsort(), the array look like this: <br />';
				  		 foreach ($grades as $student => $grade) {
				  		 	echo "$student: $grade<br />\n";
				  		 }
				  		 echo '</p>';
				  
				  
				 
				 
				 
		?>
	</div>

  </div> <!--! end of #container -->
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