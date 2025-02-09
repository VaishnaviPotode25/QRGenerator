<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in successful</title>
    <link rel="stylesheet" href="Succestyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/771f99bd4a.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div>
         <i class="fas fa-cirle-check
         success-icon"></i>
         <!-- <box-icon type='solid' name='right-down-arrow-circle'></box-icon> -->
         <img src="Tick.jpg" height="200px" width="300px">
         <h1>Success!</h1>
        </div>
        <div>
         <p>You have been logged in successfully</p>
         <button><a href="QRindex.php"> Dismiss</a></button>
        </div>
        <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

   <?php
   include("connect.php");
   ?>
</body>
</html>