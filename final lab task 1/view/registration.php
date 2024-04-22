<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reg Page</title>
</head>
<body>
    <table width="30%" border="0" align="center">
        <tr>
            <td>
                <form method="post" action="../controller/regCheck.php" enctype="">
                    <fieldset>
                        <legend><b>SIGNUP</b></legend>
                        Employee Name:               <input type="text" name="name" value="" required><br><br>
                        Contact No:              <input type="number" name="phone" min="0" value="" required><br><br>
                        Username:          <input type="text" name="username" value="" required><br><br>
                        Password:           <input type="password" name="password" value="" required><br><br>
                        Confirm Password:   <input type="password" name="confirm_password" value="" required><br><br>
                        <input type="reset" name="reset" value="Reset" />
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="submit" name="submit" value="Submit" /><br>
                    </fieldset>
                </form>
            </td>
        </tr>
    </table>
</body>
</html>
