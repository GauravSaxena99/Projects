<?php
 include 'parts/db.php';
 
 $email=$_POST['email'];
 $password=$_POST['password'];
$sql="select * from userdetails where emailid='". $_POST['email'] ."' AND password='". $_POST['password'] ."'"; 
$result= mysqli_query($conn,$sql);
$num=mysqli_fetch_array($result);
if(!$num)
{
    header("Location: login.php?error='plz check your details'");
}
else{
    header("Location: homepage.html");
 
   

      }

    

?>