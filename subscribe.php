<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Here, you can save the email to a database or send it to an email list service
        // Example: Save to a text file (you should use a database for production)
        file_put_contents("subscribers.txt", $email.PHP_EOL, FILE_APPEND);
        echo "Thank you for subscribing!";
    } else {
        echo "Invalid email address.";
    }
} else {
    echo "Invalid request method.";
}
?>
