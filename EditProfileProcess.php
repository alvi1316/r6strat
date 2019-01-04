<?php
    $error="";
    if(isset($_POST['submit'])){
        $dbmanager = new DatabaseManager();
        $conn = $dbmanager->dbConnection();//Got a connection to database
        $oldUsername = $_POST['oldUsername'];
        $newUsername = $_POST['newUsername'];
        $newPassword = $_POST['newPassword'];
        $repeatNewPassword = $_POST['repeatNewPassword'];
        $dp=$_POST['dp'];
        $bool = TRUE;
        if($newUsername==""){
            $error="Fill Username</br>";
            $bool = FALSE;
        }
        if($newPassword==""){
            $error = $error."Fill Password</br>";
            $bool = FALSE;
        }
        if($newPassword != $repeatNewPassword){
            $error = $error."Two password does not Mathch</br>";
            $bool = FALSE;
        }
        if($bool){
            if(!$dbmanager->usernameIsUnique($conn,$newUsername)){
                $error = $error. "This Username Exists</br>";
            }else{
                $newPassword = sha1($newPassword);
                $dbmanager->updateUserData($conn,$oldUsername,$newUsername,$newPassword,$dp);
                $_SESSION['username']=$newUsername;
                header('location:Home.php');
            }
        }
    }
    
?>
