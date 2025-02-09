<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR code Generator</title>
    <link rel="stylesheet" href="Qrstyles.css">

</head>
<body>
    
    <div class="container">
        <p><h1><b>Enter your text or URL</b></h1></p>
        <input type="text" placeholder="Text or URL" id="qrText">
        <div id="imgBox">
            <img src="" id="qrImage">
        </div>
        <button onclick="generateQR()"><h3><b>Generate QR Code</b></h3></button>
    </div>
    <script>
        let imgBox=document.getElementById("imgBox");
        let qrImage=document.getElementById("qrImage");
        let qrText=document.getElementById("qrText");
function generateQR(){
    if(qrText.value.length>0)
{
    qrImage.src="https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=" + qrText.value;
    imgBox.classList.add("show-img");
}
 else{
    qrText.classList.add('error');
    setTimeout(() => {
        qrText.classList.remove('error');
    }, 1000);
 }   
}
    </script>

    <form>
    <?php
    include("logout.php");
    ?>
    <button type="submit" name="btn"><a href="login.php">Logout</a></button>
    </form>
    
</body>
</html>




