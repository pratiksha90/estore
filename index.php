  <?php
   require 'MYProject/public_html/main.html';
        ?>    
  <?php
   require 'MYProject/includes/header.php';
        ?>
<?php
session_start();  
if(isset($_SESSION["email"]))
{
    header('location:home.php');	
}

?>
        
    <content>
        <div class="container" >
            <div class="jumbotron  text-center text-danger" style="background-image: url('image/index.jpg')">
                      
                      <h2 class="text-center text-danger">Welcome to MOBILE E-STORE</h2>
                      <a href="#index"><input type="button" value="click me" class="btn btn-default "></a>
             </div>
        </div>
             <div class="container " >
                 
              <div class="panel panel-default">
    <div class="panel-body" id="index">
  
            <div class="row" style="padding-top: 4px">
                
                    <div class="col-sm-4">
                        <div class="caption">
                            <h4>Samsung</h4>
                        </div>
                        <div class="thumbnail">
                            <img src="image/img1.jpg" class="img-responsive">
                        </div>
                        <div>
                            <a data-toggle="modal" data-target="#myModal">  <input type="button" value="Order Now" class="btn btn-primary"></a>
                        </div>
                        
                    </div>
                
                <div class="col-sm-4">
                    <div class="caption">
                            <h4>Moto G</h4>
                        </div>
                        <a href="" class="thumbnail">
                            <img src="image/img2.jpg">
                        </a>
                     <div>
                         <a data-toggle="modal" data-target="#myModal"> <input type="button" value="Order Now" class="btn btn-primary"></a>
                        </div>
                    </div>
                <div class="col-sm-4">
                    <div class="caption">
                            <h4>Redmi</h4>
                        </div>
                        <a href="" class="thumbnail">
                            <img src="image/img2.jpg">
                        </a>
                     <div>
                         <a data-toggle="modal" data-target="#myModal">  <input type="button" value="Order Now" class="btn btn-primary"></a>
                        </div>
                    </div>
            </div>
        <hr>
            <div class="row" style="padding-top: 4px">
                
                    <div class="col-sm-4">
                        <div class="caption">
                            <h4>Samsung</h4>
                        </div>
                        <div class="thumbnail">
                            <img src="image/img1.jpg" class="img-responsive">
                        </div>
                        <div>
                            <a data-toggle="modal" data-target="#myModal">  <input type="button" value="Order Now" class="btn btn-primary btn-lg"></a>
                        </div>
                        
                    </div>
                
                <div class="col-sm-4">
                    <div class="caption">
                            <h4>Moto G</h4>
                        </div>
                        <a href="" class="thumbnail">
                            <img src="image/img2.jpg">
                        </a>
                     <div>
                         <a data-toggle="modal" data-target="#myModal">  <input type="button" value="Order Now" class="btn btn-primary"></a>
                        </div>
                    </div>
                <div class="col-sm-4">
                    <div class="caption">
                            <h4>Redmi</h4>
                        </div>
                        <a href="" class="thumbnail">
                            <img src="image/img2.jpg">
                        </a>
                     <div>
                         <a data-toggle="modal" data-target="#myModal">  <input type="button" value="Order Now" class="btn btn-primary "></a>
                        </div>
                    </div>
            </div>
        </div>
              </div></div>
        <!-- Trigger the modal with a button -->

    </content>
<!-- Modal -->
<div id="login">
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">LOGIN</h4>
      </div>
      <div class="modal-body" id="login1">
          <p>Don't have an account? <a href="signup.php">Register</a></p>
          <div class="container">
              <div class="row">
                  <div class="col-md-6">
                      <form id="loginForm" name="login" role="form" method="post">
              <div class="form-group">
                  <input type="email"  class="form-control input-lg " placeholder="Email" id="email" name="email1">
              </div>
              <div class="form-group">
           <input type="password"  class="form-control input-lg " placeholder="Password" id="pass" name="pass1">
              </div>
           <div class="form-group">
               <p> <button type="submit" class="btn btn-primary" data-dismiss="modal" id="b1">Login</button></p>
               <div id="box"></div>
               <div id="error"></div>
           </div>
          </form>
              </div></div>
      </div>
          <div class="modal-footer"><a href="forgot.php">Forgot Password</a></div>
         
      
    </div>

  </div>
</div>
</div>    
</div>
    
         <?php
   include 'MYProject/includes/footer.php';
        ?>
    </body>
</html>
 <script>
                $(document).ready(function(){	
                    
	$("#b1").click(function(){
            var username=$('#email').val();
            var password=$('#pass').val();
         
        if($.trim(email).length > 0 && $.trim(pass).length > 0)
        {
             $.ajax({
		method: "POST",
		url: "login_script.php",
		cache:false,
		data: {username:username,password:password},
                
		success: function(data){
                    if(data)
                    {
                        $("body").load("home.php").hide().fadeIn(1500)
                       
                    }
                    else
                    {
                        
                        $("#b1").val("Login");
			$("#error").html('<span>Username or Password invalid</span>'+password);
                    }
			
		},
		error: function(){
			alert("Error");
		}
	});
        }
            
                
            });
                
	});


    </script>