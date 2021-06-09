<html>
<head>
    <meta http-equiv="refresh" content="3;customer.php">
    <title>Pizsa - Redirecting..</title>
    <meta charset="ISO-8859-1">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style-index.css">
</head>
<body class="bg">
<div>
    <a href="index.php"><img src="images/logo_Pizsa.png" width="158" height="179"></a>
</div>
<br><br><br>
<h2>We are redirecting you in 3 seconds..</h2>
</body>
</html>

<?php
session_start();
$username = $_POST['register_username'];
$address = $_POST['register_address'];

$conn=mysqli_connect("localhost","root","","pizsa");
mysqli_set_charset($conn, "utf8");

$sql="select userName from customers WHERE userName='$username'";

$checkUser= mysqli_query($conn,$sql);
$rows=mysqli_num_rows($checkUser);

if ($rows>0)
{
    echo "<div class=\"echoCss\">This username is already in use</div>";
} else{
    $sqlAdd="INSERT INTO customers(userName,address) VALUES ('$username','$address')";
    $check=mysqli_query($conn,$sqlAdd);

    $last_id = mysqli_insert_id($conn);

    if ($check==0)
        echo "<div class=\"echoCss\">Please check</div>";
    else {
        echo "<div class=\"echoCss\">Registered successfully</div>";
        echo "<div class=\"echoCss\">Your customer number is: $last_id</div>";
    }
}
?>