<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>jQuery Show Hide Elements Using Checkboxes</title>
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style-index.css">
    <style>
        .box{
            color: #fff;
            padding: 20px;
            display: none;
            margin-top: 20px;
        }
        .pizza{ background: #ff0000; }
        .beverage{ background: #228B22; }
        .dessert{ background: #0000ff; }
        label{ margin-right: 15px; }
    </style>
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
<body>
<div>
    <label><input type="checkbox" name="myCheckbox" value="pizza"> Pizza</label>
    <label><input type="checkbox" name="myCheckbox" value="beverage"> Beverage</label>
    <label><input type="checkbox" name="myCheckbox" value="dessert"> Dessert</label>
</div>
<div class="pizza box">
    <table id="tablePizza" class="center">
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
            <th class="header">Price</th>
        </tr>
        <tr>
            <th></th>
            <th></th>
            <th></th>
            <th class="header2">Small</th>
            <th class="header2">Medium</th>
            <th class="header2">Large</th>
            <th class="header2">Number</th>
            <th class="header2">Availability</th>
        </tr>
        <tr>
            <th></th>
            <th><input type="checkbox" id="order1"></th>
            <th class="header2">Vegetarian Pizza</th>
            <th class="value">15 TL</th>
            <th class="value">17 TL</th>
            <th class="value">20 TL</th>
            <th class="value"><input type="text" id="pizza1" class="table"></th>
            <th class="value">Availability</th>
        </tr>
        <tr>
            <th></th>
            <th><input type="checkbox" id="order2"></th>
            <th class="header2">Chicken Pizza</th>
            <th class="value">18 TL</th>
            <th class="value">20 TL</th>
            <th class="value">22 TL</th>
            <th class="value"><input type="text" id="pizza2" class="table"></th>
            <th class="value">Availability</th>
        </tr>
        <tr>
            <th></th>
            <th><input type="checkbox" id="order3"></th>
            <th class="header2">Meat Pizza</th>
            <th class="value">18 TL</th>
            <th class="value">20 TL</th>
            <th class="value">22 TL</th>
            <th class="value"><input type="text" id="pizza3" class="table"></th>
            <th class="value">Availability</th>
        </tr>
        <tr>
            <th></th>
            <th><input type="checkbox" id="order4"></th>
            <th class="header2">Pepperoni Pizza</th>
            <th class="value">19 TL</th>
            <th class="value">21 TL</th>
            <th class="value">23 TL</th>
            <th class="value"><input type="text" id="pizza4" class="table"></th>
            <th class="value">Availability</th>
        </tr>
        <tr>
            <th></th>
            <th><input type="checkbox" id="order5"></th>
            <th class="header2">Mix Pizza</th>
            <th class="value">20 TL</th>
            <th class="value">22 TL</th>
            <th class="value">24 TL</th>
            <th class="value"><input type="text" id="pizza5" class="table"></th>
            <th class="value">Availability</th>
        </tr>
        <tr>
            <th></th>
            <th><input type="checkbox" id="order6"></th>
            <th class="header2">COME308 Special Pizza</th>
            <th class="value">22 TL</th>
            <th class="value">23 TL</th>
            <th class="value">26 TL</th>
            <th class="value"><input type="text" id="pizza6" class="table"></th>
            <th class="value">Availability</th>
        </tr>
    </table>
</div>
<div class="beverage box">

</div>
<div class="blue box">You have selected <strong>blue checkbox</strong> so i am here</div>
</body>
</html>