<?php
$name=$_POST["name"];
$email=$_POST["email"];
$email_from='tboltsto@tboltstores.com.ng';
$email_body="name:$name.\n".
"email:$email. \n".
$to='taiwolink@yahoo.com';
$subject="Contact Form";
$headers="From: $email_from \r\n";
$headers.="Reply-To:$email \r\n";
mail($to,$subject,$email_body,$headers);
header("Location:contact.htm");
echo "Thank you!" . "-" ."<a href='contact.htm' style='text-decoration:none; color:blue;'> Return Home</a>";
?>