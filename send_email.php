<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $budget = $_POST['budget'];

    // Email information
    $to = "gozoanime.world@gmail.com";
    $subject = "Contact Form Submission";
    $message = "Name: $name\nPhone: $phone\nEmail: $email\nBudget: $budget";

    // Send email
    if (mail($to, $subject, $message)) {
        echo "Thank you for your submission. We will contact you shortly.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    echo "Access denied.";
}
?>
