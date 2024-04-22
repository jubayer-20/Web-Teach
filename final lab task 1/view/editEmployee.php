<?php 
require_once('../model/userModel.php');
if(!isset($_COOKIE['flag'])){
    header('location: login.php');
}
$id =  $_REQUEST['eID'];

$status= getEmployeedetails($id);
$name=  $status[0]['Name'];
$phone=  $status[0]['ContactNo'];
$uname=  $status[0]['Username'];
$pass=  $status[0]['Password'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Update Employee</title>
</head>
<body>
    <fieldset>
    <legend><b>Update Employee</b></legend>
    <form method="post" action="../controller/editemployeeCheck.php" enctype="">
        Employee ID:<input type="text" name="eID" value ="<?php echo $id; ?>" /><br><br><br>
        Employee Name:<input type="text" name="name" value="<?php echo $name; ?>" required><br><br>
        Contact No:<input type="number" name="phone" min="0" value="<?php echo $phone; ?>" required><br><br>
        Username:<input type="text" name="username" value="<?php echo $uname; ?>" required><br><br>
        Password:<input type="text" name="password" value="<?php echo $pass; ?>" required><br><br>
        Confirm Password:<input type="text" name="confirm_password" value="" required><br><br>
        <input type="submit" name="submit" value="Submit" />
    </fieldset>
</body>
</html>