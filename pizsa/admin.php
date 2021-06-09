<html>
<head>
    <title>Pizsa - Admin</title>
    <meta charset="ISO-8859-1">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style-index.css">
    <style>
        table{
            border-collapse: collapse;
        }
        th, td{
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even){background-color: #f2f2f2}
        tr:nth-child(odd){background-color: white}
        th{
            background-color: #de1d26;
            color: white;
        }
    </style>
</head>
<body class="bg">
<div>
    <a href="index.php"><img src="images/logo_Pizsa.png" width="158" height="179"></a>
</div>
<br><br><br>
<form method="POST" action="admin.php">
    <?php
    include("server.php");
    ob_start();
    session_start();

    $query = "SELECT * FROM prices";
    $result = mysqli_query($conn,$query);

    echo "<table>"; // start a table tag in the HTML
    echo "<tr><th>Customer Id</th><th>Total Price</th><th>Discount</th><th>Date</th></tr>";
    while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
        echo "<tr><td>" . $row['customerId'] . "</td><td>" . $row['totalPrice'] . " TL" . "</td><td>" . $row['discount'] . " TL" . "</td><td>" . $row['date'] . "</td></tr>";  //$row['index'] the index here is a field name
    }
    echo "</table>"; //Close the table in HTML
    ?>

</form>
</body>
</html>