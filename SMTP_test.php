<?php
        
        require_once 'phpmailer/class.phpmailer.php';

        $mail = new PHPMailer();

        $body = ""; 					//Fill the body of the mail
	$mail->IsSMTP();
	$mail->SMTPDebug = 2;

	$mail->AddAddress("", ""); 			//Fill in => "e-mail@adresse.com", "Person X"
	$mail->SMTPAuth   = true;                  	// Enable SMTP authentication
	$mail->Host       = ""; 			// Fill in the ip address
	$mail->Port       = ;                    	//Fill the SMTP port in
	$mail->Username   = ""; 			// The username to authenticate with the server
	$mail->Password   = "";        			// The password to authenticate with the server
	$mail->SetFrom('', ''); 			// Fill in => "e-mail@adresse.com", "Person X"
	$mail->Subject = "Test send from the new hcl"; 	// Fill the subject of the mail in
	$mail->MsgHTML($body);

        if(!$mail->Send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	}
	else{
		echo "Message sent!";
	}
?>
