<?php
    session_start();
    
    if (!isset($_SESSION['items'])) {
        $_SESSION['items'] = array();
    }
?>



<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script>
            
            function sendToSession(item, price) {
                var xhttp = new XMLHttpRequest();
                xhttp.open("POST", "addToSession.php", true);
                xhttp.onreadystagechange = function() {
                    if (this.status == 200) {
                        document.getElementById("textFromServer").innerHtml = this.responseText;
                    }
                }
                xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                xhttp.send("item=" + item + "&price= " + price);
            }
            
        </script>
    </head>
   
    
    <body>
        
        <ul>
  <li><a class="active" href="mainpage.php">Browse for Items</a></li>
  <li><a href="cart.php">Cart</a></li>
 
</ul>

<div class="responsive">
  <div class="gallery">
        <img src="https://s3.amazonaws.com/images.gibson.com/Products/Electric-Guitars/2018/Memphis/ES-335-58-2018/ES58P188BNH1_FINISHES_FAMILY.jpg" alt="Trolltunga Norway" width="600" height="300">
        <div class="desc">Gibson 1958 ES-335</div>
        <div class="price">$5799</div>
        <button class="button button4" onclick="sendToSession('Gibson ES-335', '5799')">Add</button>
  </div>
</div>


<div class="responsive">
  <div class="gallery">
        <img src="http://images.gibson.com/Products/Electric-Guitars/Les-Paul/Gibson-USA/Billie-Joe-Armstrong-Les-Paul-Junior-Double-Cut/Splash-02.jpg" alt="Forest" width="600" height="300">
        <div class="desc">Gibson Billie Joe Armstrong Les Paul Junior Double Cut</div>
        <div class="price">$1900</div>
        <button class="button button4" onclick="sendToSession('Gibson BJA LPJ Double Cut', '1900')">Add</button>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
    <img src="https://www.fmicassets.com/Damroot/ZoomJpg/10002/0110132850_gtr_frt_001_rr.jpg" alt="Northern Lights" width="600" height="300">
    <div class="desc">2018 Fender American Original '50s Telecaster</div>
    <div class="price">$1800</div>
    <button class="button button4" onclick="sendToSession('Fender Telecaster', '1800')">Add</button>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
        <img src="https://images-na.ssl-images-amazon.com/images/I/51wAFJYZNJL._SL1000_.jpg" alt="Mountains" width="600" height="300">
        <div class="desc">Cherry Red Dreadnaught Hohner Acoustic</div>
        <div class="price">$500</div>
        <button class="button button4" onclick="sendToSession('Hohner Red Dreadnaught Acoustic', '500')">Add</button>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
      <img src="https://images.reverb.com/image/upload/s--4y3M3y7p--/a_exif,c_limit,e_unsharp_mask:80,f_auto,fl_progressive,g_south,h_620,q_90,w_620/v1437423988/edybmowfkphyqxqnbx1w.jpg" alt="Mountains" width="600" height="300">
      <div class="desc">Gibson Billie Joe Armstrong Signature Les Paul Junior Sunburst</div>
      <div class="price">$2000</div>
      <button class="button button4" onclick="sendToSession('Gibson BJA LPJ Suburst', '2000')">Add</button>
  </div>
</div>

<div class="responsive">
  <div class="gallery">
        <img src="https://www.fmicassets.com/Damroot/ZoomJpg/10001/0110112801_gtr_frt_001_rr.jpg" alt="Mountains" width="600" height="300">
        <div class="desc">2018 Fender American Original Stratocaster</div>
        <div class="price">$1949</div>
        <button class="button button4" onclick="sendToSession('Fender Stratocaster', '1949')">Add</button>
  </div>
</div>

<div class="clearfix"></div>
        
        
    
        <input type="text" id="textToSend"><br>
        <button type="button" id="send" onclick="sendToSession()">Send</button>
        
        <a href="cart.php">Cart</a>
    </body>
</html>