<?php
if(empty($_GET['region'])){
    echo "Please select a region";
}
elseif(isset($_GET['region'])) {
    $region = $_GET['region'];
    echo "$region is selected";
    echo "<br>";
}


if(isset($_GET['display'])){

    if(empty($_GET['display']))
    {
        echo "Please select an ordering type";
    }
    else
    {
        $display = $_GET['display'];
        echo "Selected ordering types: ";
        for($i=0;$i<count(array($display));$i++)
        {
            echo $display[$i].', ';
        }
    }
}
?>