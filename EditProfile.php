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
        <script type="text/javascript" src="js/editprofie.js"></script>
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
            <img src="../image/avatar/smoke.png" id="avatar1" class="info_content_avatar" onClick="chooseProPicDivShow()">
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
        
        <div id="choose_pic_div" class = "wow">
            <h1>Choose your profile picture....<h1>
            <br>
            <img src="../image/avatar/smoke.png" id ="smoke" alt="smoke" class="avatar_choose " onClick = "changeProfilePicture('smoke')">
            <img src="../image/avatar/bandit.png" id ="bandit" alt="bandit" class="avatar_choose" onClick = "changeProfilePicture('bandit')">
            <img src="../image/avatar/blitz.png" id="blitz" alt="blitz" class="avatar_choose" onClick = "changeProfilePicture('blitz')">
            <img src="../image/avatar/castle.png" id="castle" alt="castle" class="avatar_choose" onClick = "changeProfilePicture('castle')">
            <img src="../image/avatar/caviera.png" id="caviera" alt="caviera" class="avatar_choose" onClick = "changeProfilePicture('caviera')">
            <img src="../image/avatar/doc.png" id= "doc" alt="doc" class="avatar_choose" onClick = "changeProfilePicture('doc')">
            <img src="../image/avatar/fuze.png" id="fuze" alt="fuze" class="avatar_choose" onClick = "changeProfilePicture('fuze')">
            <img src="../image/avatar/glaz.png" id="glaz" alt="glaz" class="avatar_choose" onClick = "changeProfilePicture('glaz')">
            <img src="../image/avatar/iq.png" id="iq" alt="iq" class="avatar_choose" onClick = "changeProfilePicture('iq')">
            <img src="../image/avatar/jackle.png" id="jackle" alt="jackle" class="avatar_choose" onClick = "changeProfilePicture('jackle')">
            <img src="../image/avatar/jager.png" id="jager" alt="jager" class="avatar_choose" onClick = "changeProfilePicture('jager')">
            <img src="../image/avatar/montagne.png" id="montagne" alt="montagne" class="avatar_choose" onClick = "changeProfilePicture('montagne')">
            <img src="../image/avatar/mute.png" id="mute" alt="mute" class="avatar_choose" onClick = "changeProfilePicture('mute')">
            <img src="../image/avatar/recrute.png" id="recrute" alt="recrute" class="avatar_choose" onClick = "changeProfilePicture('recrute')">
            <img src="../image/avatar/rook.png" id="rook" alt="rook" class="avatar_choose" onClick = "changeProfilePicture('rook')">
            <img src="../image/avatar/sledge.png" id="sledge" alt="sledge" class="avatar_choose" onClick = "changeProfilePicture('sledge')">
            <img src="../image/avatar/thatchar.png" id="thatchar" alt="thatchar" class="avatar_choose" onClick = "changeProfilePicture('thatchar')">
            <img src="../image/avatar/thermite.png" id="thermite" alt="thermite" class="avatar_choose" onClick = "changeProfilePicture('thermite')">
            <img src="../image/avatar/valkyrie.png" id="valkyrie" alt="valkyrie" class="avatar_choose" onClick = "changeProfilePicture('valkyrie')">
            <img src="../image/avatar/blackbeard.png" id="blackbeard" alt="blackbeard" class="avatar_choose" onClick = "changeProfilePicture('blackbeard')">
            <img src="../image/avatar/kapkan.png" id="kapkan" alt="kapkan" class="avatar_choose" onClick = "changeProfilePicture('kapkan')">
            <img src="../image/avatar/ash.png" id="ash" alt="ash" class="avatar_choose" onClick = "changeProfilePicture('ash')">
            <img src="../image/avatar/alibi.png" id="alibi" alt="alibi" class="avatar_choose" onClick = "changeProfilePicture('alibi')">
            <img src="../image/avatar/buck.png" id="buck" alt="buck" class="avatar_choose" onClick = "changeProfilePicture('buck')">
            <img src="../image/avatar/capitao.png" id="capitao" alt="capitao" class="avatar_choose" onClick = "changeProfilePicture('capitao')">
            <img src="../image/avatar/clash.png" id="clash" alt="clash" class="avatar_choose" onClick = "changeProfilePicture('clash')">
            <img src="../image/avatar/dokkaebi.png" id="dokkaebi" alt="dokkaebi" class="avatar_choose" onClick = "changeProfilePicture('dokkaebi')">
            <img src="../image/avatar/echo.png" id="echo" alt="echo" class="avatar_choose" onClick = "changeProfilePicture('echo')">
            <img src="../image/avatar/ela.png" id="ela" alt="ela" class="avatar_choose" onClick = "changeProfilePicture('ela')">
            <img src="../image/avatar/finka.png" id="finka" alt="finka" class="avatar_choose" onClick = "changeProfilePicture('finka')">
            <img src="../image/avatar/frost.png" id="frost" alt="frost" class="avatar_choose" onClick = "changeProfilePicture('frost')">
            <img src="../image/avatar/kaid.png" id="kaid" alt="kaid" class="avatar_choose" onClick = "changeProfilePicture('kaid')">
            <img src="../image/avatar/lion.png" id="lion" alt="lion" class="avatar_choose" onClick = "changeProfilePicture('lion')">
            <img src="../image/avatar/lision.png" id="lision" alt="lision" class="avatar_choose" onClick = "changeProfilePicture('lision')">
            <img src="../image/avatar/maestro.png" id="maestro" alt="maestro" class="avatar_choose" onClick = "changeProfilePicture('maestro')">
            <img src="../image/avatar/mavrick.png" id="mavrick" alt="mavrick" class="avatar_choose" onClick = "changeProfilePicture('mavrick')">
            <img src="../image/avatar/mira.png" id="mira" alt="mira" class="avatar_choose" onClick = "changeProfilePicture('mira')">
            <img src="../image/avatar/nomad.png" id="nomad" alt="nomad" class="avatar_choose" onClick = "changeProfilePicture('nomad')">
            <img src="../image/avatar/pulse.png" id="pulse" alt="pulse" class="avatar_choose" onClick = "changeProfilePicture('pulse')">
            <img src="../image/avatar/tachanka.png" id="tachanka" alt="tachanka" class="avatar_choose" onClick = "changeProfilePicture('tachanka')">
            <img src="../image/avatar/vigil.png" id="vigil" alt="vigil" class="avatar_choose" onClick = "changeProfilePicture('vigil')">
            <img src="../image/avatar/ying.png" id="ying" alt="ying" class="avatar_choose" onClick = "changeProfilePicture('ying')">
            <img src="../image/avatar/zofia.png" id="zofia" alt="zofia" class="avatar_choose" onClick = "changeProfilePicture('zofia')">
            <img src="../image/avatar/hibana.png" id="hibana" alt="hibana" class="avatar_choose" onClick = "changeProfilePicture('hibana')">
            <br>
            <button onClick="chooseProPicDivHide()">Cancle</button>
            <br>
            <br>
        </div>
    </body>
</html>