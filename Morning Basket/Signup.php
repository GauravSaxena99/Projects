

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>
            Sign-up Page 
        </title>
        <link rel="stylesheet" type="text/css">
        
    </head>
    <style>
        body{
    margin:0;
    padding:0;
    background: url('egg.jpg');
    background-size: cover;
    
    font-family:initial;

}
.signupbox{
    width:320px;
    height: 700px;
    background: rgb(128, 165, 136);
    color:rgb(255, 255, 255);
    top:50%;
    left:50%;
    position:absolute;
    transform: translate(-50%,-50%);
    box-sizing:border-box ;
    padding: 70px 30px;

}
.avatar{
    width:100px;
    height:100px;
    border-radius: 50%;
    position:absolute;
    top: -50px;
    left:calc(50% - 50px);
    }
h1{
    margin:0px;
    padding:10px;
    text-align: center;
    font-size: 24px;
}    
.signupbox p{
    margin: 0px;
    padding: 5px;
    font-weight:bold;

}
.signupbox input{
    width:100%;
    margin-bottom: 10px;

}
.signupbox input[type="text"], input[type="password"]
{
    border:none;
    border-bottom: 1px solid#fff;
    background: transparent;
    outline:none;
    height: 40px;
    COLOR:#fff;
    font-size: 16px;

}
.signupbox input[type="date"], input[type="email"]
{
    border:none;
    border-bottom: 1px solid#fff;
    background: transparent;
    outline:none;
    height: 40px;
    COLOR:#fff;
    font-size: 16px;

}
.signupbox input[type="submit"]
{
    border:none;
    outline: none;
    height: 49px;
    background: #446cc2;
    color:oldlace;
    font-size: 18px;
    border-radius: 10px;

}
.signupbox input[type="submit"]:hover
{
    cursor: pointer;
    background:darkgrey;
    color: #000;
}
.signupbox a{
    text-decoration: none;
    font-size: 14px;
    line-height: 20px;
    color:rgb(255, 255, 255);
}
.signupbox a:hover
{
    color: darkslategray;
}

    </style>
    <body>
  

        <div class="signupbox">
            <img src="avatarnew.jpg" height="100" width="100"class="avatar">
<h1>Sign-up Here</h1>
<form action="a.php" method="post">
    <p>Name</p>
    <input type="text" name="name" placeholder="Enter your Name">
    <p>Email-id</p>
    <input type="email" name="email" placeholder="Enter your Email-id">
    <p>Password</p>
    <input type="password" name="password" placeholder="Enter Your password" >
    <p>Confirm password</p>
    <input type="password" name="cpassword" placeholder="Confirm passowrd">
    <small>make sure to write same password</small>
    <p>Date of Birth</p>
    <input type="date" name="dob" placeholder="dd-mm-yyyy">
    <p>Address</p>
    <input type="text" name="address" placeholder="Enter your Address">
    <p>Mobile no</p>
    <input type="text" input type="text" name="mobileno" value="+91 &nbsp;"  placeholder="Enter your mobile no" maxlength="15"/>

    
    <input type="submit" name="submit" value="Login"><br>
    <input type="Reset" name="Reset" value="Reset"><br>

            </form>
           
        </div>

    </body>
</html>