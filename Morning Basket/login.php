

<?php
$err=$_GET['error'];

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Login Page 
        </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        
    </head>
    <style>

    </style>
    <body>
    

        <div class="loginbox">
            <img src="avatarnew.jpg" height="100" width="100"class="avatar">
<h1>Login Here</h1>
<h1 style="color:red;"><?php echo $err; ?> </h1>
<form action="login phpcoe.php" method="post">
    <p>Email-id</p>
    <input type="email" name="email" placeholder="Enter your Email-id">
    <p>Password</p>
    <input type="password" name="password" placeholder="Enter Your password">
    <input type="submit" name="enter" value="Login" ><br>
    <a href="#">Forgot Your Password</a><br>
    <a href="Signup.php">Signup</a>
</form>
        </div>

    </body>
</html>