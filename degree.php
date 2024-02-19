<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $selectedDegrees = isset($_POST["degrees"]) ? $_POST["degrees"] : [];

    if (count($selectedDegrees) < 2) {  

        echo "Validation failed. Please select at least two degrees.";
    } 
    else {

        echo "Validation successful! Selected degree(s): " . implode(", ", $selectedDegrees);
    }
}
?>
