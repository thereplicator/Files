<?php
if(isset($_POST['signup-submit'])){
  include_once 'dbh.inc.php';
  //NEED TO ESCAPE STRINGS AND HASH
  $first = $_POST["first"];
  $last = $_POST["last"];
  $email = $_POST["email"];
  $pwd = $_POST["pwd"];
  if(empty($first) || empty($last) || empty($email) || empty($pwd)){
    header("Location: ../signup.php?error=emptyFields");
    exit();
  }else {
    if((!preg_match("/^[a-zA-Z]*$/", $first)) || !preg_match("/^[a-zA-Z]*$/", $last)){
      header("Location: ../Alexa.php?error=ivalidFirstameOrLastame&first=");
      exit();
    }else {
      if(strlen($pwd) < 8){
        header("Location: ../ourModels.php?PasswordMusteAtLeast8Characters");
        exit();
      }else {
        if(!preg_match("/^[a-zA-Z0-9!@#$%^&]*$/", $pwd)){
          header("Location: ../login.php?IvalidPassword");
          exit();
        }else {
          $sql = "INSERT INTO users (FirstName , LastName , Email, pwd)
                  VALUES ('$first' , '$last', '$email' , '$pwd');";
          $getResults= sqlsrv_query($conn, $sql);
          header("Location: ../signup.php?signupsuccess");
          exit();
        }
      }
    }
  }
}else {
  header("Location: ../signup.php?illegalEntry");
  exit();
}
?>
