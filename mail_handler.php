<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $to = 'jnrabin007@gmail.com';
    $subject = 'Form Submission';
    
    $message = "Name: " . $name . "\n" . "Phone: " . $phone;
    $headers = "From: " . $email;

    
    if (mail($to, $subject, $message, $headers)) {
        
        $response = array('success' => true, 'name' => $name);
        echo json_encode($response);
    } else {
        
        $response = array('success' => false);
        echo json_encode($response);
    }
} else {
    
    $response = array('success' => false, 'error' => 'Form not submitted');
    echo json_encode($response);
}

?>