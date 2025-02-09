// Not in use

function func(){
    var user=document.getElementById("username").value;
    var pass=document.getElementById("password").value;
    if(user =='xyz' && pass=='123'){
        alert("Successful")
        window.location.assign("QRindex.html")
    }
    else{
        alert("Invalid Entry")
    }
}
