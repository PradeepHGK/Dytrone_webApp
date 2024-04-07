<?php

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $to = 'jnrabin007@gmail.com';
    $subject = 'Form Submission';
    
    $message = "Name: " . $name . "\n" . "Phone: " . $phone;
    $headers = "From: " .$email;

    if(mail($to, $subject, $message, $headers)){
        echo"<h1>Sent Successfully ! Thank You" . " " . $name . ",We will Contact You Shortly!</h1>";
    }else{
        echo"Went wrong";

    }}
?>
