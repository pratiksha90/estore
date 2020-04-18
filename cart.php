<?php
session_start();
?>
<?php
   require 'MYProject/public_html/main.html';
        

   require 'MYProject/includes/header1.php';
   require 'connection.php';
   /*if(isset($_GET["shopping_cart"]))
{
    header('location:home.php');	
}*/
   
   if(isset($_POST["add_to_cart"]))
{
       
   if(isset($_SESSION["shopping_cart"]))
    {
       
        $GLOBALS['count']=$_SESSION['count'];
        $count=$GLOBALS['count']+1;
        $item_array=array(
            'item_id'=>$_GET['id'],
            'item_name'=>$_POST['hidden_name'],
            'item_price'=>$_POST['hidden_price'],
            'item_quantity'=>$_POST['quantity'],
        );
        foreach($_SESSION["shopping_cart"] as $keys=>$values1)
        {
        if($values1['item_id']==$item_array['item_id'])
        {
            unset($item_array);
            echo '<script>alert("Item already added");</script>';
            echo '<script>window.location="home.php";</script>';
           // break; 
        }
        }
        $_SESSION["shopping_cart"][$count]=$item_array;
        $_SESSION['count']=$count;
    }	
    else{
        $count=0;
        $item_array=array(
            'item_id'=>$_GET['id'],
            'item_name'=>$_POST['hidden_name'],
            'item_price'=>$_POST['hidden_price'],
            'item_quantity'=>$_POST['quantity'],
        );
        $_SESSION["shopping_cart"][$count]=$item_array;
        $_SESSION['count']=$count+1;
    }
    
}
if(isset($_GET['action']))
   {
       if($_GET['action']=='delete')
       {
            foreach($_SESSION["shopping_cart"] as $keys=>$values)
            {
                
                if($values['item_id']==$_GET['id'])
                {
                   
                    unset($_SESSION["shopping_cart"][$keys]);
                    echo '<script>alert("Item removed");</script>';
                    echo '<script>window.location="cart.php";</script>';
                }
            }
       }
   }
   
        ?>
<div class="float-right text-primary text-right" ><h4>Hello <?php echo $_SESSION["email"]; ?></h4></div>
<div class="container center-block">
    <div class="table-responsive">
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>Item Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Total</th>
        </tr
        <?php 
        
        if(!empty($_SESSION["shopping_cart"]))
        {
          //  $_SESSION["shopping_cart"]=array_merge($_SESSION["shopping_cart"]);   
            $total=0;
            foreach($_SESSION["shopping_cart"] as $keys=>$values)
            {
                ?>
                 <tr>
                     <th><?php echo $values['item_name'];?></th>
                     <th><?php echo $values['item_quantity'];?></th>
                     <th><?php echo $values['item_price'];?></th>
                     <th><?php echo number_format($values['item_quantity']*$values['item_price'])?></th>
                     <td><a href="cart.php?action=delete&id=<?php echo $values['item_id'];?>"><span class="text-danger">Remove</span></a></td>
                 </tr><?php
                $total=$total+($values["item_quantity"]*$values['item_price']);
        
            }?>
           <tr>
               <th colspan="3" align="right">Total</th>
               <th  align="right">Rs.<?php echo number_format($total,2);?></th>
           </tr>
          
           <?php
           
           $email=$_SESSION["email"];
           $items_id=$values['item_id'];
             $sql2="Insert into users_items(id,user_id,items_id,status)values(NULL,'$email',$items_id,'confirmed')";
            $retval = mysqli_query($conn,$sql2 );
            if(!$retval)
            {
                die('error' .mysqli_error($conn));
            }
           
        }
        ?>
    </table>
</div>
    <div style="margin-top: 10px;margin-bottom: 10px;">
    <form method="post" action="home.php">
        <a href="home.php"><input type="button" value="Add another item" name="back_to_cart" class="btn btn-danger"></a>
    <a href="success.php"><input type="button" value="Confirm" name="back_to_cart" class="btn btn-success"></a>
    </form>
</div>
</div>
