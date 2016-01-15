<?php
function sendEmail(){
	if (preg_match('/[^\w]g/', $_POST['name']) == -1) {
	$name = $_POST['name'];
} else {
	echo "The name field may only contain letters";
}

if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
	$email = $_POST['email'];
}else{
	echo "Please enter correct email adress";
}

if(preg_match('/[\d\w,.;:\'()]g/', $_POST['message']) ==-1){
	$message = $_POST['message'];
}else{
	echo "Invalid Message";
}

$to = "antonovfineart@gmail.com";
$subject = "from Aleksandr Antonov.com";
$header = $name." ".$email;

$messages = 'Name: '.$name.' \r\n  E-mail: '.$email.' \r\n Message: '.$message;
	if(mail($to, $subject, $messages, $headers)){
		echo "Email was sent";
	} else {
		echo "Email wan NOT sent";
	}
}

?>