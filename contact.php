<?php 
	if($_SERVER['REQUEST_METHOD'] == "POST"){
		$name = $_POST['name'] ?? "";
		$email = $_POST['email'] ?? "";
		$message = $_POST['message'] ?? "";

		$to = "kunzmich@umich.edu";
		$subject = "You've received a message from ".$name ." | Portfolio" ;
		$replyTo = 	"From: No-reply"."\r\n".
					"Reply-To:".$email."\r\n";
		if(mail($to, $subject, $message,$replyTo)){
			echo "Message sent successfully";
			sleep(2);
			//header("Location: index.html");
		}else{
			echo "Failed to send message!";
			sleep(2);
			header("Location: index.html");
		}
	}
?>