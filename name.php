<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $inputName = $_POST["name"];

    
    $isValid = true;
    $errorMessage = "";

    
    if (empty($inputName)) {
        $isValid = false;
        $errorMessage .= "Name cannot be empty.<br>";
    }

    
    $nameWords = explode(" ", $inputName);
    if (count($nameWords) < 2) {
        $isValid = false;
        $errorMessage .= "Name must contain at least two words.<br>";
    }

   
    $firstChar = substr($inputName, 0, 1);
    if (!ctype_alpha($firstChar)) {
        $isValid = false;
        $errorMessage .= "Name must start with a letter.<br>";
    }

    
    /*if (!preg_match("/^[a-zA-Z.-]+$/", $inputName)) {
        $isValid = false;
        $errorMessage .= "Name can only contain letters, period, and dash.<br>";
    }*/


    if ($isValid) {
        echo "Name: " .htmlspecialchars($inputName);
    } else {
        echo "Validation failed.Please correct the following errors:<br>" . $errorMessage;
    }
}
?>
