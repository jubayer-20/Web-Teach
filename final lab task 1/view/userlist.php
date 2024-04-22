<?php
    require_once('../model/userModel.php');
    if(!isset($_COOKIE['flag'])){
        header('location: login.php');
    }
    $users = getAllEmployee();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Epmloyee list</title>
</head>
<body>
        <h1>Employee List</h1>
        <table border=1>
            <tr>
                <td>ID</td>
                <td>NAME</td>
                <td>PHONE</td>
                <td>USER NAME</td>
                <td>PASSWORD</td>
                <td>action</td>
            </tr>
            <?php for($i=0; $i<count($users); $i++){?>
            <tr>
                <td><?php echo $users[$i]['eID']; ?></td>
                <td><?php echo $users[$i]['Name']; ?></td>
                <td><?php echo $users[$i]['ContactNo']; ?></td>
                <td><?=$users[$i]['Username'] ?></td>
                <td><?=$users[$i]['Password'] ?></td>
                <td>
                    <a href="editEmployee.php?eID=<?=$users[$i]['eID']?>"> Edit </a> |
                    <a href="deleteEmployee.php?eID=<?=$users[$i]['eID']?>"> Delete </a> 
                </td>
            </tr>
            <?php } ?>
        </table>
</body>
</html>