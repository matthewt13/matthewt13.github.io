<?php
		
			$name = $_POST['name'];
			$email = $_POST['email'];
			$contact = $_POST['contact'];
			$esubject = $_POST['subject'];
			$message = $_POST['message'];
			$from = "From: $name";
			$to = 'mattieqh@gmail.com';
			$subject = "$esubject";
			$body = "$message";
			
?>
			
<?php 	if ($_POST['submit']) {
				if (mail ($to, $subject, $body, $from)) { 
					echo '<p>Your message has been sent. We will try and respond as soon as we can.</p>';
				} else {
					echo '<p>Something went wrong, please go back and try again.';
				}
			}
		
		?>