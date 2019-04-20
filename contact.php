<?php

#Receive user input
$email_address = $_POST['email'];
$feedback = $_POST['message'];



#Filter user input
function filter_email_header($form_field) {
return preg_replace('/[\0\n\r\|\!\/\<\>\^\$\%\*\&]+/','',$form_field);
}

$email_address = filter_email_header($email_address);

// Headers
$headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $email_address . "\r\n";

#Send email
$sent = mail('triki.nizar@gmail.com', 'Nouveau message du site web', $feedback, $headers);

#Thank user or notify them of a problem
if ($sent) {

?><html>
<head>
<title>Merci</title>
</head>
<body>
<h1>Merci</h1>
<p>Merci pour votre message.</p>
</body>
</html>
<?php

} else {

?><html>
<head>
<title>Erreur</title>
</head>
<body>
<h1>Erreur</h1>
<p>Nous n'avons pas pu envoyer votre email.</p>
</body>
</html>
<?php
}
?>