<?php
//File to handle the new Login Page for the CCAL Login Page
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Login Page</title>
    </head>
    <body>
        <form action = "http://localhost/CCALWatchParts/login_Handle.php" method ="post">
            <p>CCAL Watch Parts</p>
            <div id="userID">
                <label for="user">User Name:</label><br>
                <input type ="text" id="userName" name="userName" required/>
                <br>
            </div>
            <div id="pWord">
                <label for="user">Password:</label><br>
                <input type ="password" id="password" name="userPword" required/>
                <br>
            </div>
            <input type="submit" onclick="return validate();" value="Login" class="button1">
        </form>
        <br><br>
        <a href=http://localhost/CCALWatchParts/Public/new_User.php>New User Sign-Up</a>
    </body>
</html>
