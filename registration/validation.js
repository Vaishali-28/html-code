const popup=document.getElementById("popup");
const fname=document.getElementById("Fullname");
const uname=document.getElementById("username");
const email=document.getElementById("email");
const phone=document.getElementById("phone_number");
const passd=document.getElementById("password");
const cpass=document.getElementById("confirm_password");

var fregex = /^[A-Za-z ]{3,30}$/;
var uregex = /^[0-9A-Za-z._%+-]{3,20}$/;
var eregex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
var pregex = /^[+]?[0-9]{1,13}$/;

function closePopup() {
    popup.style.display = "none";
}

function validForm() {
    if(!fregex.test(fname.value)){
        alert("Please provide minimum 3 to 30 characters alphabetical Full Name.");
        return false;
    }  
    if(!uregex.test(uname.value)){
        alert("Please provide a 3 to 20 characters alphabetical Username.");
        return false;
    }
    if(!eregex.test(email.value)){
        alert("You have not entered a valid Email.");
        return false;
    }
    if(!pregex.test(phone.value)){
        alert("You have not entered a valid Phone Number.");
        return false;
    }
    if(passd.value === "" || cpass.value === ""){
        alert("You have not entered a password")
        return false;
    }
    if(passd.value !== cpass.value){
        alert("The passwords do not Match.");
        return false;
    }else{
        popup.style.display="block";
        popup.classList.add("popup");
        return true;        
    }
}
