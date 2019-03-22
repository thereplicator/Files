<?php
if(isset($_POST['signup-submit'])){
  include_once 'dbh.inc.php';
  //NEED TO ESCAPE STRINGS AND HASH
  $first = $_POST["first"];
  $last = $_POST["last"];
  $email = $_POST["email"];
  $pwd = $_POST["pwd"];
  if(empty($first) || empty($last) || empty($email) || empty($email)){
    // header("Location: ../signup.php?error=emptyFields&first=".$first."&last=".$last. "&email=".$email);
    echo "empty";
    exit();
  }else {

  }

  // $sql = "INSERT INTO users (FirstName , LastName , Email, pwd)
  //         VALUES ('$first' , '$last', '$email' , '$pwd');";
  //
  // $getResults= sqlsrv_query($conn, $sql);
  //
  // header("Location: ../signup.php");

}else {
  header("Location: ../signup.php?illegalEntry");
  exit();
}
?>
