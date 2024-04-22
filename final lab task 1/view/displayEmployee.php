<?php
    require_once('../model/userModel.php');
    if(!isset($_COOKIE['flag'])){
        header('location: login.php');
    }

    $name= $_REQUEST['name'];
    $uname = $_REQUEST['uname'];
    $eID = $_REQUEST['id'];

   
        $arg = ['name'=> $name, 'uname'=>$uname, 'id'=> $eID];
        $status = searchEmployee($arg);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employee list</title>
</head>
<body>
        <h1>Employee List</h1>
        <table border=1>
            <tr>
                <td>Employee NAME</td>
                <td>Contact No</td>
                <td>Username</td>
                <td>Password</td>
                <td>ACTION</td>
            </tr>
            <?php for($i=0; $i<count($status); $i++){?>
            <tr>
                <td><?php echo $status[$i]['Name']; ?></td>
                <td><?=$status[$i]['ContactNo'] ?></td>
                <td><?php echo $status[$i]['Username']; ?></td>
                <td><?=$status[$i]['Password'] ?></td>
                <td>
                    <a href="updatEmplyee.php?id=<?=$attendees[$i]['eID']?>"> Edit </a> |
                    <a href="deleteEmployee.php?id=<?=$attendees[$i]['eID']?>"> Delete </a> 
                </td>
            </tr>
            <?php } ?>
        </table>
</body>
</html>