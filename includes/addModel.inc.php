<?php
if(isset($_POST['addModel-submit'])){
  include_once 'dbh.inc.php';

  $name = $_POST["name"];


  if(empty($name)){
    header("Location: ../addModel.php?error=emptyFields");
    exit();
  }else {
    if(!preg_match("/^[a-zA-Z]*$/", $name)){ 
      header("Location: ../addModel.php?error=invalidName");
      exit();
    }else {
          $checkUserTakenSQl = "SELECT * FROM users WHERE Name='$name'";
          $userTakenResult = sqlsrv_query($conn, $checkUserTakenSQl);
          $resultCheck = sqlsrv_num_rows($userTakenResult);
          if($resultCheck > 0){
            header("Location: ../addModel.php?ItemNameAlreadyInOurDatabase");
            exit();
          }
        }
      }

} else {
  header("Location: ../addModel.php?illegalEntry");
  exit();
}
?>

<?php
    include_once 'includes/dbh.inc.php';
    $sql = "SELECT * FROM Models";
    $getResults= sqlsrv_query($conn, $sql);
    // echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE){
      echo (sqlsrv_errors());
    }

?>
<?php
while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)){
  // Debug
  $Name = $row["KeyWord"];
  $GCode = $row["gcodeFile"];
  $NumberOfPrints = $row["NumberOfPrints"];

?>
    <tr>
         <td><?= $Name?></td>
         <td><?= $GCode?></td>
         <td><?= $NumberOfPrints?></td>
   </tr>
<?php
}
sqlsrv_free_stmt($getResults);
?>
