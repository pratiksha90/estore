<?php
   require 'MYProject/public_html/main.html';
        

   require 'MYProject/includes/header.php';
        ?>

<div class="container">
<div class="row">
    
        <div class="col-sm-10"> 
            <h4>Live Support</h4>
            Add live chat to your website and mobile app to connect instantly to your customer. ... Mobile live chat also gives you the ability to proactively start a chat — think prompting customers to complete a purchase. In fact, customers approached with a chat are three times more likely to make a purchase.

        </div>
         <div class="col-sm-2"> 
             <img src="image/contact.jpg" class="img-thumbnail img-responsive">
         </div>
    </div>
        <div class="row">
          <div class="col-sm-6"> 
         <h3>Contact Us</h3>
      
             

          <form method="post" action="contact_script.php">
              <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" class="form-control input-lg " id="name" required>
              </div>
              <div class="form-group">
                  <label for="e">Email</label>
           <input type="email" name="email" class="form-control input-lg " id="e" required>
              </div>
              <div class="form-group">
  <label for="comment">Comment:</label>
  <textarea class="form-control" rows="5" id="comment" name="comment" required></textarea>
</div>
           <div class="form-group">
            <p> <button type="submit" class="btn btn-primary" data-dismiss="modal">Submit</button></p>
           </div>
          </form>
              <span class="error">*
    <?php 
             if(!isset($_GET['msg'])){            
                }
                 else{$error=$_GET['msg'];
                 echo "<h3>".$error."</h3>";}?> </span>

      
          </div>
          <div class="col-sm-4"> 
         <h3>Company Information</h3>
         <p>Gonex, is one of the best producer of Mobile Phones located in Hong Kong and now introducing its operations in Pakistan. Gonex Specializes in the production of a wide variety of Mobile Phones.

Our Vision is establishing a sustainable relationship with customers. By providing up-to-date news and market information, we hope to interact actively and consistently with our customers to cater the needs of individuals. At the same time, we will focus on gathering the newest products, and continue to bring surprises to our customers.

Gonex is quality brand that offers its users affordability and reliability all at once. Excellent customer care with features that spell customer convenience, Gonex range of stylish yet innovatively advanced mobile products provide affordable touch screens, QWERTY, WiFi and Android OS smart phones, catering to customers who are looking out for advanced quality and features at prices that are extremely affordable.
</p>
          </div>
        </div>

</div>
<?php
   include 'MYProject/includes/footer.php';
        ?>
