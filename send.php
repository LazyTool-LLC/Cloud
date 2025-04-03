<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $to = "alwddw@icloud.com";
    $subject = "New message from user";
    $name = trim($_POST["name"]);
    $message = trim($_POST["message"]);

    if (empty($name) || empty($message)) {
        echo "Error: All fields must be filled!";
        exit;
    }

    $body = "Name: $name\n\nMessage:\n$message";
    $headers = "From: no-reply@yourdomain.com\r\n" .
               "Reply-To: no-reply@yourdomain.com\r\n" .
               "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Data sent successfully!";
    } else {
        echo "Error sending email!";
    }
} else {
    echo "Error: Invalid request method!";
}
?>
