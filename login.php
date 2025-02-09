<?php
     session_start();
     include("connect.php");
     if($_SERVER['REQUEST_METHOD']=="POST")
     {
        $name=$_POST['username'];
        $pass=$_POST['Pass'];

        if(!empty($name) &&  !empty($pass))
        {
            $query="select * from clonelogin where Username='$name' limit 1";
            $result=mysqli_query($con,$query);

            if($result)
            {
                if($result && mysqli_num_rows($result) > 0)
                {
                    $user_data=mysqli_fetch_assoc($result);

                    if($user_data['Pass'] == $pass)
                    {
                        header("location:loginsuccess.php");
                        die;
                    }
                }
                else
                {
                    header("location:unsuccess.php");
                }
            }

        }
        else
        {
            header("location:unsuccess.php");
        }
     }
   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login form for Qr Code Generator</title>
    <link rel="stylesheet" href="loginstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
<form  method="post">
<h1>Login</h1>

<div class="input-box">
<input type="text" placeholder="Username" name="username" required>
<i class='bx bxs-user'></i>
</div>

<!-- <div class="input-box">
    <input type="email" placeholder="Email" name="email" required>
    <box-icon name='envelope' ></box-icon> -->
    <!-- <box-icon name='gmail' type='logo' ></box-icon>
    <i class='bx bxs-envelope'></i>
    <box-icon name="rocket"></box-icon>
    <box-icon type="solid" name="hot"></box-icon>
    </div> --> 

<div class="input-box">
    <input  type="password" placeholder="Password" name="Pass" required>
    <i class='bx bxs-lock-alt'></i>
</div>

<div class="remember-forgot">
<label>
    <input type="checkbox">Remember me
</label>
<a href="">Forgot password</a>
</div>

<input type="submit" name="btnlogin" class="btn" value="Login"> 
<div class="register-link">
    <p>Don't have account?<a href="registerlogin.php">Register</a></p>
</div>
</div>

<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>


</form>


    </div>
   

</body>
</html>

