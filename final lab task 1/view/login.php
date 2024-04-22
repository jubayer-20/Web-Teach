<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Page</title>
</head>
<body>
    <table width="25%" border="0" align="center">
        <tr>
            <td>
                <form method="post" action="../controller/loginCheck.php" enctype="">
                <fieldset>
                    <legend><b>LOGIN</b></legend>
                    User Name:<input type="text" name="username" value="" required/> <br><br>
                    Password :<input type="password" name="password" value="" required/>
                    <hr>
                    <input type="submit" name="signin" value="Sign In" /> <br><br>
                    <p>Or, back to <a href="home.php">Home</a></p>
                </fieldset>
            </td>
        </tr>
    </table>
    </form>
</body>
</html>
