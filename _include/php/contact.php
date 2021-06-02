<?php

// if (isset($_POST['submit'])) {
// 	$name = $_POST['name'];
// 	$email = $_POST['email'];
// 	$message = $_POST['message'];
		
// 	$mailto = "alexchau.unico@gmail.com";
// 	$headers = "From: ".$email;
// 	$txt = "You have received an email from ".$name.".\n\n".$message;

// 	mail($mailto, $headers, $txt);
// 	header("Location: index.html?mailsend");
// }

if(mail("alexchau.unico@gmail.com","sending server email", "it works!!", "From: alexchau1987@yahoo.com")){
	echo "email sent";

}
?>