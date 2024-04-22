<?php
    require_once('../model/userModel.php');
    require_once('validations.php');
    if(!isset($_COOKIE['flag'])){
        header('location: login.php');
    }

    $id = $_REQUEST['empID'];
    $name= $_REQUEST['name'];
    $phone= $_REQUEST['phone'];
    $uname= $_REQUEST['username'];
    $password = $_REQUEST['password'];
    $conpass = $_REQUEST['confirm_password'];
    
    if(!ctype_alpha(substr($name, 0, 1))) {
        echo "First character must be a letter";
    }elseif(str_word_count($name) < 2){
        echo "Name must contains at least two words";
    }elseif($password != $conpass){
        echo "Confirm password not matched!";
    }elseif(strlen($phone) != 11) {
        echo "Invalid phone number!";
    }elseif(strlen($password) < 8) {
        echo "Password must contains at least 8 characters";
    }elseif(!hasDigit($password)) {
        echo "Password must contains at least one digit";
    }elseif(!hasSpecialChar($password)) {
        echo "Password must contains at least one special character";
    }else {

        $status= updateEmployee($id, $name, $phone, $uname, $password);
        if($status){
            echo "update successful.";
        }else{
            echo "Update Failed! Please try again.";
        } 
    }

    
?>