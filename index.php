<!doctype html>
<head>
  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>PHP!</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <link rel="stylesheet" href="css/style.css">
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' />
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
    <form method="post" action="handle_form.php">
    	<p>Name: <select name='title'>
    		<option value='Mr'>Mr.</option>
    		<option value='Mrs'>Mrs.</option>
    		<option value='Ms'>Ms.</option>
    	</select>
    		<input type="text" name="name" size="20" />
    	</p>
    	
    	<p>Email Address: <input type="text" name="email" size="20" /></p>
    	
    	<p>Response: This is..&nbsp;<input type="radio" name="response" value="okay" />&nbsp;okay&nbsp;
    						<input type="radio" name="response" value="excellent" />&nbsp;excellent&nbsp;
    						<input type="radio" name="response" value="boring" />&nbsp;boring&nbsp;
    	</p>
    	<input type="hidden" name="form_page" value="index.php" />
    	
    	<p>Comments: <textarea name="comments" rows="3" cols="40"></textarea></p>
    	<p><input type="submit" name="submit" value="Send Form" /></p>
    </form>
		<article>
			<li>
				<p>
					This is a php based website that I am learning the in's and out's of php and how to make websites more dynamic.
					So far, I am loving the php, it is truely a joy to work with and it is very powerful. I can see myself getting 
					really into this stuff, that is what I am going to do anyways,really sink my teeth into this language and become
					a monster at php.
				</p>
			</li>
		</article>
		
		</pre>
    </div>

  </div> <!--! end of #container -->

<?php require('templates/footer.php'); ?>
  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
 


  <!-- scripts concatenated and minified via ant build script-->
  <script defer src="js/script.js"></script>
  <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
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
