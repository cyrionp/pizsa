<?php
include("server.php");
session_start();
ob_start();

if(!isset($_SESSION["login"])){
    header("Location:customer.php");
}
else {
    echo "<a href=logout.php>LOGOUT</a></center>";
}
?>