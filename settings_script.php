<?php
session_start();
?>
<?php
   require 'connection.php';
   $old_pass=mysqli_real_escape_string($conn,$_POST['pass1']);
   $new_pass=mysqli_real_escape_string($conn,$_POST['pass2']);
   $confirm_pass=mysqli_real_escape_string($conn,$_POST['pass3']);
   
   if($old_pass!="" && $new_pass!="" && $confirm_pass!="")
   {
    $email=$_SESSION["email"];
    
    if($new_pass==$confirm_pass)
    {
       if($new_pass!=$old_pass)
       {
           $sql1="select * from users where email_id='".$email."'AND pass='".md5($old_pass)."'";
           $value=mysqli_query($conn,$sql1);
           $row = mysqli_num_rows($value);
           if($row >0)
           {
               $sql2="update users set pass='".md5($confirm_pass)."' where email_id='".$email."'"; 
               $value1=mysqli_query($conn,$sql2);
               $old_pass=="" && $new_pass=="" && $confirm_pass=="" ;
               
               session_destroy();
               echo '<script>alert("New password updated")</script>';
               echo '<script>window.location.assign("index.php")</script>';
              

            }
            else
            {
               echo '<script>alert("New password updated")</script>';
               echo '<script>window.location.assign("settings.php")</script>';
            }

       }
        else
        {
           echo '<script>alert("Old and new password cannot be same")</script>';
           echo '<script>window.location.assign("settings.php")</script>';
        }
    }
    else
        {
           echo '<script>alert("Confirm password does not match")</script>';
           echo '<script>window.location.assign("settings.php")</script>';
        }

    }
    else
    {
           echo '<script>alert("Field cannot be empty")</script>';
           echo '<script>window.location.assign("settings.php")</script>';
    }
?>
