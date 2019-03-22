<?php
  echo "string";
  include_once 'dbh.inc.php';

  //NEED TO ESCAPE STRINGS AND HASH
  $first = $_POST["first"];
  $last = $_POST["last"];
  $email = $_POST["email"];
  $pwd = $_POST["pwd"];

  $sql = "INSERT INTO users (FirstName , LastName , Email, pwd)
          VALUES ('$first' , '$last', '$email' , '$pwd');";

  $getResults= sqlsrv_query($conn, $sql);

  header("Location: ../signup.php");

?>
