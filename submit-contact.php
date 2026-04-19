<?php

/**
 * POS-35: PHP script to handle form POST request
 */

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input
    $name = strip_tags(trim($_SERVER["POST"]["name"] ?? ""));
    $email = filter_var(trim($_SERVER["POST"]["email"] ?? ""), FILTER_SANITIZE_EMAIL);
    $message = strip_tags(trim($_SERVER["POST"]["message"] ?? ""));

    // POS-36: Implement empty field validation
    if (empty($name) || empty($email) || empty($message)) {
        header("Location: index.php?error=emptyfields#contact");
        exit;
    }

    // POS-37: Implement email format validation
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: index.php?error=invalidemail#contact");
        exit;
    }

    // POS-38: Simulate success response
    // In a real application, you would send an email here using mail() or a library like PHPMailer.

    // POS-40: Implement redirect to thank-you.html after successful submission
    header("Location: thank-you.html");
    exit;
} else {
    // If someone tries to access this script directly without POST
    header("Location: index.php");
    exit;
}
