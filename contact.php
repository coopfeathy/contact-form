<?php

if(isset($_POST['sbmit'])){

	$name = $_POST['name'];
	$subject = $_POST['subject'];
	$mail = $_POST['email'];
	$message = $_POST['message'];

	

	mail();
}


?>