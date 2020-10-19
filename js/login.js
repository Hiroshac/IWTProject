function validateForm() 
{
    var x = document.getElementById("email").value;
    var y = document.getElementById("password").value;
    
    if (x == "" || y == "") {
        alert("Email and Password fields cannot be empty!");
        return false;
    }
}