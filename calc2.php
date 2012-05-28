<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>	<html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>	<html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!-- Consider adding an manifest.appcache: h5bp.com/d/Offline -->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<html lang="en">
<head>
<title>Calculate Numbers</title>
<meta charset="utf-8" />

<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

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
  </head>


<style>
	.number{
		font-weight:  bolder;
		color: #d00;
		text-shadow: 1px 1px 0 aqua;
	}
</style>
</head>
</head>

<body>


<div id="wrapper">
<header>
<?php require('templates/header.php'); ?>

<div id="main" role="main">
<?php 

	$price 	  = $_POST['price'];
	$quantity = $_POST['quantity'];
	$discount = $_POST['discount'];
	$tax	  = $_POST['tax'];
	$shipping = $_POST['shipping'];
	$payments = $_POST['payments'];
	
	/*$total = $price * $quantity;
	$total = $total + $shipping;
	$total = $total - $discount;*/
	
	// Get the total
	$total = (( $price * $quantity ) + $shipping) - $discount;
	
	
	$taxrate = ($tax/100) + 1;
		
	$total = $total * $taxrate;
	
	$monthly = $total / $payments;
	
	$monthly = number_format($monthly, 2);
	$total	 = number_format($total, 2);
	
	print "<h2>You have selected to purchase:<br />
	<span class=\"number\">$quantity </span> sprokets at<br />
	$<span class=\"number \">$price</span> each, plus a <br />
	$<span class=\"number\">$shipping</span> shipping fee and a<br />
	<span class=\"number\">$tax</span> percent tax rate.<br />
	After your $<span class=\"number\">$discount </span>discount, <br />
	your total is$<span class=\"number\">$total</span>. <br />Divided over <span class=\"number\"> $payments</span> payments of \$$monthly</h2>"
		
?>

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