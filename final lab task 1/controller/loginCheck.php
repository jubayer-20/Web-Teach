<?php
    require_once('../model/userModel.php');

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if(($username == "Admin" || $username == "admin") && $password == "1234"){   
        setcookie('flag', 'ADMIN', time()+3000, '/');
        header('location: ../view/admindash.php');
        }else{
       
        $status = login($username, $password);

        if($status){
            setcookie('flag', $username, time()+3000, '/');
            header('location: ../view/employeedash.php');
            
        }else{
            echo "invalid User!";
        }  
    }
?>