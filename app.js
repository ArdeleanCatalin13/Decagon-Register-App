let emailField = document.getElementById("email");
let emailError = document.getElementById("email-error");

function validateEmail() {
    if(!emailField.value.match(/^[A-Za-z\._\-0-9]*[@][A-Za-z]*[\.][a-z]{2,4}$/)){
        emailError.innerHTML = "Please enter a valid email";
        emailField.style.borderColor = "red";
        return false;
    }

    emailError.innerHTML = "";
    emailField.style.borderColor = "green";

    return true;

}
