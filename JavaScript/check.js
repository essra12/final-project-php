const form = document.getElementById('form');
const username = document.getElementById('username');
const pass = document.getElementById("pass")



// Below function Executes on click of login button.
function check_Enter(){
var username = document.getElementById("username").value;
var pass = document.getElementById("pass").value;
if ( username == "admin" && pass == "1234"){
alert ("Login successfully");
window.location.href = "./student/edit profile.php"; // Redirecting to other page.
return false;
}
else{
    if(username==""){
        alert("please enter name  ");
        return false
        }
        else if(pass==""){
        alert("    please enter password ");
        return false
        }
}
}




