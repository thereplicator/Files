<?php
    $serverName = "threreplicator.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "Users", // update me
        "Uid" => "hmh75", // update me
        "PWD" => "$$@@256NH" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    $tsql= "SELECT * FROM Models";
    $getResults= sqlsrv_query($conn, $tsql);
    echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
        echo $row["KeyWord"] . " " . $row["gcodeFile"];
    }
    sqlsrv_free_stmt($getResults);
?>