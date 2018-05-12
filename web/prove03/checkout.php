<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    
    <body>
        <ul>
          <li><a class="active" href="mainpage.php">Browse for Items</a></li>
          <li><a href="cart.php">Cart</a></li>
        </ul>
        
        <h1>Confirmation Information</h1>
        
        <form action="information.php" method="post">
            Name: <input type="text" name="name"><br>
            E-Mail: <input type="text" name="email"><br>
            Address: <input type="text" name="address"><br>
            <input type="submit">
        </form>
        
        <?php
            session_start();
            echo '<h1>Total Price: $' . $_SESSION['total'] . '</h1>';
        ?>
    </body>