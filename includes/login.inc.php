<?php

if(isset($_POST['login-submit'])){
  include_once 'dbh.inc.php';
  $email = $_POST['email'];
  $password = $_POST['pwd'];
  if(empty($email)  || empty($password)){
    header("Location: ../login.php?error=emptyFields");
    exit();
  }else {
    $sql = "SELECT * FROM users WHERE Email='$email'";
    $result = sqlsrv_query($conn , $sql);
    $resultCheck = sqlsrv_num_rows($result);
    if ($resultCheck < 1){
      header("Location: ../login.php?login=NoSuchUser");
      exit();
    }else{
      header("Location: ../login.php?login=userExists");
      exit();
    }
  }
}else {
  header("Location: ../login.php?illegalEntry");
  exit();
}
