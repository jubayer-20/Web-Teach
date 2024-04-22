<?php
    if(!isset($_COOKIE['flag'])){
        header('location: login.php');
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Dashboard</title>
</head>
<body>
    <a href="registration.php">Employee Registration</a> <br> <br>
    <a href="userlist.php">Employee list</a> <br> <br>
    <a href="searchEmployee.php">Search Employee</a> <br> <br><br><br>
    <a href="../controller/logout.php">Logout</a>
    
</body>
</html>
