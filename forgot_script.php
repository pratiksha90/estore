
<?php
   require 'connection.php';
   require_once 'phpmailer/PHPMailerAutoload.php';
   
   $email=mysqli_real_escape_string($conn,$_POST['email']);
  
   
   if($email!="")
   {
   
    
   
       
           $sql1="select * from users where email_id='".$email."'";
           $value=mysqli_query($conn,$sql1);
           if(mysqli_num_rows($value)>0)
           {
           $row= mysqli_fetch_array($value);
           
           $values=$row['pass'];
           //$values=md5($values);
           
            }
         $mail = new PHPMailer;
         $mail->IsSMTP();

         $mail->SMTPDebug  = 4;  
         $mail->SMTPAuth   = TRUE;
         $mail->SMTPSecure = "tls";
         $mail->Port       = 587;
         $mail->Host       = "smtp.gmail.com";
         $mail->Username   = "//root user";
         $mail->Password   = "root password";

         $mail->IsHTML(true);
         $mail->AddAddress($email);
         //$mail->SetFrom("no-reply@howcode.org");
         //$mail->AddReplyTo("reply-to-email", "reply-to-name");
         //$mail->AddCC("cc-recipient-email", "cc-recipient-name");
         $mail->Subject = "Password Recovery";

         $mail->Body='Password is '.$values.'<br>Change the password after login ';
         $mail->Send(); 
         if(!$mail->Send()) {
           echo "Error while sending Email.";
           var_dump($mail);
         } else {
             header('location:forgot.php?msg=Check your email');
          // echo "Email sent successfully";
         }




    }

    
    else
    {
           echo '<script>alert("Field cannot be empty")</script>';
           echo '<script>window.location.assign("forgot.php")</script>';
    }
?>


