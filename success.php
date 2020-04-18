<?php
   require 'MYProject/public_html/main.html';
        

   require 'MYProject/includes/header1.php';
   session_start();
   $_SESSION["shopping_cart"]=null;
   $_SESSION["count"]=null;
        ?>
 
    
<div>
    <center>
        <p>Thank You for Ordering from E-Store. The order will be shortly delivered</p>
        
        <p>Order some more item. Go To <a href="home.php">Home</a></p>
    </center>
</div>
