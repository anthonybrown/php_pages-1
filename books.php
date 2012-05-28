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
 
  <style>
  .redt{
  	padding: 0 30px;
  	margin: 20px 0;
  	background: rgba(0, 0, 250, .2);
  	color:  #d00;
  	text-shadow:  -1px -1px 0 #100;
  }
  </style>
</head>

<body>

  <div id="wrapper">
	<header>
		<h1>Books part II</h1>
	<?php require('templates/header.php'); ?>
	<div id="main" role="main">
	<?php 
		$phpvqs = array(
		1 => 'Getting started with PHP',
			 'Variables',
			 'HTML forms and PHP',
			 'Using Numbers'
			);
						
		$phpadv = array(
		1 => 'Advanced PHP techniques',
			 'Developing Web Applications',
			 'Advanced Database Concepts',
			 'Security Techniques'
			);
		$phpmysql = array(
		1 => 'Introduction to PHP',
			 'Programing with PHP',
			 'Creating Dynamic Web Sites',
			 'Introduction to MySQL'	
			);
		
		$books = array(
			'PHP VQS' => $phpvqs,
			'PHP Advanced VQP' => $phpadv,
			'PHP and MySQL VQP' => $phpmysql	
			);
		
		//echo "<p>The third chapter of my first book is <i class=\"red\">{$books['PHP VQS'][3]}</i></p>";
		
		//echo "<p>The first chapter of my second book is <i class=\"red\">{$books['PHP Advanced VQP'][1]}</i></p>";
		//echo "<p>The fourth chapter of my third book is <i class=\"red\">{$books['PHP and MySQL VQP'][4]}</i></p>";
		
		/*foreach($books as $key => $value){
			echo "<p>This is the key: <i class=\"red\">$key</i> and this is the value <i class=\"red\">$value</i>";
				foreach ($value as $more => $chaps) {
					echo "<p>The index is $more the chapter is $chaps</p>";
				}
			echo"</p>\n";
		};*/
		
		foreach ($books as $title => $chapters) {
			echo "<p>$title";
				foreach($chapters as $number => $chapter) {
					echo "<br />Chapter $number: <b class=\"redt\">$chapter</b>";
				}
				
				echo '</p>';
		}
		
	
		/*foreach ($books as $title => $titles) {
			echo '<br /><p>'.$title.'</p>';
		}*/
		
		sort($books);
		
		for ($n=0; $n < count($chapters); $n++) {
			echo "<p>The value is $chapters[$n]</p>\n";
		}
		
		print "<p>$books</p>";
		
		
	
			 //var_dump ( $books['PHP Advanced VQP'] );
		
	?>
	</div>
	
		<?php date_default_timezone_set('America/New_York');?>
		<?php echo 'The date &amp; time:<br />'.date('r'); ?>
	<?php require('templates/footer.php'); ?>
  </div> <!--! end of #container -->


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/mootools/1.4.1/mootools-yui-compressed.js"></script>


  <!-- scripts concatenated and minified via ant build script-->

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