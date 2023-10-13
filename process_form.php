<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = $_POST["fullName"];
    $phoneNumber = $_POST["phoneNumber"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Save data to a database (replace with your database connection code)
    $conn = new mysqli("localhost", "root", "", "Rutson");
    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO contact_form (full_name, phone_number, email, message) VALUES ('$fullName', '$phoneNumber', '$email', '$message')";
    if ($conn->query($sql) === TRUE) {
        // Data saved to the database
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();

    // Send an email
    $to = "peterkimutai004@gmail.com"; // Replace with your email address
    $subject = "New Contact_Form Submission";
    $headers = "From: $email";
    $messageBody = "Full Name: $fullName\nPhone Number: $phoneNumber\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $messageBody, $headers)) {
        // Email sent successfully
    } else {
        echo "Email could not be sent. Please try again later.";
    }

    // Redirect the user to a thank you page
    header("Location: thank_you.html");
    exit;
}
?>
