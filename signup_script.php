<?php
require 'connection.php';
$nameerr=$emailerr=$passerr=$contacterr="";
$contact=mysqli_real_escape_string($conn,$_POST['contact']);    
$city=mysqli_real_escape_string($conn,$_POST['city']);
$address=mysqli_real_escape_string($conn,$_POST['add']);


$regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';

$email=$_POST['email'];  
$pass=mysqli_real_escape_string($conn,$_POST['pass']);
$pass=md5($pass);
if(!preg_match($regex, $email))
{
    header('location:signup.php?email_error=enter correct email');
}

else
{
  if (empty($_POST['name'])) {
         header('location:signup.php?name_error=Field cannot be empty');
     }
 else {
         $name= mysqli_real_escape_string($conn,$_POST['name']);
     
   
  $sql1="select email_id from users where email_id='$email';";
   $value=mysqli_query($conn,$sql1) or die(mysqli_error($conn));
   $row = mysqli_fetch_array($value);
   
if($row['email_id']==$email)
{
    header('location:signup.php?email_error=This email already exist');
   
    
}
 
    $sql2="Insert into users(name,email_id,pass,contact,city,address)values('$name','$email','$pass',$contact,'$city','$address')";
    $retval = mysqli_query($conn,$sql2 );
    if(!$retval)
{
	die('error' .mysqli_error($conn));
}
else
{
	header('location:index.php');	
}


}
}
?>