<?php

   require 'MYProject/public_html/main.html';
        

   require 'MYProject/includes/header.php';
   
        ?>
<div class="container">

<div style="">
    
<div class="col-sm-4 col-sm-offset-4 text-nowrap justify-content-center"> 
    <div class="panel panel-info">
        <div class="panel-heading">
    RECOVER PASSWORD        </div>
        <div class="panel-body">
         <form action="forgot_script.php" method="post" >
              <div class="form-group">
                  
                  <input type="Email" name="email" class="form-control " placeholder="Enter Email Id">
              </div>
             
                
                  
           <div class="form-group">
            <p> <button type="submit" class="btn btn-info">Submit</button></p>
           </div>
                  
          </form>
        </div>
    </div>   
<span class="error">*
    <?php 
             if(!isset($_GET['msg'])){            
                }
                 else{$error=$_GET['msg'];
                 echo $error;}?> </span>
             
</div>
    
</div>

</div>

