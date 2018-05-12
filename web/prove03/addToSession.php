<?php
    $item = $_POST["item"];
    $price = $_POST["price"];
    
    session_start();
    
    array_push($_SESSION['items'], array($item, $price));
    
    foreach($_SESSION['items'] as $key=>$value) {
        echo 'The value of '. $key . " is " . $value[0] . " " . $value[1] . "<br>";
    }
?>