<?php 
    //session_start();

    // if(!isset($_SESSION['flag'])){
    //     header('location: login.php');
    // }

?>

<html lang="en">
<head>
    <title>Home</title>
</head>
<body>
<table width="600" cellspacing ="0" cellpadding="20" border='1' align="center">
        <tr>
            <td height="50"  width="700" colspan="3" align="left">
                <h3>X Company Logo</h3> 
                <!-- <a href="" align="right" >Home |</a> 
                <a href="">Login |</a>
                <a href="">Registration</a> -->
                <div align="right">
                <a href="#">Home |</a> 
                <a href="login.php">Login |</a>
                <a href="registration.php">Registration</a>
                </div>
            </td><br>
            
            
       
        </tr>

        <tr>
            <td width="160" height="260" valign="top" ><b>Account</b><hr>
                <a href="#">Dashboard <br>
                <a href="#">View Profile</a>
                </a>
            </td>
            <td width="160" height="260" valign="top"><b></b> <br>
            <p></p>
            </td>
            <td width="160" height="260" valign="top"><b>Welcome Bob</b> <br>
                

            </td>
        </tr>
        <tr>
            <td height="50" colspan="3" align="center">Copyright @ 2017</td>
        </tr>
    </table>  
</body>
</html>