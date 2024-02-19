<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputEmail = $_POST["email"];

    $isValid = true;
    $errorMessage = "";

    if (empty($inputEmail)) {
        $isValid = false;
        $errorMessage .= "Email cannot be empty.<br>";
    }

    if (!filter_var($inputEmail, FILTER_VALIDATE_EMAIL)) {
        $isValid = false;
        $errorMessage .= "Invalid email address format.<br>";
    }

    if ($isValid) {
        echo "Entered email: " . htmlspecialchars($inputEmail);
    } else {
        echo "Validation failed.<br>" . $errorMessage;
    }
}
?>
