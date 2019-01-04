<?php

  //This class handles the database
  class DatabaseManager{

    //This function returns the connection
    function dbConnection(){
      $conn = new mysqli("sql203.epizy.com","epiz_23119201","r6strat","epiz_23119201_data");
      if($conn->connect_error){
        die("Connection Error".$conn->connect_error);
      }else{ 
        return $conn;
      }
    }

    //This function inserts the data of signup
    function signupInsertData($conn,$username,$password,$email){
      $qry = "INSERT INTO epiz_23119201_data.user (username,password,email,dp) VALUES ('$username','$password','$email','../image/avatar/smoke.png')";
      if($conn->query($qry)===TRUE){
        return TRUE;
      }else{
        echo $conn->error;
        return FALSE;
      }
    }

    //This function checks unique username
    function usernameIsUnique($conn,$username){
      $qry = "SELECT * FROM epiz_23119201_data.user WHERE username = '$username'";
      $result=$conn->query($qry);
      $bool = TRUE;
      if($result->num_rows>0){
        $bool = FALSE;
      }
      return $bool;
    }

    //This function checks unique email
    function emailIsUnique($conn,$email){
      $qry = "SELECT * FROM epiz_23119201_data.user WHERE email = '$email'";
      $result=$conn->query($qry);
      $bool = TRUE;
      if($result->num_rows>0){
        $bool = FALSE;
      }
      return $bool;
    }

    //This function checks unique username and email
    function checkUniqueUsernameEmail($conn,$username,$email){
      $error = "";
      if(!$this->usernameIsUnique($conn,$username)){
        $error = "Username Exists</br>";
      }
      if(!$this->emailIsUnique($conn,$email)){
        $error = $error."Email Exists<br>";
      }
      return $error;
    }
    
    //This function checks password for login
    function loginCheck($conn,$username,$password){
      $qry = "SELECT password FROM epiz_23119201_data.user WHERE username = '$username'";
      $bool = FALSE;
      $result=$conn->query($qry);
      $row=$result->fetch_assoc();
      if($row['password']==$password){
        $bool = TRUE;
      }
      return $bool;
    }

    //This function returns all information of the user
    function userInfoData($conn,$username){
      $qry = "SELECT * FROM epiz_23119201_data.user WHERE username = '$username'";
      $result=$conn->query($qry);
      $row=$result->fetch_assoc();
      return $row;
    }
    
    //This function updates username and password 
    function updateUserData($conn,$oldUsername,$username,$password,$dp){
      $qry = "UPDATE epiz_23119201_data.user SET username = '$username', password = '$password', dp = '$dp' WHERE username = '$oldUsername'";
      if($conn->query($qry)===TRUE){
        return TRUE;
      }else{
        echo $conn->error;
        return FALSE;
      }
    }


  }
 ?>
