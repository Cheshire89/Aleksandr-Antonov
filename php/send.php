<?php
	
    $name = ($_POST['name']);
    $email =($_POST['email']);
    $message =($_POST['message']);
	
	
	$to = "antonovfineart@gmail.com";
    $subject = "From: ".$name." My personal site";
    
	$messages = "Name: ".$name." \r\n  E-mail: ".$email." \r\n Message: ".$message;
    $headers = "From:" . $email;
    mail($to, $subject, $messages, $headers);
	
	echo "Your message had been sent, To return, please, <a href='/'> click here </a>."; 
?>