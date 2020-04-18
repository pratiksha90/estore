<?php
   require 'MYProject/public_html/main.html';
        

   require 'MYProject/includes/header.php';
   
        ?>


<div class="container ">
<div class="row p-3 mb-2 bg-warning text-white">
    
         <div class="col-sm-6"> 
             <div class="panel p-3 mb-2 bg-warning">
        <div class="panel-body p-3 mb-2 bg-warning">
            <img src="image/signimage.jpg" class="img-responsive img-circle">
         </div>
        </div>
    </div>
        
          <div class="col-sm-6"> 
              <div class="panel">
        <div class="panel-body">
         <h3>SIGN UP</h3>
         <p class="error">* Required </p>
         <form method="post" action="signup_script.php">
              <div class="form-group">
                  
                  <input type="text" name="name" class="form-control " placeholder="Name" required>
                    <span class="error">*<?php 
             if(!isset($_GET['name_error'])){   }else{$error=$_GET['name_error']; echo $error;}?> </span>
              </div>
              <div class="form-group">
                  
           <input type="text" name="email" class="form-control  " placeholder="Email" required="true">
             <span class="error">*<?php 
             if(!isset($_GET['email_error'])){   }else{$error=$_GET['email_error']; echo $error;}?> </span>
              </div>
                <div class="form-group">
                  
                    <input type="password" name="pass" class="form-control " placeholder="Password" required="true" pattern=".{6,}"
                           title="Must contain at least one  number and one uppercase and lowercase letter, and at least 8 or more characters">
                    <span class="error">* </span>
              </div>
                <div class="form-group">
                  
                  <input type="tel" name="contact" class="form-control " placeholder="Contact" pattern="[7-9][0-9]{9}" title="" required>
                    <span class="error"></span>
              </div>
                <div class="form-group">
                  
                  <input type="text" name="city" class="form-control  " placeholder="City">
              </div>
              <div class="form-group">
  
  <textarea class="form-control" rows="5" placeholder="Address" name="add"></textarea>
</div>
        
                  
           <div class="form-group">
            <p> <button type="submit" class="btn btn-primary" data-dismiss="modal">Submit</button></p>
           </div>
                  
          </form>
        
              </div>
          </div>    
      
          
</div>    
        

</div>
</div>
   
<?php
   include 'MYProject/includes/footer.php';
        ?>

