<?php
    include 'SignupProcess.php';
?>
<html>
    <head>
        <title> Login Form </title>
    </head>
    <body>
        <link rel="stylesheet" type="text/css" href="css/signup.css">
        <div class="loginbox">
            <img src="../image/avatar/smoke.png" class="avatar">
            <h1>Sign Up</h1>
            <form action = "Sign Up.php" method = "POST">
                <p>Username</p>
                <input type="text" name="username" placeholder="Enter Username">
                <p>Password</p>
                <input type="password" name="password" placeholder="Enter Password">
                <p>Email</p>
                <input type="text" name="email" placeholder="Enter Email Id">
                <input type="submit" name="signup" value="Sign Up!">
                <?php
                    if($error!=''){
                        echo "<p>$error</p>";
                    }
                ?>
                <a href="index.php">Already have an account? Login!</a>
            </form>
        </div>
    </body>    
</html>