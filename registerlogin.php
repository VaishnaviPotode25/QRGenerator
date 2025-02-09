<?php
 session_start();
include("connect.php");
if($_SERVER['REQUEST_METHOD']=="POST")
{
    $name=$_POST['username'];
    $uemail=$_POST['email'];
    $pass=$_POST['Pass'];

    if(!empty($name) && !empty($uemail) && !empty($pass))
    {
        $query="INSERT INTO clonelogin(Username,Email,Pass) VALUES('$name','$uemail','$pass')";

        mysqli_query($con,$query);

        echo "<script type='text/javascript'> alert('Successfully register')</script>";
    }
    else{
        echo "<script type='text/javascript'> alert('Error')</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register form for Qr Code Generator</title>
    <link rel="stylesheet" href="registerstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
<form  method="post">
<h1>Register</h1>

<div class="input-box">
<input type="text" placeholder="Username" name="username" required>
<i class='bx bxs-user'></i>
</div>

<div class="input-box">
    <input type="email" placeholder="Email" id="email" name="email" required>
    <!-- <box-icon name='envelope' ></box-icon> -->
    <!-- <box-icon name='gmail' type='logo' ></box-icon> -->
    <i class='bx bxs-envelope'></i>
    <!-- <box-icon name="rocket"></box-icon> -->
    <!-- <box-icon type="solid" name="hot"></box-icon> -->
    </div>

<div class="input-box">
    <input  type="password" placeholder="Password" name="Pass" required>
    <i class='bx bxs-lock-alt'></i>
</div>

<div class="remember-forgot">
<label>
    <input type="checkbox">Remember me
</label>
<!-- <a href="#">Forgot password</a> -->
</div>
<input type="submit" class="btn" name="register" value="Register">
<div class="register-link">
    <p>Already have an account?<a href="login.php">Login Now</a></p>
</div>
</form>


    </div>
</body>
</html>

