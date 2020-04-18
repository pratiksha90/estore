<?php
   require 'MYProject/public_html/main.html';
        

   require 'MYProject/includes/header1.php';
        ?>
<?php
session_start();  
if(!isset($_SESSION["email"]))
{
    header('location:index.php');	
}
require 'connection.php';


?>
    <content>
        <div class="float-right text-primary text-right" ><h4>Hello <?php echo $_SESSION["email"]; ?></h4></div>
             <div class="container" >
              <div class="panel panel-default">
    <div class="panel-body">
       <div class="row" style="padding-top: 4px"> 
  <?php
  $query="Select * from items order by id asc";
  $result= mysqli_query($conn,$query);
  if(mysqli_num_rows($result) > 0)
  {
      while($row= mysqli_fetch_array($result))
      {
             echo '
        
            <div class="col-sm-4">
            <form method="post" action="cart.php?add&id=' .$row["id"].'">
                        <div class="caption">
                            <h4>
                            ' .$row["name"].'
                            </h4>
                        </div>
                        <div class="thumbnail">
                         <img src="data:image/jpeg;base64,'.base64_encode($row["Image"]).'" class="img-responsive">
                        </div>
                        <div>
                            <h4>
                            '. $row["price"].'
                            </h4>
                            <input type="text" name="quantity" class="form-control" value="1">
                            <input type="hidden" name="hidden_name" value="' .$row["name"].'">
                            <input type="hidden" name="hidden_price" value="' .$row["price"].'">
                            <input type="submit" value="Order Now" name="add_to_cart" style="margin-top:5px" class="btn btn-success" >
                        </div>
            </form>            
                        
            </div>
 
        ';
        
      
  }
  }
  ?>
       </div>       
                
                                   
               
        </div>
              </div></div>
    
        <a href="home.php"></a>
    </content>