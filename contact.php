<?php
if (isset($_POST["email"])) {
    $to_email = 'triki.nizar@gmail.com';
    $subject = $_POST["subject"];
    $headers = array(
	    'From' => 'contact@hac-consulting.net',
	    'Reply-To' => 'triki.nizar@gmail.com',
	    'X-Mailer' => 'PHP/' . phpversion()
	);
    $body = $_POST["message"];
 
    if ( mail($to_email, $subject, $body, $headers)) {
      echo("Email successfully sent to $to_email...");
    } else {
      echo("Email sending failed...");
    }
  }
?>