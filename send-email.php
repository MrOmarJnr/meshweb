<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Recipient's email address
    $to = "kwekuappiahjnr8@gmail.com"; // Replace with your Gmail or preferred email address

    // Subject of the email
    $subject = "New Contact Request from: " . $name;

    // Body of the email
    $body = "You have a new message from your website contact form:\n\n";
    $body .= "Name: $name\n";
    $body .= "Phone: $phone\n";
    $body .= "Email: $email\n";
    $body .= "Message: \n$message";

    // Set headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Thank you for contacting us, $name. We will get back to you soon!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Sorry, something went wrong. Please try again.'); window.location.href='index.html';</script>";
    }
}
?>
