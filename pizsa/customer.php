<html>
<head>
    <title>Pizsa - Customer</title>
    <meta charset="ISO-8859-1">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style-index.css">
</head>
<body class="bg">
<div>
    <a href="index.php"><img src="images/logo_Pizsa.png" width="158" height="179"></a>
</div>
<br><br><br>
<form method="POST" action="login.php">
    <br><br>
    <input type="text" name="login_customerId" value="" placeholder="Customer Id">
    <br><br>
    <input type="submit" name="login" class="btn2" value="&emsp;LOGIN&emsp;">
    <br><br>
</form>
<h2>If you visit our website for the first time please register:</h2>
<form method="POST" action="insert.php">
    <br>
    <input type="text" name="register_username" value="" placeholder="Username">
    <br><br>
    <input type="text" name="register_address" value="" placeholder="Address">
    <br><br>
    <input type="submit" name="register" class="btn2" value="REGISTER">
    <br><br><br>
</form>
</body>
</html>