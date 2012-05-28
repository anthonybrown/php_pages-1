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

<?php require('templates/header.php');  ?>
	<div id="main" role="main">
	<?php 
	
		$soups = array(
			'Monday' => 'chicken noodle',
			'Tuesday' => 'Potatoe',
			'Wednesday' => 'Beef Vegetitable'
		);
		
		$count1 = count($soups);
		
	 ?>
	 
 	<form method="post" action="soups.php">
 			 <table>
 			 	
 			 	<tr>
 			 		<th>SOUPS</th>
 			 	</tr>
 			 	<tr>
 			 		<td>Monday</td>
 			 		<td>&nbsp;</td>
 			 		<td>&nbsp;</td>
 			 		<td>&nbsp;</td>
 			 		<td>&nbsp;</td>
 			 		<td>Chicken Noodle</td>
 			 		
 			 	</tr>
 			 	<tr>
 			 		<td>Tuesday</td>
 			 		<td>&nbsp;</td>
 			 		<td>&nbsp;</td>
 			 		<td>&nbsp;</td>
 			 		<td>&nbsp;</td>
 			 		<td>Potatoe</td>
 			 	</tr>
 			 	
 			 	<tr>
 			 		<td>Wednsday</td>
 			 		<td>&nbsp;</td>
 			 		<td>&nbsp;</td>
 			 		<td>&nbsp;</td>
 			 		<td>&nbsp;</td>
 			 		<td>Beef Vegetable</td>
 			 		
 			 	</tr>
 			 	
 				<tr>
 					<td>&nbsp;</td>
 				</tr>
 			 	
 			 	<tr>
 			 		<td><?php echo "<p class='white'>The soups array originally has $count1 elements in it.</p>"; ?></td>
 			 	</tr>
 			 	
 			 	<?php $soups['Thursday'] = 'Cream of chicken &amp; Broccoli'; 
 			 		  $soups['Friday'] = 'Tomatoe or Clam Chowder'; $soups['Saturday'] = 'Butternut Squash'; 
 			 		  $soups['Sunday'] = 'Italian Wedding or Wild Rice &amp; Chicken'; 
 			 		  
 			 		  $count2 = count($soups);
 			 		?>
 			 	<tr>
 			 		<td>
 			 			<?php echo "<p class='white'>Now the array (after I added some more items to it) has $count2 elements in it.</p>"; ?>
 			 		</td>
 			 	</tr>	
 			 	
 			 	<tr>
 			 		<td>
 			 			<?php echo "<tr><td>Monday's soup is </td><td>{$soups['Monday']} </td></tr>"; ?>
 			 		</td>
 			 	</tr>	
 			 	<tr>
 			 		<td>
 			 			<?php echo "<tr><td><p class='white'>I am using a foreach loop to loop through the array and print out the 
 			 				Keys and values</p></td></tr><tr><td><p class='white'>It is easy to see what is in the array</p></td></tr>"; ?>
 			 		</td>
 			 	</tr>
 			 	
 			 	<tr>
 			 		<td>
 			 			<?php foreach ($soups as $day => $soup) {
 			 				echo "<tr><td class='red'>$day</td> <td class='aqua'>$soup</td></tr>"; } ?>
 			 		</td>
 			 	</tr>
 			 	
 			 	<tr>
 			 		<td><?php for ($i = $day; $i <count($soups[$i]); $i++) {
 			 			print "<p>The values in the array are . $soups[$i]</p>";
 			 		} ?></td>
 			 	</tr>
 			 		 	
 			</table>
 	</form>
 
	</div>

  </div> <!--! end of #wrapper -->
<?php require('templates/footer.php');  ?>

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