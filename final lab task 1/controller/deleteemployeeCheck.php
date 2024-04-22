<?php
    require_once('../model/userModel.php');
    if(!isset($_COOKIE['flag'])){
        header('location: login.php');
    }

    $ans = $_REQUEST['radio'];
    $id =  $_REQUEST['empID'];

    if($ans == "Yes")
    {
        $status= deleteEmployee($id);

        if($status){
            echo "Delete successful.";
        }else{
            echo "Delete Failed! Please try again.";
        } 
    }else{
        header('location: ../view/userlist.php');
    }

?>