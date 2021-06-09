<html>
<head>
    <title>Pizsa - Admin</title>
    <meta charset="ISO-8859-1">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style-index.css">
</head>
<body class="bg">
<div>
    <a href="index.php"><img src="images/logo_Pizsa.png" width="158" height="179"></a>
</div>
<br><br><br>
<button class="btn2" onclick="location.href='index.php'" type="button">&emsp;Logout&emsp;</button>
<?php
include("server.php");
ob_start();
session_start();

$total=0;

if(isset($_POST['order1a'])){
    $piece=$_POST['pizza1'];
    echo "<div class=\"echoCss\"><br>$piece piece of Small Vegetarian Pizza ordered<br></div>";
    $total=$total+(15*$piece);
    $sqlUpdate="UPDATE availability SET piece=piece-$piece WHERE id=1";
    $check=mysqli_query($conn,$sqlUpdate);
    if($check==0){
        echo "Failed";
    }
}
if(isset($_POST['order1b'])){
    $piece=$_POST['pizza1'];
    echo "<div class=\"echoCss\"><br>$piece piece of Medium Vegetarian Pizza ordered<br></div>";
    $total=$total+(17*$piece);
    $sqlUpdate="UPDATE availability SET piece=piece-$piece WHERE id=1";
    $check=mysqli_query($conn,$sqlUpdate);
    if($check==0){
        echo "Failed";
    }
}
if(isset($_POST['order1c'])){
    $piece=$_POST['pizza1'];
    echo "<div class=\"echoCss\"><br>$piece piece of Large Vegetarian Pizza ordered<br></div>";
    $total=$total+(20*$piece);
    $sqlUpdate="UPDATE availability SET piece=piece-$piece WHERE id=1";
    $check=mysqli_query($conn,$sqlUpdate);
    if($check==0){
        echo "Failed";
    }
}
if(isset($_POST['order2a'])){
    $piece=$_POST['pizza2'];
    echo "<div class=\"echoCss\"><br>$piece piece of Small Chicken Pizza ordered<br></div>";
    $total=$total+(18*$piece);
    $sqlUpdate="UPDATE availability SET piece=piece-$piece WHERE id=2";
    $check=mysqli_query($conn,$sqlUpdate);
    if($check==0){
        echo "Failed";
    }
}
if(isset($_POST['order2b'])){
    $piece=$_POST['pizza2'];
    echo "<div class=\"echoCss\"><br>$piece piece of Medium Chicken Pizza ordered<br></div>";
    $total=$total+(20*$piece);
    $sqlUpdate="UPDATE availability SET piece=piece-$piece WHERE id=2";
    $check=mysqli_query($conn,$sqlUpdate);
    if($check==0){
        echo "Failed";
    }
}
if(isset($_POST['order2c'])){
    $piece=$_POST['pizza2'];
    echo "<div class=\"echoCss\"><br>$piece piece of Large Chicken Pizza ordered<br></div>";
    $total=$total+(22*$piece);
    $sqlUpdate="UPDATE availability SET piece=piece-$piece WHERE id=2";
    $check=mysqli_query($conn,$sqlUpdate);
    if($check==0){
        echo "Failed";
    }
}
if(isset($_POST['order3a'])){
    $piece=$_POST['pizza3'];
    echo "<div class=\"echoCss\"><br>$piece piece of Small Meat Pizza ordered<br></div>";
    $total=$total+(18*$piece);
    $sqlUpdate="UPDATE availability SET piece=piece-$piece WHERE id=3";
    $check=mysqli_query($conn,$sqlUpdate);
    if($check==0){
        echo "Failed";
    }
}
if(isset($_POST['order3b'])){
    $piece=$_POST['pizza3'];
    echo "<div class=\"echoCss\"><br>$piece piece of Medium Meat Pizza ordered<br></div>";
    $total=$total+(20*$piece);
    $sqlUpdate="UPDATE availability SET piece=piece-$piece WHERE id=3";
    $check=mysqli_query($conn,$sqlUpdate);
    if($check==0){
        echo "Failed";
    }
}
if(isset($_POST['order3c'])){
    $piece=$_POST['pizza3'];
    echo "<div class=\"echoCss\"><br>$piece piece of Large Meat Pizza ordered<br></div>";
    $total=$total+(22*$piece);
    $sqlUpdate="UPDATE availability SET piece=piece-$piece WHERE id=3";
    $check=mysqli_query($conn,$sqlUpdate);
    if($check==0){
        echo "Failed";
    }
}
if(isset($_POST['order4a'])){
    $piece=$_POST['pizza4'];
    echo "<div class=\"echoCss\"><br>$piece piece of Small Pepperoni Pizza ordered<br></div>";
    $total=$total+(19*$piece);
    $sqlUpdate="UPDATE availability SET piece=piece-$piece WHERE id=4";
    $check=mysqli_query($conn,$sqlUpdate);
    if($check==0){
        echo "Failed";
    }
}
if(isset($_POST['order4b'])){
    $piece=$_POST['pizza4'];
    echo "<div class=\"echoCss\"><br>$piece piece of Medium Pepperoni Pizza ordered<br></div>";
    $total=$total+(21*$piece);
    $sqlUpdate="UPDATE availability SET piece=piece-$piece WHERE id=4";
    $check=mysqli_query($conn,$sqlUpdate);
    if($check==0){
        echo "Failed";
    }
}
if(isset($_POST['order4c'])){
    $piece=$_POST['pizza4'];
    echo "<div class=\"echoCss\"><br>$piece piece of Large Pepperoni Pizza ordered<br></div>";
    $total=$total+(23*$piece);
    $sqlUpdate="UPDATE availability SET piece=piece-$piece WHERE id=4";
    $check=mysqli_query($conn,$sqlUpdate);
    if($check==0){
        echo "Failed";
    }
}
if(isset($_POST['order5a'])){
    $piece=$_POST['pizza5'];
    echo "<div class=\"echoCss\"><br>$piece piece of Large Pepperoni Pizza ordered<br></div>";
    $total=$total+(20*$piece);
    $sqlUpdate="UPDATE availability SET piece=piece-$piece WHERE id=5";
    $check=mysqli_query($conn,$sqlUpdate);
    if($check==0){
        echo "Failed";
    }
}
if(isset($_POST['order5b'])){
    $piece=$_POST['pizza5'];
    echo "<div class=\"echoCss\"><br>$piece piece of Large Pepperoni Pizza ordered<br></div>";
    $total=$total+(22*$piece);
    $sqlUpdate="UPDATE availability SET piece=piece-$piece WHERE id=5";
    $check=mysqli_query($conn,$sqlUpdate);
    if($check==0){
        echo "Failed";
    }
}
if(isset($_POST['order5c'])){
    $piece=$_POST['pizza5'];
    echo "<div class=\"echoCss\"><br>$piece piece of Large Pepperoni Pizza ordered<br></div>";
    $total=$total+(24*$piece);
    $sqlUpdate="UPDATE availability SET piece=piece-$piece WHERE id=5";
    $check=mysqli_query($conn,$sqlUpdate);
    if($check==0){
        echo "Failed";
    }
}
if(isset($_POST['order6a'])){
    $piece=$_POST['pizza6'];
    echo "<div class=\"echoCss\"><br>$piece piece of Large Pepperoni Pizza ordered<br></div>";
    $total=$total+(22*$piece);
    $sqlUpdate="UPDATE availability SET piece=piece-$piece WHERE id=6";
    $check=mysqli_query($conn,$sqlUpdate);
    if($check==0){
        echo "Failed";
    }
}
if(isset($_POST['order6b'])){
    $piece=$_POST['pizza6'];
    echo "<div class=\"echoCss\"><br>$piece piece of Large Pepperoni Pizza ordered<br></div>";
    $total=$total+(23*$piece);
    $sqlUpdate="UPDATE availability SET piece=piece-$piece WHERE id=6";
    $check=mysqli_query($conn,$sqlUpdate);
    if($check==0){
        echo "Failed";
    }
}
if(isset($_POST['order6c'])){
    $piece=$_POST['pizza6'];
    echo "<div class=\"echoCss\"><br>$piece piece of Large Pepperoni Pizza ordered<br></div>";
    $total=$total+(26*$piece);
    $sqlUpdate="UPDATE availability SET piece=piece-$piece WHERE id=6";
    $check=mysqli_query($conn,$sqlUpdate);
    if($check==0){
        echo "Failed";
    }
}
if(isset($_POST['order7'])){
    $piece=$_POST['beverage1'];
    echo "<div class=\"echoCss\"><br>$piece piece of Water ordered<br></div>";
    $total=$total+(2*$piece);
    $sqlUpdate="UPDATE availability SET piece=piece-$piece WHERE id=7";
    $check=mysqli_query($conn,$sqlUpdate);
    if($check==0){
        echo "Failed";
    }
}
if(isset($_POST['order8'])){
    $piece=$_POST['beverage2'];
    echo "<div class=\"echoCss\"><br>$piece piece of Cola ordered<br></div>";
    $total=$total+(4*$piece);
    $sqlUpdate="UPDATE availability SET piece=piece-$piece WHERE id=";
    $check=mysqli_query($conn,$sqlUpdate);
    if($check==0){
        echo "Failed";
    }
}
if(isset($_POST['order9'])){
    $piece=$_POST['beverage3'];
    echo "<div class=\"echoCss\"><br>$piece piece of Beer ordered<br></div>";
    $total=$total+(6*$piece);
    $sqlUpdate="UPDATE availability SET piece=piece-$piece WHERE id=9";
    $check=mysqli_query($conn,$sqlUpdate);
    if($check==0){
        echo "Failed";
    }
}
if(isset($_POST['order10'])){
    $piece=$_POST['beverage4'];
    echo "<div class=\"echoCss\"><br>$piece piece of Ayran ordered<br></div>";
    $total=$total+(3*$piece);
    $sqlUpdate="UPDATE availability SET piece=piece-$piece WHERE id=10";
    $check=mysqli_query($conn,$sqlUpdate);
    if($check==0){
        echo "Failed";
    }
}
if(isset($_POST['order11'])){
    $piece=$_POST['beverage5'];
    echo "<div class=\"echoCss\"><br>$piece piece of Tea ordered<br></div>";
    $total=$total+(2*$piece);
    $sqlUpdate="UPDATE availability SET piece=piece-$piece WHERE id=11";
    $check=mysqli_query($conn,$sqlUpdate);
    if($check==0){
        echo "Failed";
    }
}
if(isset($_POST['order12'])){
    $piece=$_POST['beverage6'];
    echo "<div class=\"echoCss\"><br>$piece piece of Coffee ordered<br></div>";
    $total=$total+(4*$piece);
    $sqlUpdate="UPDATE availability SET piece=piece-$piece WHERE id=12";
    $check=mysqli_query($conn,$sqlUpdate);
    if($check==0){
        echo "Failed";
    }
}
if(isset($_POST['order13'])){
    $piece=$_POST['dessert1'];
    echo "<div class=\"echoCss\"><br>$piece piece of Apple Pie ordered<br></div>";
    $total=$total+(2*$piece);
    $sqlUpdate="UPDATE availability SET piece=piece-$piece WHERE id=13";
    $check=mysqli_query($conn,$sqlUpdate);
    if($check==0){
        echo "Failed";
    }
}
if(isset($_POST['order14'])){
    $piece=$_POST['dessert2'];
    echo "<div class=\"echoCss\"><br>$piece piece of Chocolate Cake ordered<br></div>";
    $total=$total+(4*$piece);
    $sqlUpdate="UPDATE availability SET piece=piece-$piece WHERE id=14";
    $check=mysqli_query($conn,$sqlUpdate);
    if($check==0){
        echo "Failed";
    }
}
if(isset($_POST['order15'])){
    $piece=$_POST['dessert3'];
    echo "<div class=\"echoCss\"><br>$piece piece of Banana Pudding ordered<br></div>";
    $total=$total+(6*$piece);
    $sqlUpdate="UPDATE availability SET piece=piece-$piece WHERE id=15";
    $check=mysqli_query($conn,$sqlUpdate);
    if($check==0){
        echo "Failed";
    }
}
if(isset($_POST['order16'])){
    $piece=$_POST['dessert4'];
    echo "<div class=\"echoCss\"><br>$piece piece of Ice cream ordered<br></div>";
    $total=$total+(3*$piece);
    $sqlUpdate="UPDATE availability SET piece=piece-$piece WHERE id=16";
    $check=mysqli_query($conn,$sqlUpdate);
    if($check==0){
        echo "Failed";
    }
}
if(isset($_POST['order17'])){
    $piece=$_POST['dessert5'];
    echo "<div class=\"echoCss\"><br>$piece piece of Cookie ordered<br></div>";
    $total=$total+(4*$piece);
    $sqlUpdate="UPDATE availability SET piece=piece-$piece WHERE id=17";
    $check=mysqli_query($conn,$sqlUpdate);
    if($check==0){
        echo "Failed";
    }
}
if(isset($_POST['order18'])){
    $piece=$_POST['dessert6'];
    echo "<div class=\"echoCss\"><br>$piece piece of Stroopwafel ordered<br></div>";
    $total=$total+(4*$piece);
    $sqlUpdate="UPDATE availability SET piece=piece-$piece WHERE id=18";
    $check=mysqli_query($conn,$sqlUpdate);
    if($check==0){
        echo "Failed";
    }
}
echo "<div class=\"echoCss\">Total price: $total TL</div>";
$discount=0;
if($total==50){
    $discount=$total*0.1;
}
if($total>50 and $total<=70){
    $discount=$total*0.15;
}
if($total>70){
    $discount=$total*0.2;
}
$mycustomerId=$_SESSION['user'];
$date=date('Y/m/d');
$sqlOrdered="INSERT INTO `prices` (`customerId`,`totalPrice`,`discount`,`date`) VALUES('".$mycustomerId."','".$total."','".$discount."','".$date."')";
$ordered=mysqli_query($conn,$sqlOrdered);
if(!$ordered){
    echo "Order failed";
}
?>

</body>
</html>