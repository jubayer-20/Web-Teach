<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedGenders = isset($_POST["gender"]) ? $_POST["gender"] : [];

    if (empty($selectedGenders)) {
        echo "Validation failed. Please select at least one gender.";
    } else {
    
        echo "Validation successful! Selected gender(s): ".implode(", ",$selectedGenders);
    }
}
?>
