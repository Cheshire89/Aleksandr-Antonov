<?php
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
$name = $email = $message = "";
$nameErr = $emailErr = $messageErr = "";

function parametersSet($name,$email,$message){
 	if(empty($name)||empty($email)||empty($message)){
 		return false;
 	}else if (!preg_match("/^[a-zA-Z ]*$/",$name)){
 		return false;
 	}else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
 		return false;
 	}else{
 		return true;
 	}
}


function setName($data){
	if(empty($data)){
		$nameErr = "The Name is Required";
	}else {
		$name = test_input($data);
		if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      	$nameErr = "Only letters and white space allowed"; 
    	}
	}
}
function setEmail($data){
	if(empty($data)){
		$emailErr = "The E-mail is Required";
	}else{
		$email = test_input($data);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      	$emailErr = "Invalid email format"; 
    	}
	}
}
function setMessage($data){
	if(empty($data)){
    	$messageErr = "E-mail could not be send without message";
    } else {
    	$message = test_input($data);
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST")	{
	$name = setName($_POST["name"]);
	$email = setEmail($_POST["email"]);
	$message = setMessage($_POST["message"]);
}
	
	
	$to = "antonovfineart@gmail.com";
    $subject = "From: ".$name." My personal site";
    
	$messages = "Name: ".$name."\r\n  E-mail: ".$email."\r\n Message: ".$message;
    $headers = "From:" . $name;

    if(parametersSet($name,$email,$message)){
    	mail($to, $subject, $messages, $headers);
    	echo '<h5 id="set">Your message had been sent<h5>'; 
    } 
?>
<style type="text/css">
#set{
	font-family:Raleway, sans-serif;
	text-align: center;
	color:green;
	padding-bottom:20px;
}
</style>

<div id="contact-email" class="content"><h2>E-mail</h2>
    <form id="hire" method="POST" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	      <div class="field name-box">
		        <input type="text" id="name" name="name" value="<?php echo $name;?>" placeholder="Greetings!" required />
        		<label for="name">Name</label>
		        <span class="glyphicon-ok"></span>
		        <span class="error"><?php echo $nameErr; ?></span>
	      </div>

	      <div class="field email-box">
		        <input type="text" type="email" id="email" name="email" value="<?php echo $email;?>" placeholder="Name@email.com" required />
		        <label for="email">Email</label>
		        <span class="glyphicon-ok"></span>
		        <span class="error"><?php echo $emailErr; ?></span>
	      </div>

	      <div class="field msg-box">
		        <textarea id="msg" rows="4" name="message" value="<?php echo $message;?>" placeholder="How may I help you ?" required /></textarea>
		        <label for="msg">Msg</label>
		        <span class="glyphicon-ok"></span>
		        <span class="error"><?php echo $messageErr; ?></span>
	      </div>
	      <div id="send">
	      <input id="send_btn" class="button" type="submit" value="Send" />
	      </div>
  </form>
    </div>
