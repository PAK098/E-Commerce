<?php
	// Configuration
		$CONFIG['contact']['to'] = 'Support <info@australia.example.com>';
	// Initialise
		$name = $email = $subject = $message = '';
		$errors = '';
		$sent = false;

	// Process Submitted Form
		if(isset($_POST['send'])) 
		{
			// Read Data
				$name = trim($_POST['name']);
				$email = trim($_POST['email']);
				$subject = trim($_POST['subject']);
				$message = trim($_POST['message']);

			// Check Data
				$errors = [];
				if(!$name) $errors[] = 'Missing Name';
				elseif(preg_match('/\r\|\n/', $name))
					$errors[] = 'Invalid Name';
				if(!$email) $errors[] = 'Missing Email Address';
				elseif (!filter_var($email, FILTER_VALIDATE_EMAIL))
					$errors[] = 'Invalid Email Address';
				if(!$subject) $errors[] = 'Missing Subject';
				elseif(preg_match('/\r\|\n/', $subject))
					$errors[] = 'Invalid Subject';
				if(!$message) $errors[] = 'Missing Message';
		
			// send email or show error messages		
				if(!$errors) { 		// If no errors, Send Email
					$to = $CONFIG['contact']['to'];
					// $subject already set
					$message = wordwrap($message, 70, "\r\n");
					// headers	
					$headers = [
						'Date' => date('r') ,
						'From' => "$name <$email>",
						'Cc' => "$name <$email>"
					];
					// send mail.
					mail($to, $subject, $message, $headers);
					$sent = true;
				}
				else {				// Else, Report Errors
					$errors = implode('<br>', $errors);
					$errors = sprintf('<p class="errors">%s</p>', $errors);
				}
		}