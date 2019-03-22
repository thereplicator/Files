<?php
$serverName = "threreplicator.database.windows.net";
$connectionOptions = array(
    "Database" => "Users",
    "Uid" => "hmh75",
    "PWD" => "$$@@256NH"
);
//Establishes the connection
$conn = sqlsrv_connect($serverName, $connectionOptions);
