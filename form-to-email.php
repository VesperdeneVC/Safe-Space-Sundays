<?php
if ($_POST['submit']) {
               
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    
    $mailTo = brettvanstaden21@gmail.com;
    $headers = "From:".email;
    $subject = 'Customer Inquiry';
    $body = "From: $name\n E-Mail: $email\n Message:\n $message";

    mail($mailTo, $email, $message, $body);
    header("Location: index.htlm?mailsend")
}