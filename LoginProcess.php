<?php
    session_start();
    if(isset($_SESSION['username'])){
        header('location:Home.php');
    }
    $error="";
    if(isset($_POST['login'])){
        include 'databasemanager.php';
    
        $dbmanager = new DatabaseManager();//Created an object of DatabaseManager
        
        $conn = $dbmanager->dbConnection();//Got a connection to database

        //Got the given username,password
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password = sha1($password);
        if($username!="" && $password!=""){
            if($dbmanager->loginCheck($conn,$username,$password)){
                $_SESSION['username']=$username;
                header('location:Home.php');
            }else{
                $error = "Wrong username or password";
            }
        }else{
            $error = "Fill the form properly";
        }
        
    }
?>