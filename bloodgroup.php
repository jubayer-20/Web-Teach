<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedBloodGroup = isset($_POST["bloodgroup"]) ? $_POST["bloodgroup"] : "";

    if (empty($selectedBloodGroup)) {
        echo "Validation failed.Please select a blood group.";
    } else {
        
        echo " Selected blood group: " . $selectedBloodGroup;
    }
}
?>
