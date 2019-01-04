<?php
    session_start();
    if(isset($_SESSION['username'])){
        header('location:Home.php');
        exit();
    }
    $error="";
    if(isset($_POST['signup'])){
        include 'databasemanager.php';
    
        $dbmanager = new DatabaseManager();//Created an object of DatabaseManager
        
        $conn = $dbmanager->dbConnection();//Got a connection to database

        //Got the given username,password,email
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password = sha1($password);
        $email = $_POST['email'];
        $bool = TRUE;
        if($username==""){
            $error="Fill Username</br>";
            $bool = FALSE;
        }

        if($password==""){
            $error = $error."Fill Password</br>";
            $bool = FALSE;
        }
        if($email==""){
            $error = $error."Fill Email</br>";
            $bool = FALSE;
        }
        if($bool){
            $error = $error .  $dbmanager->checkUniqueUsernameEmail($conn,$username,$email);
            if(!empty($error)){
                $bool = FALSE;
            }
        }
        
        if($bool){
            //Writing user information on database;
            $dbmanager->signupInsertData($conn,$username,$password,$email);
            $_SESSION['username']=$username;
            header('Location:Home.php');
            exit();
        }
    }
?>
