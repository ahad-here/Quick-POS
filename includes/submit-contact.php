<?php

function validateContactForm($name, $email, $message)
{
    if (empty($name) || empty($email) || empty($message)) {
        return "All fields are required";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Invalid email";
    }

    return "Success";
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    $result = validateContactForm(
        $name,
        $email,
        $message
    );

    if ($result === "Success") {

        header("Location: thank-you.php");
        exit();

    } else {

        echo $result;
    }
}