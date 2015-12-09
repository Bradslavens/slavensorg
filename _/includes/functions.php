<?php

function send_mail(){

	include_once $_SERVER['DOCUMENT_ROOT']. '/PHPMailer-master/PHPMailerAutoload.php';

		//Create a new PHPMailer instance
		$mail = new PHPMailer();
		//Tell PHPMailer to use SMTP
		$mail->isSMTP();
		//Enable SMTP debugging
		// 0 = off (for production use)
		// 1 = client messages
		// 2 = client and server messages
		$mail->SMTPDebug = 2;
		//Ask for HTML-friendly debug output
		$mail->Debugoutput = 'html';
		//Set the hostname of the mail server
		$mail->Host = 'smtp.gmail.com';
		//Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
		$mail->Port = 587;
		//Set the encryption system to use - ssl (deprecated) or tls
		$mail->SMTPSecure = 'tls';
		//Whether to use SMTP authentication
		$mail->SMTPAuth = true;
		//Username to use for SMTP authentication - use full email address for gmail
		$mail->Username = "bradslavens@gmail.com";
		//Password to use for SMTP authentication
		$mail->Password = "superdude1";
		//Set who the message is to be sent from
		$mail->setFrom('bradslavens@gmail', 'test');
		//Set an alternative reply-to address
		$mail->addReplyTo('replyto@example.com', 'First Last');
		//Set who the message is to be sent to
		$mail->addAddress('bradslavens@gmail.com', 'brad test');
		// add cc
		$mail->addAddress('bradslavens@gmail.com', 'cc');
		//Set the subject line
		$mail->Subject = 'Slavens Realty Application';
		//Read an HTML message body from an external file, convert referenced images to embedded,
		//convert HTML into a basic plain-text alternative body
		$mail->Body    = 'Hi, '. $_POST['first_name'].', <br />Thank you for your interest in Slavens Realty. 
							<br />You provided the following information:
							<br />Phone: '.$_POST['phone'].' 
							<br />License Number:'. $_POST['license_number']. '<br />We will contact you as soon as possible to set up an interview.
							<br /><br />Best Regards,<br />Brad Slavens, Broker<br />Slavens Realty<br />619-253-0529<br />bradslavens@gmail.com<br />';
		//Replace the plain text body with one created manually
		$mail->AltBody = 'This is a plain-text message body';

		//send the message, check for errors
		if (!$mail->send()) {
		    echo "Mailer Error: " . $mail->ErrorInfo;
		} else {
		    echo "Thank You <strong> ". $_POST['first_name'] . "</strong>. We'll get back to you right away. <a href='../../index.php'>Home</a>";
		}


}
