<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header('location:index.php');
        exit();
    }else{
        $username = $_SESSION['username'];
        include 'databasemanager.php';
    
        $dbmanager = new DatabaseManager();//Created an object of DatabaseManager
        
        $conn = $dbmanager->dbConnection();//Got a connection to database

        $row = $dbmanager->userInfoData($conn,$username);

    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo strtoupper($username);?></title>
        <link rel="stylesheet" type="text/css" href="css/home.css">
        <script type="text/javascript" src="js/home.js"></script>
    </head>
    <body>
        <header>
            <div class="header_menu">
                <div class="mnu_list">
                    <ul>
                        <li> <a href="#"> <?php echo $username;?></a></li>
                    </ul>
                    <img src="<?php echo $row['dp']?>" class = "avatar">
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
            <img src="<?php echo $row['dp']?>" class="info_content_avatar" onclick = "divCreator()">
            <br>
            <br>
            <br>
            <br>
            <h3><u>username</u></h3>
            <p>
                <?php echo $username;?>
            </p>
            <h3><u>email</u></h3>
            <p>
                <?php echo $row['email']; ?>
            </p>
            <button onclick="editProfileAction()">Edit Profile</button>
        </div>
        
    </body>
</html>