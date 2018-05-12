<?php
    session_start();
    
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];
    
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['address'] = $address;
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <ul>
          <li><a class="active" href="mainpage.php">Browse for Items</a></li>
          <li><a href="cart.php">Cart</a></li>
        </ul>
        
        <?php
            echo 'Thank you ' . $_SESSION['name'] . ' for your order.<br>';
            echo 'Your order will be sent to ' . $_SESSION['address'] . '<br>';
            echo 'Shipping updates will be emailed to ' . $_SESSION['email'] . '<br>';
        ?>
    </body>
</html>