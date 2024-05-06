<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $message = $_POST["message1"];

    $to = "gozoanime.world@gmail.com";
    $subject = "New Form Submission";
    $body = "Name: $name\nPhone: $phone\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $body)) {
        echo "Message sent successfully!";
    } else {
        echo "Sorry, something went wrong. Please try again later.";
    }
} else {
    echo "Method not allowed.";
}
?>
