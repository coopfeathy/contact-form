<?php
if(isset($_POST['submit'])){

	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mailFrom = $_POST['email'];
	$message = $_POST['message'];

	$email_from = 'cooperfeatherstone13@gmail.com';
	$mailTo = "cooperfeatherstone13@gmail.com";

	$headers = "From : $email_from \r\n";
	$headers .= "Reply-To: $mailFrom \r\n";

	$txt = "You have received an email from ".$name.".\n\n".$message;
	mail($mailTo, $subject, $txt, $headers);
	header("Location: thanks.html?mailsend");

}
?>