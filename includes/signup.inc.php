<?php
  echo "string";
  include_once 'dbh.inc.php';

  //debug 
  if(isset($_POST["first"])){
    echo "first";
  }

  $first = mysqli_real_escape_string($conn,$_POST["first"]);

  //debug
  if(isset($first)){
    echo "first1";
  }
  $last = mysqli_real_escape_string($conn,$_POST["last"]);
  $email = mysqli_real_escape_string($conn,$_POST["email"]);
  $pwd = mysqli_real_escape_string($conn,$_POST["pwd"]);

  // $sql = "INSERT INTO users (FirstName , LastName , Email, password) VALUES ('$first','$last','$email','$pwd');";
  // $sql = 'INSERT INTO users (FirstName , LastName , Email, pwd)
  //         VALUES ('. $first. ',
  //         '. $last .',
  //         '. $email.',
  //         '. $pwd.');';
  $sql = "INSERT INTO users (FirstName, LastName, Email, pwd)
  VALUES ('Hadi', 'Haidar', 'blabla@test.net', '1234abd@');";
  // $tsql= "SELECT * FROM Models";
  $getResults= sqlsrv_query($conn, $sql);
  // mysqli_query($conn, $sql);

  echo "string 2";
  // header("Location: ../lesson16.php");

?>
