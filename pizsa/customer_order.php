<html>
<head>
    <title>Pizsa - Order</title>
    <meta charset="ISO-8859-1">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style-index.css">

    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script>
        $(document).ready(function(){
            $('input[type="checkbox"]').click(function(){
                var inputValue = $(this).attr("value");
                $("." + inputValue).toggle();
            });
        });
    </script>
</head>
<body class="bg2">
<div>
    <a href="index.php"><img src="images/logo_Pizsa.png" width="158" height="179"></a>
</div>
<br><br>
<form method="GET" action="radio.php">
    <h2>Welcome to CSE216 Pizza ordering website</h2>
    <h2>Please choose your region and type of ordering</h2>
    <br>
    <h3>Regions:</h3>
    <input type="radio" id="pozcu" name="region" value="pozcu" checked="checked">
    <label for="pozcu" class="echoCss">Pozcu</label>
    <input type="radio" id="mezitli" name="region" value="mezitli">
    <label for="mezitli" class="echoCss">Mezitli</label>
    <input type="radio" id="toros_university" name="region" value="toros_university">
    <label for="toros_university" class="echoCss">Toros University</label>
    <input type="radio" id="others" name="region" value="others">
    <label for="others" class="echoCss">Others</label>
    <br><br>
    <h3>Type of Ordering:</h3>
    <input type="checkbox" id="pizza" name="myCheckbox" value="pizza">
    <label for="pizza" class="echoCss"> Pizza</label>
    <input type="checkbox" id="beverage" name="myCheckbox" value="beverage">
    <label for="beverage" class="echoCss"> Beverage</label>
    <input type="checkbox" id="dessert" name="myCheckbox" value="dessert">
    <label for="dessert" class="echoCss"> Dessert</label>
    <br><br>
</form>
<form action="customer_info.php" method="post">
<div class="pizza box" class="bg3">
<table id="tablePizza" class="center">
    <tr>
        <th></th>
        <th></th>
        <th></th>
        <th class="header">Price</th>
    </tr>
    <tr>
        <th></th>
        <th></th>
        <th class="header2">Small</th>
        <th class="header2">Medium</th>
        <th class="header2">Large</th>
        <th class="header2">Number</th>
        <th class="header2">Availability</th>
    </tr>
    <tr>
        <form action="customer_info.php" method="get">
        <th></th>
        <th class="header2">Vegetarian Pizza</th>
        <th class="value"><input type="checkbox" name="order1a">15 TL</th>
        <th class="value"><input type="checkbox" name="order1b">17 TL</th>
        <th class="value"><input type="checkbox" name="order1c">20 TL</th>
        <th class="value"><input type="text" name="pizza1" class="table"></th>
        <th class="value" name="av1">Availability</th>
    </tr>
    <tr>
        <th></th>
        <th class="header2">Chicken Pizza</th>
        <th class="value"><input type="checkbox" name="order2a">18 TL</th>
        <th class="value"><input type="checkbox" name="order2b">20 TL</th>
        <th class="value"><input type="checkbox" name="order2c">22 TL</th>
        <th class="value"><input type="text" name="pizza2" class="table"></th>
        <th class="value">Availability</th>
    </tr>
    <tr>
        <th></th>
        <th class="header2">Meat Pizza</th>
        <th class="value"><input type="checkbox" name="order3a">18 TL</th>
        <th class="value"><input type="checkbox" name="order3b">20 TL</th>
        <th class="value"><input type="checkbox" name="order3c">22 TL</th>
        <th class="value"><input type="text" name="pizza3" class="table"></th>
        <th class="value">Availability</th>
    </tr>
    <tr>
        <th></th>
        <th class="header2">Pepperoni Pizza</th>
        <th class="value"><input type="checkbox" name="order4a">19 TL</th>
        <th class="value"><input type="checkbox" name="order4b">21 TL</th>
        <th class="value"><input type="checkbox" name="order4c">23 TL</th>
        <th class="value"><input type="text" name="pizza4" class="table"></th>
        <th class="value">Availability</th>
    </tr>
    <tr>
        <th></th>
        <th class="header2">Mix Pizza</th>
        <th class="value"><input type="checkbox" name="order5a">20 TL</th>
        <th class="value"><input type="checkbox" name="order5b">22 TL</th>
        <th class="value"><input type="checkbox" name="order5c">24 TL</th>
        <th class="value"><input type="text" name="pizza5" class="table"></th>
        <th class="value">Availability</th>
    </tr>
    <tr>
        <th></th>
        <th class="header2">COME308 Special Pizza</th>
        <th class="value"><input type="checkbox" name="order6a">22 TL</th>
        <th class="value"><input type="checkbox" name="order6b">23 TL</th>
        <th class="value"><input type="checkbox" name="order6c">26 TL</th>
        <th class="value"><input type="text" name="pizza6" class="table"></th>
        <th class="value">Availability</th>
    </tr>
</table>
</div>
    <div class="beverage box" class="bg3">
    <table id="tableBeverage" class="center">
        <tr>
            <th></th>
            <th></th>
            <th class="header2">Price</th>
            <th class="header2">Number</th>
            <th class="header2">Availability</th>
        </tr>
        <tr>
            <th><input type="checkbox" name="order7"></th>
            <th class="header2">Water</th>
            <th class="value">2 TL</th>
            <th class="value"><input type="text" name="beverage1" class="table"></th>
            <th class="value">Availability</th>
        </tr>
        <tr>
            <th><input type="checkbox" name="order8"></th>
            <th class="header2">Cola</th>
            <th class="value">4 TL</th>
            <th class="value"><input type="text" name="beverage2" class="table"></th>
            <th class="value">Availability</th>
        </tr>
        <tr>
            <th><input type="checkbox" name="order9"></th>
            <th class="header2">Beer</th>
            <th class="value">6 TL</th>
            <th class="value"><input type="text" name="beverage3" class="table"></th>
            <th class="value">Availability</th>
        </tr>
        <tr>
            <th><input type="checkbox" name="order10"></th>
            <th class="header2">Ayran</th>
            <th class="value">3 TL</th>
            <th class="value"><input type="text" name="beverage4" class="table"></th>
            <th class="value">Availability</th>
        </tr>
        <tr>
            <th><input type="checkbox" name="order11"></th>
            <th class="header2">Tea</th>
            <th class="value">4 TL</th>
            <th class="value"><input type="text" name="beverage5" class="table"></th>
            <th class="value">Availability</th>
        </tr>
        <tr>
            <th><input type="checkbox" name="order12"></th>
            <th class="header2">Coffee</th>
            <th class="value">4 TL</th>
            <th class="value"><input type="text" name="beverage6" class="table"></th>
            <th class="value">Availability</th>
        </tr>
    </table>
    </div>
    <div class="dessert box" class="bg3">
    <table id="tableDessert" class="center">
        <tr>
            <th></th>
            <th></th>
            <th class="header2">Price</th>
            <th class="header2">Number</th>
            <th class="header2">Availability</th>
        </tr>
        <tr>
            <th><input type="checkbox" name="order13"></th>
            <th class="header2">Apple Pie</th>
            <th class="value">2 TL</th>
            <th class="value"><input type="text" name="dessert1" class="table"></th>
            <th class="value">Availability</th>
        </tr>
        <tr>
            <th><input type="checkbox" name="order14"></th>
            <th class="header2">Chocolate Cake</th>
            <th class="value">4 TL</th>
            <th class="value"><input type="text" name="dessert2" class="table"></th>
            <th class="value">Availability</th>
        </tr>
        <tr>
            <th><input type="checkbox" name="order15"></th>
            <th class="header2">Banana Pudding</th>
            <th class="value">6 TL</th>
            <th class="value"><input type="text" name="dessert3" class="table"></th>
            <th class="value">Availability</th>
        </tr>
        <tr>
            <th><input type="checkbox" name="order16"></th>
            <th class="header2">Ice cream</th>
            <th class="value">3 TL</th>
            <th class="value"><input type="text" name="dessert4" class="table"></th>
            <th class="value">Availability</th>
        </tr>
        <tr>
            <th><input type="checkbox" name="order17"></th>
            <th class="header2">Cookie</th>
            <th class="value">4 TL</th>
            <th class="value"><input type="text" name="dessert5" class="table"></th>
            <th class="value">Availability</th>
        </tr>
        <tr>
            <th><input type="checkbox" name="order18"></th>
            <th class="header2">Stroopwafel</th>
            <th class="value">4 TL</th>
            <th class="value"><input type="text" name="dessert6" class="table"></th>
            <th class="value">Availability</th>
        </tr>
    </table>
    </div>
    <input type="submit" value="ORDER" class="btn2">
</form>
</body>
</html>