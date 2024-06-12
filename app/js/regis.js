function myFunction(){
    var eyeicon = document.getElementById ("eyeicon");
    var password = document.getElementById ("password");

    if (password.type === "password"){
        password.type = "text";
        eyeicon.src = "images/eye_open.png";
    }
    else{
        password.type = "password";
        eyeicon.src = "images/eye_close.png";
    }
}