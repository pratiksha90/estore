<?php
   require 'connection.php';
   
require_once 'phpmailer/PHPMailerAutoload.php';
if(isset($_POST['name'], $_POST['email'], $_POST['comment'])) {
	$fields = [
		'name' => $_POST['name'],
		'email' => $_POST['email'],
		'comment' => $_POST['comment']		
	];

	foreach($fields as $field => $data) {
		if(empty($data)) {
			$errors[] = 'The '. field . ' field is required.';
		}
	}

  
  
  $mail = new PHPMailer;
  $mail->IsSMTP();

  $mail->SMTPDebug  = 4;  
  $mail->SMTPAuth   = TRUE;
  $mail->SMTPSecure = "tls";
  $mail->Port       = 587;
  $mail->Host       = "smtp.gmail.com";
  $mail->Username   = "host email";
  $mail->Password   = "host password";

  $mail->IsHTML(true);
  $mail->AddAddress("//root email-website owner");
  
  $mail->Subject = "Contact Form";
  
  $mail->Body='From: ' . $fields['name'] . ' (' . $fields['email']. ')<p>'. $fields['comment'].'</p>';
  $mail->Send(); 
   
 if(!$mail->Send()) {
    echo "Error while sending Email.";
    var_dump($mail);
  } else {
    
      header('location:contact.php?msg=Thank you!! We will contact you Soon');
  }
}
?>