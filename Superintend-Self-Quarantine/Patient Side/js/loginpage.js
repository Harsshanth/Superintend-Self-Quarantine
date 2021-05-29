function validate() 
{

    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    
    if (username===" "||password===" "){
        alert("Username or Password are empty");
    }
    else{
        alert("login Failed");
    }
    
}