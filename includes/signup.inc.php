<?php
  echo "string";
  include_once 'dbh.inc.php';

  // //debug 
  // if(isset($_POST["first"])){
  //   echo "first";
  // }

  // $first = mysqli_real_escape_string($conn,$_POST["first"]);
  // echo $first;
  // //debug
  // if(isset($first)){
  //   echo "first1";
  // }
  // $last = mysqli_real_escape_string($conn,$_POST["last"]);
  // $email = mysqli_real_escape_string($conn,$_POST["email"]);
  // $pwd = mysqli_real_escape_string($conn,$_POST["pwd"]);

  //NEED TO ESCAPE STRINGS AND HASH
  $first = $_POST["first"];
  echo $first;
  $last = $_POST["last"];
  echo $last;
  $email = $_POST["email"];
  echo $email;
  $pwd = $_POST["pwd"];
  echo $pwd;

  $sql = 'INSERT INTO users (FirstName , LastName , Email, pwd)
          VALUES ('. $first. ',
          ' . $last . ',
          ' . $email. ',
          ' . $pwd. ');
          ';

  // $sql = "INSERT INTO users (FirstName, LastName, Email, pwd)
  // VALUES ('Hadi', 'Haidar', 'blabla@test.net', '1234abd@');";
  $getResults= sqlsrv_query($conn, $sql);

  // mysqli_query($conn, $sql);

  // header("Location: ../lesson16.php");

?>
