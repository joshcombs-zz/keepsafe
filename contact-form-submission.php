<?php  

// check for form submission - if it doesn't exist then send back to contact form  
if (!isset($_POST["save"]) || $_POST["save"] != "contact") {  
header("Location: contact.php"); exit;  
}  

// get the posted data  
$name = $_POST["name"];  
$email_address = $_POST["contact_email"];  
$subject = $_POST["subject"];
$message = $_POST["contact_message"];  
  
// write the email content  
$email_content = "Name: $name\n";  
$email_content .= "Email Address: $email_address\n";  
$email_content .= "Message: $message";  

// send the email  
mail ("josh.combs@me.com", $subject, $email_content, "From: ".$email_address."");  

// send the user back to the form  
header("Location: contact.php?success=".urlencode("Thank you for your message.")); 
exit();  

?>