<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
$err="";
  include 'parts/db.php';
$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
$cpassowrd = $_POST["cpassword"];
$dob = $_POST["dob"];
$address = $_POST["address"];
$mobileno = $_POST["mobileno"];
$exists=false;
if(($password == $cpassowrd) && $exists == false){
  $sql = "INSERT INTO `userdetails` ( `Name`, `Emailid`, `password`, `date of birth`, `address`,`mobileno`,`dt`) VALUES ( '$name', '$email', '$password', '$dob', '$address','$mobileno', current_timestamp())";
$result = mysqli_query($conn, $sql); 
if($result){
    header("Location: login.html");
}
else
{
    echo "not inserted".mysqli_error($conn);
}

}

}

?>
