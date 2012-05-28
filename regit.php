
	<?php define('TITLE', 'Login'); 
		require('_includes/header.html');
		
		//Look if the form has been submitted with the POST array
		if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
			$firstname_err = FALSE; 
			$lastname_err = FALSE;
			$email_err = FALSE;
			$pass1_err = FALSE;
			$pass2_err = FALSE;
			$match_err = FALSE;
			
			//Create a flag
			$problem = FALSE; // no problems so far :)
			
			//Check that first name was entered
			if (empty($_POST['firstname'])) {
				$problem = TRUE;
				$firstname_err = TRUE;
			}
			
			// Check that last name was entered
			if (empty($_POST['lastname'])) {
				$problem = TRUE;
				
				$lastname_err =TRUE;
			}
			//Check that an email was given
			
			if (empty($_POST['email']) || (substr_count($_POST['email'], '@') != 1) ) {
				$problem = TRUE;
				
				$email_err = TRUE;
			}
			
			//Check that a password was entered
			
			if (empty($_POST['password1'])) {
				$problem = TRUE;
				
				$pass1_err = TRUE;
			}
			
			if (!is_numeric($_POST['password1']) && (!is_numeric($_POST['password2']))) {
				$match_err = TRUE;
				$problem = TRUE;
			}
			
			// Check that the passwords match
			
			if ($_POST['password1'] != $_POST['password2']) {
				$problem = TRUE;
				$pass2_err = TRUE;
				
			}
			
			//If everything is cool
			
			if (!$problem) {
				echo "<p class='blue'>You are now registered!<br />Okay not really but you passed the validation</p>";
				
				$body = "Thank you for registering with the J.D.Salinger fan club! Your password is '{$_POST['password1']}'.";
				mail($_POST['email'], 'Registraion Confirmation', $body, 'From: tony.brown.357@gmail.com');
				
				//Clear posted arrays
				$_POST = array();
			}
			 else {// Forgot a field
				print "<p class='error'>Please try again.</p>";
			}
		}
	?>	
	
	<?php require('_includes/footer.html') ?>








