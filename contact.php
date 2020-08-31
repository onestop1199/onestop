<?php
	if (isset($_POST['sendMailBtn'])) {
		$name = $_POST['name'];
        $number = $_POST['number'];
		$email = $_POST['email'];
		$message = $_POST['message'];

		$to = 'info@theonestop.in'; 
		$subject = 'Message from Contact Demo ';
		$message= "Name: ".$name. "\n" . "Phone: ".$number. "\n". "Wrote the following: ". "\n\n".$message;
        $headers= "From: ".$email;
        
        if(mail($to,$subject,$message,$headers)){
            echo "<h1>Sent Successfully!Thank you"." ".$name.",We will contact you shortly</h1>";
        }
        else{
            echo "Something went wrong";
        }
    }
?>