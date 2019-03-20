<?php
  include_once 'dbh.inc.php';

  $first = mysqli_real_escape_string($conn,$_POST["first"]);
  $last = mysqli_real_escape_string($conn,$_POST["last"]);
  $email = mysqli_real_escape_string($conn,$_POST["email"]);
  $pwd = mysqli_real_escape_string($conn,$_POST["pwd"]);

  $sql = "INSERT INTO users (FIRSTNAME , LASTNAME , EMAIL, PASSWORD) VALUES ('$first','$last','$email','$pwd');";
  mysqli_query($conn, $sql);

  header("Location: ../lesson16.php");

?>
