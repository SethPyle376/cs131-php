<html>
    <body>
        Welcome <?php echo $_POST["name"]; ?><br>
        Your email address is: <a href="mailto:<?php echo $_POST["email"];?>">address</a><br>
        Your major is: <?php echo $_POST["major"]; ?><br>
        Your Comments: <?php echo $_POST["comments"]; ?><br><br>
        Continents You've Visited:<br>
        
        <?php
        
        $continents = $_POST['continents'];
        
        foreach ($continents as $value) {
            echo $value."<br>";
        }
        
        ?>
        
    </body>
</html>