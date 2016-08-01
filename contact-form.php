<?php
	if($_POST["submit"]) {
	    $recipient="tss.gndu@gmail.com";
	    $sender=$_POST["name"];
	    $senderEmail=$_POST["email"];
	    $subject=$_POST["messageForm"];
	    $message=$_POST["message"];

	    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";
	    $headers = array("From: tss.gndu@gmail.com",
		    "Reply-To: $senderEmail",
		    "X-Mailer: PHP/" . PHP_VERSION
		);

	    mail($recipient, $subject, $mailBody, $headers);

	    $thankYou="<p>Thank you! Your message has been sent.</p>";
	}
?>