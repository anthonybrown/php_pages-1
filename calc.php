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

  <title>Calculations with PHP</title>
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
	<h1>This is PHP!</h1>
<?php require('templates/header.php') ?>
	
	<div id="main" role="main">
	<?php 
		$price = $_POST['price'];
		$quantity = $_POST['quantity'];
		$discount = $_POST['discount'];
		$tax = $_POST['tax'];
		$shipping = $_POST['shipping'];
		$payments = $_POST['payments'];
		
		$total = $price * $quantity;
		$total = $total + $shipping;
		$total = $total - $discount;
		
		$taxrate = $tax/100;
		$taxrate = $taxrate + 1;
		
		$monthly = $total / $payments;
		
		$total = number_format($total, 2);
		$monthly = number_format($monthly, 2);
		
		echo "<p>You have selected to buy: <span  class=\"number\">$quantity </span>sprockets at <span  class=\"number\">\$$price</span>.<br />
				each plus a $shipping shipping cost and a <span  class=\"number\">$tax </span>percent tax rate.<br />After your
				<span class=\"number\">\$$discount</span> discount, the total is<span class=\"number\">$total.<br />Divided over <span
				class=\"number\">$payments</span>monthly payments of <span class=\"number\">$monthly</span></p>";
		
	?>
	</div>
<?php require('templates/footer.php'); ?>
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