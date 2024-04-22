<?php
    require_once('../model/userModel.php');
    if(!isset($_COOKIE['flag'])){
        header('location: login.php');
    }

    $id =  $_REQUEST['eID'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Delete Employee</title>
</head>
<body>
    <fieldset>
    <legend><b>Delete Employee</b></legend>
    <form method="post" action="../controller/deleteemployeeCheck.php" enctype="">
        Employee ID:<input type="text" name="eID" value ="<?php echo $id; ?>"/><br><br><br>
        Are you sure to delete this Employee <br>
            <input type="radio" name="radio" value="Yes" />Yes
            <input type="radio" name="radio" value="No" />No <br><br>
        <input type="submit" name="submit" value="Submit" />
    </fieldset>
    </form>
</body>
</html>
