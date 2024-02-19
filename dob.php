<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $day = $_POST["day"];
    $month = $_POST["month"];
    $year = $_POST["year"];

    $isValid = true;
    $errorMessage = "";

    if (empty($day) || empty($month) || empty($year)) {
        $isValid = false;
        $errorMessage .= "Date of Birth cannot be empty.<br>";
    }

    if (!filter_var($day, FILTER_VALIDATE_INT, array("options" => array("min_range" => 1, "max_range" => 31))) ||
        !filter_var($month, FILTER_VALIDATE_INT, array("options" => array("min_range" => 1, "max_range" => 12))) ||
        !filter_var($year, FILTER_VALIDATE_INT, array("options" => array("min_range" => 1953, "max_range" => 1998)))) {
        $isValid = false;
        $errorMessage .= "Invalid date of birth format.<br>";
    }

    if ($isValid) {
        echo "Entered Date of Birth: " . $day . "/" . $month . "/" . $year;
    } else {
        echo "Validation failed. Please correct the following errors:<br>" . $errorMessage;
    }
}
?>
