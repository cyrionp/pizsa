<?php
include("server.php");
ob_start();
session_start();

$adminId = $_POST['login_adminId'];
$sqlQuery= "SELECT * FROM admins WHERE id='".$adminId."'";
$sql_check = mysqli_query($conn,$sqlQuery);
//$sql_validation = mysqli_query($conn,"SELECT * FROM customers WHERE customerNumber='".$customerId."'") or die(mysqli_error($conn));
if(mysqli_num_rows($sql_check))  {
    $_SESSION["login"] = "true";
    $_SESSION["user"] = $adminId;
    header("Location:admin.php");
}
else {
    if($adminId==""){
        echo "You've missed admin id<br><a href=javascript:history.back(-1)>Return</a></center>";
    }
    else {
        echo "Incorrect admin id<br><a href=javascript:history.back(-1)>Return</a></center>";
    }
}
ob_end_flush();
?>