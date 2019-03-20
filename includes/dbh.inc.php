<?php
// $host = "threreplicator.database.windows.net";
// $dbname = "Users";
// $username = "hmh75";
// $password=  "$$@@256NH";
// $conn = new mysqli($host, $username,$password,$dbame);
// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:threreplicator.database.windows.net,1433; Database = Users", "hmh75", "{$$@@256NH}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "hmh75@threreplicator", "pwd" => "{$$@@256NH}", "Database" => "Users", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:threreplicator.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);
