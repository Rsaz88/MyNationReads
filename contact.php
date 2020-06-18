<?php
$name =$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];


$email_from = 'MyNationReads@gmail.com';

$email_subject ="New Form Submission";

$email_body = "User Name: $name.\n".
                  "User Email: $visitor_email.\n".
                    "User Mesaage: $message.\n";
					
$to ="rsaz1419@gmail.com";
$headers= "From: $email_from\r\n";
$headers .= "Reply-To:$visitor_email\r\n";
mail($to,$email_subject,$email_body,$headers );

header("Location: About.php")

?>
