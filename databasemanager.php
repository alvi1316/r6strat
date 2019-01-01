<?php

  //This class handles the database
  class DatabaseManager{

    //This function returns the connection
    function dbConnection($serverName,$userName,$serverPassword){
      $conn = new mysqli($serverName,$userName,$serverPassword);
      if($conn->connect_error){
        die("Connection Error".$conn->connect_error);
      }else{ 
        return $conn;
      }
    }

    //This function inserts the data of signup
    function signupInsertData($conn,$username,$password,$email){
      $qry = "INSERT INTO data.user (username,password,email) VALUES ('$username','$password','$email')";
      if($conn->query($qry)===TRUE){
        return TRUE;
      }else{
        echo $conn->error;
        return FALSE;
      }
    }


    //This function checks unique username and email
    function checkUniqueUsernameEmail($conn,$username,$email){
      $qry = "SELECT username FROM data.user WHERE username = '$username'";
      $error = "";
      $result=$conn->query($qry);
      if($result->num_rows>0){
        $error = "Username Exists</br>";
      }
      $result=$conn->query($qry);
      $qry = "SELECT * FROM data.user where email = $email";
      if($result->num_rows>0){
        $error = $error."Email Exists<br>";
      }
      return $error;
    }
    
    //This function checks password for login
    function loginCheck($conn,$username,$password){
      $qry = "SELECT password FROM data.user WHERE username = '$username'";
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
      $qry = "SELECT * FROM data.user WHERE username = '$username'";
      $result=$conn->query($qry);
      $row=$result->fetch_assoc();
      return $row;
    }
    
  }
 ?>
