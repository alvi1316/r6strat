<?php
    include 'LoginProcess.php';
?>
<html>
    <head>
        <title> Login Form </title>
        <link rel="stylesheet" type="text/css" href="css/index.css">
    </head>
    <body>
        <div class="loginbox">
            <img src="../image/avatar/smoke.png" class="avatar">
            <h1>Login</h1>
            <form action = 'index.php' method = 'POST'>
                <p>Username</p>
                <input type="text" name="username" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter Password">
                <input type="submit" name="login" value="Login">
                <?php
                    echo "<p>$error</p>";
                ?>
                <a href="#">Forgot password?</a><br>
                <a href="Sign Up.php">Create account</a>
            </form>
        </div>
    </body>    
</html>