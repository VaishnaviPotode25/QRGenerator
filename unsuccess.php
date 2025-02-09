<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Unsuccessful</title>
    <link rel="stylesheet" href="unsuccestyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/771f99bd4a.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <div>
         <i class="fas fa-cirle-check
         success-icon"></i>
    <img src="Wrong.jpg" height="200px" width="300px">
         <h1>Unsuccess!</h1>
        </div>
        <div>
         <p>Wrong username or password</p>
         <button><a href="login.php">Dismiss</a></button>
        </div>

        <?php
   include("connect.php");
   ?>
</body>
</html>