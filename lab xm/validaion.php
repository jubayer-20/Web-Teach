<?php
// Function to validate the name
function validateName($name)
{
    // Split the name into words
    $words = explode(" ", trim($name));

    // Check if the name is empty
    if (empty($name)) {
        return false;
    }

    // Check if the name contains at least two words
    if (count($words) < 2) {
        return false;
    }

    // Check if the name starts with a letter
    if (!preg_match('/^[a-zA-Z]/', $name)) {
        return false;
    }

    // Check if the name contains only allowed characters
    if (!preg_match('/^[a-zA-Z\s.\-]+$/', $name)) {
        return false;
    }

    return true;
}

// Function to validate the email
function validateEmail($email)
{
    // Check if the email is empty
    if (empty($email)) {
        return false;
    }

    // Check if the email is a valid email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }

    return true;
}

// Function to validate the gender
function validateGender($gender)
{
    // Check if at least one gender is selected
    if (empty($gender)) {
        return false;
    }

    return true;
}

// Function to validate the date of birth
function validateDateOfBirth($dob)
{
    // Check if the date of birth is empty
    if (empty($dob)) {
        return false;
    }

    // Split the date of birth into day, month, and year
    $parts = explode("-", $dob);
    $day = (int)$parts[0];
    $month = (int)$parts[1];
    $year = (int)$parts[2];

    // Check if the day is valid
    if ($day < 0 || $day > 31) {
        return false;
    }

    // Check if the month is valid
    if ($month < 1 || $month > 12) {
        return false;
    }

    // Check if the year is valid
    if ($year < 1900 || $year > 2016) {
        return false;
    }

    return true;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $firstName = $_POST["firstName"];
    $lastName = $_POST["lastName"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $dob = $_POST["dob"];

    // Validate the form data
    $isNameValid = validateName($firstName) && validateName($lastName);
    $isEmailValid = validateEmail($email);
    $isGenderValid = validateGender($gender);
    $isDobValid = validateDateOfBirth($dob);

    // If all validations pass, process the form data
    if ($isNameValid && $isEmailValid && $isGenderValid && $isDobValid) {
        // Here, you can add your code to process the form data (e.g., save to a database, send an email, etc.)
        echo "Form submitted successfully!";
    } else {
        echo "Form validation failed. Please check your input.";
    }
}
