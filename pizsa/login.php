<?php
    include("server.php");
    ob_start();
    session_start();

    $customerId = $_POST['login_customerId'];
    $sqlQuery= "SELECT * FROM customers WHERE customerNumber='".$customerId."'";
    $sql_check = mysqli_query($conn,$sqlQuery);
    //$sql_validation = mysqli_query($conn,"SELECT * FROM customers WHERE customerNumber='".$customerId."'") or die(mysqli_error($conn));
    if(mysqli_num_rows($sql_check))  {
        $_SESSION["login"] = "true";
        $_SESSION["user"] = $customerId;
        header("Location:customer_order.php");
    }
    else {
        if($customerId==""){
            echo "You've missed customer id<br><a href=javascript:history.back(-1)>Return</a></center>";
        }
        else {
            echo "Incorrect customer id<br><a href=javascript:history.back(-1)>Return</a></center>";
        }
    }
    ob_end_flush();
?>