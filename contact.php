<?php
$name = $_POST['name'];
$mail = $_POST['email'];
$message = $_POST['message'];

$mail_to = 'cooperfeatherstone13@gmail.com';
$subject = 'Message from a site visitor '.$name;

$body_message = 'From: '.$name."\n";
$body_message .= 'E-mail: '.$email."\n";
$body_message .= 'Message: '.$_message;

$headers = 'From: '.$email."\r\n";
$headers .= 'Reply-To: '.$email."\r\n";

$mail_status = mail($mail_to, $subject, $body_message, $headers);

if ($mail_status) { ?>
	<script language="javascript" type="text/javascript">
		alert('Thank you for the message. I will contact you shortly.');
		window.location = 'contact.html';
	</script>
<?php
}
else { ?>
	<script language="javascript" type="text/javascript">
		alert('Message failed. Please, send an email to cooperfeatherstone13@gmail.com');
		window.location = 'contact.html';
	</script>
<?php
}
?>