<?php
session_start();
   require 'MYProject/public_html/main.html';
        

   require 'MYProject/includes/header1.php';
   
        ?>
<div class="container">
<div class="float-right text-primary text-right" ><h4>Hello <?php echo $_SESSION["email"]; ?></h4></div>

<div class="row center-block">
    
<div class="col-sm-6 col-xs-offset-3 "> 
              
         <h3>CHANGE PASSWORD</h3>
      
         <form action="settings_script.php" method="post">
              <div class="form-group">
                  
                  <input type="password" name="pass1" class="form-control " placeholder="OLD PASSWORD">
              </div>
              <div class="form-group">
                  
           <input type="password" name="pass2" class="form-control  " placeholder="NEW PASSWORD">
              </div>
                <div class="form-group">
                  
                  <input type="password" name="pass3" class="form-control " placeholder="RETYPE PASSWORD">
              </div>
                
                  
           <div class="form-group">
            <p> <button type="submit" class="btn btn-primary">Submit</button></p>
           </div>
                  
          </form>
             

             
</div>
    
</div>
</div>