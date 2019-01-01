<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('location:index.php');
        exit();
    }else{
        $username = $_SESSION['username'];
        include 'databasemanager.php';
    
        $dbmanager = new DatabaseManager();//Created an object of DatabaseManager
        
        $conn = $dbmanager->dbConnection("localhost","root","");//Got a connection to database

        $row = $dbmanager->userInfoData($conn,$username);

    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo strtoupper($username);?></title>
        <link rel="stylesheet" type="text/css" href="css/editprofile.css">
    </head>
    <body>
        <header>
            <div class="header_menu">
                <div class="mnu_list">
                    <ul>
                        <li> <a href="#"> <?php echo $username;?></a></li>
                    </ul>
                    <img src="../image/avatar/smoke.png" class = "avatar" id="avatar">
                </div>
                
                <div class="menu_list">
                    <ul>
                        <li> <a href="#"> Newsfeed</a></li>
                        <li> <a href="home.php"><u> Profile</u></a></li>
                        <li> <a href="#"> Friends</a></li>
                        <li> <a href="#"> My Strategy</a></li>
                        <li> <a href="LogoutProcess.php"> Logout<a></li>
                    </ul>
                </div>
            </div>
        </header>
        <div class = "info_content">
            <img src="../image/avatar/smoke.png" class="info_content_avatar" onClick="chooseProPicDivShow()">
            <br>
            <br>
            <br>
            <br>

            <form action="home.php" method="POST">
                <h3>username</h3>
                <input type="text" name="username" placeholder="Enter Username">
                <h3>New Password</h3>
                <input type="password" name="password" placeholder="Enter New Password">
                <h3>Repeat New Password</h3>
                <input type="password" name="password" placeholder="Reapeat New Password">
                <input type="submit" name="submit" value="Submit">
            </form>

            
        </div>
        <script>
            function chooseProPicDivShow(){
                document.getElementById("choose_pic_div").style.visibility = 'visible';
            }
            function chooseProPicDivHide(){
                document.getElementById("choose_pic_div").style.visibility = 'hidden';
            }
        </script>
        <div id="choose_pic_div" class = "wow">
            <h1>Choose your profile picture....<h1>
            <br>
            <img src="../image/avatar/smoke.png" alt="smoke" class="avatar_choose " onClick = "chooseProPicDivHide()">
            <img src="../image/avatar/bandit.png" alt="bandit" class="avatar_choose" onClick = "chooseProPicDivHide()">
            <img src="../image/avatar/blitz.png" alt="blitz" class="avatar_choose" onClick = "chooseProPicDivHide()">
            <img src="../image/avatar/castle.png" alt="castle" class="avatar_choose" onClick = "chooseProPicDivHide()">
            <img src="../image/avatar/caviera.png" alt="caviera" class="avatar_choose" onClick = "chooseProPicDivHide()">
            <img src="../image/avatar/doc.png" alt="doc" class="avatar_choose" onClick = "chooseProPicDivHide()">
            <img src="../image/avatar/fuze.png" alt="fuze" class="avatar_choose" onClick = "chooseProPicDivHide()">
            <img src="../image/avatar/glaz.png" alt="glaz" class="avatar_choose" onClick = "chooseProPicDivHide()">
            <img src="../image/avatar/iq.png" alt="iq" class="avatar_choose" onClick = "chooseProPicDivHide()">
            <img src="../image/avatar/jackle.png" alt="jackle" class="avatar_choose" onClick = "chooseProPicDivHide()">
            <img src="../image/avatar/jager.png" alt="jager" class="avatar_choose" onClick = "chooseProPicDivHide()">
            <img src="../image/avatar/montagne.png" alt="montagne" class="avatar_choose" onClick = "chooseProPicDivHide()">
            <img src="../image/avatar/mute.png" alt="mute" class="avatar_choose" onClick = "chooseProPicDivHide()">
            <img src="../image/avatar/recrute.png" alt="recrute" class="avatar_choose" onClick = "chooseProPicDivHide()">
            <img src="../image/avatar/rook.png" alt="rook" class="avatar_choose" onClick = "chooseProPicDivHide()">
            <img src="../image/avatar/sledge.png" alt="sledge" class="avatar_choose" onClick = "chooseProPicDivHide()">
            <img src="../image/avatar/smoke.png" alt="smoke" class="avatar_choose" onClick = "chooseProPicDivHide()">
            <img src="../image/avatar/thatchar.png" alt="thatchar" class="avatar_choose" onClick = "chooseProPicDivHide()">
            <img src="../image/avatar/thermite.png" alt="thermite" class="avatar_choose" onClick = "chooseProPicDivHide()">
            <img src="../image/avatar/valkyrie.png" alt="valkyrie" class="avatar_choose" onClick = "chooseProPicDivHide()">
            <img src="../image/avatar/blackbeard.png" alt="blackbeard" class="avatar_choose" onClick = "chooseProPicDivHide()">
            <img src="../image/avatar/kapkan.png" alt="kapkan" class="avatar_choose" onClick = "chooseProPicDivHide()">
            <img src="../image/avatar/twitch.png" alt="twitch" class="avatar_choose" onClick = "chooseProPicDivHide()">
            <br>
        </div>
    </body>
</html>