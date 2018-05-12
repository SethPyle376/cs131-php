<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        
        <ul>
          <li><a class="active" href="mainpage.php">Browse for Items</a></li>
          <li><a href="cart.php">Cart</a></li>
        </ul>
        
        <h1> In your cart:</h1><br>
        
        <?php
            session_start();
            
            $_SESSION["total"] = 0;
            
            echo '<table>';
            echo '<tr>';
            echo '<th>Item</th>';
            echo '<th>Price</th>';
            echo '</tr>';
            
            foreach($_SESSION['items'] as $key=>$value) {
                echo '<tr>';
                echo '<td>' . $value[0] . '</td><td>$' . $value[1] . '</td>';
                $_SESSION["total"] += $value[1];
            }
            echo '<tr>';
            echo '<td><b>Total:</b></td><td>$ ' . $_SESSION['total'] . '</td>';
            echo '</table>';
        ?>
        
        <button class="button button4" onclick="location.href='checkout.php'">Checkout</button>
        
        
    </body>
</html>