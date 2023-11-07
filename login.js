const form = document.getElementById('login-form');
const username = document.getElementById('username');
const password = document.getElementById('pwd');

form.addEventListener('submit', e => {
    e.preventDefault();
    
    if (checkInputs()) {
        form.submit(); 
    }
});

function checkInputs() {
    const usernameValue = username.value.trim();
    const passwordValue = password.value.trim();
    let isValid = true;

    if(usernameValue === '') {
        setErrorFor(username, 'Username cannot be blank');
        isValid = false;
    } else if (usernameValue.length < 5){
        setErrorFor(username, 'Username must have at least 5 characters');
        isValid = false;
    } else {
        setSuccessFor(username);
    }

    if(passwordValue === '') {
        setErrorFor(password, 'Password cannot be blank');
        isValid = false;
    } else {
        setSuccessFor(password);
    }

    return isValid; 
}

function setErrorFor(input, message) {
    const inputContainer = input.parentElement;
    const small = inputContainer.querySelector('small');
    inputContainer.className = 'input-container error';
    small.innerText = message;
}

function setSuccessFor(input) {
    const inputContainer = input.parentElement;
    inputContainer.className = 'input-container success';
}
