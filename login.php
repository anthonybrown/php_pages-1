<?php define('TITLE', 'My Login page'); require('_includes/header.html'); ?>

	<?php echo "<h2>Login Form</h2><p>Users who are logged in can take advantage of certain features like this, that, abd the other thing.
	</p>"; ?>

<!-- BEGIN CHANGABLE CONTENT -->
<div id="main" role="main">
		<h2>I am the title of the page</h2>
		
		<?php
		

		
		if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
		//if ( isset($_POST['submitted']) ) {
		
			if ( (!empty($_POST['email'])) && (!empty($_POST['password'])) ){
				if ( (strtolower($_POST['email']) == 'me@example.com') && ($_POST['password'] == 'testpass') ) {
						echo '<h2>Shit seems correct!<br />You are signed in motherfucker!
						</h2>';	
					}else {
						echo '<p>Yo Bro!<br />The email and password you provided does\'t seem to match<br />Come back when you are straight!.</p>';
					}				
			}else {
				echo '<p>You need to fill in all the blanks brothah!<br />Do it again!</p><br />'
				.'<form action="login.php"><input type="submit" name="back" value="return" /></form>';
			}
		}
		else {
			print '<form action="login.php" method="post">
			<p>Email Address: <input type="text" name="email" size="20" /></p>
			<p>Password: <input type="password" name="password" size="20" /></p>
			<p><input type="submit" name="submit" value="Log In!" /></p>
			<p><input type="hidden" value="true" name="submitted" /></p>
			</form>';
		}	
		 ?>
</div>
<?php require('_includes/footer.html');  ?>

