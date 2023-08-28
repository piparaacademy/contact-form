<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = 'amresh.csit@gmail.com';
    $subject = 'New Contact Form Submission';
    $headers = "From: $email\r\n" .
               "Reply-To: $email\r\n" .
               "X-Mailer: PHP/" . phpversion();

    $mailBody = "Name: $name\n" .
                "Email: $email\n" .
                "Message:\n$message";

    if (mail($to, $subject, $mailBody, $headers)) {
        echo "Thank you for your message. We'll get back to you soon!";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
