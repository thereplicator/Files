<?php

$host = 'threreplicator.database.windows.net';
$username = 'hmh75';
$password = '$$@@256NH';
$db_name = 'Users';

//Establishes the connection
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $username, $password, $db_name);
if (mysqli_connect_errno($conn)) {
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}

//Create an Insert prepared statement and run it
// $product_name = 'BrandNewProduct';
// $product_color = 'Blue';
// $product_price = 15.5;
$first = mysqli_real_escape_string($conn,$_POST["first"]);
$last = mysqli_real_escape_string($conn,$_POST["last"]);
$email = mysqli_real_escape_string($conn,$_POST["email"]);
$pwd = mysqli_real_escape_string($conn,$_POST["pwd"]);

if ($stmt = mysqli_prepare($conn, "INSERT INTO users (FirstName, LastName, Email, pwd) VALUES (?, ?, ?, ?)")) {
    mysqli_stmt_bind_param($stmt, 'ssss', $first, $last, $email, $pwd);
    mysqli_stmt_execute($stmt);
    printf("Insert: Affected %d rows\n", mysqli_stmt_affected_rows($stmt));
    mysqli_stmt_close($stmt);
}

// Close the connection
mysqli_close($conn);
?>