<?php

	$email_from = $_POST['email'];
	$email_subject = "Contact Form: medheal Template";
	$email_message = "Please find below a message submitted by ".stripslashes($_POST['name'])."\n\n";
	$email_message .=" on ".date("d/m/Y")." at ".date("H:i")."\n\n";
	$email_message .= stripslashes($_POST['message']);

	$headers = 'From: '.$email_from."\r\n" .
   'Reply-To: '.$email_from."\r\n" ;

	
	try{
	    mail('dr_m_kassem@yahoo.com', $email_subject, $email_message, $headers);
	}catch(\Exception $e){
	    echo json_encode(['type' => 'danger', 'msg' => $e->getMessage()]);
	}
	echo json_encode(['type' => 'success', 'msg' => "Thanks for contacting us."]);
	die();
?>