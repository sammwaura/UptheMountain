<?php
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['msg'];

$email_from = 'mwaurawamichwe@gmail.com';

$email_subject = "New Submission";

$email_body = "User Name: $name.\n".
                "User Email: $email.\n".
                "User Message: $msg.\n";


$to = "upthemountain2412@gmail.com";

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: index.html");

?>