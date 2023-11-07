const form = document.getElementById('register-form');
const username = document.getElementById('username');
const email = document.getElementById('email');
const password = document.getElementById('pwd');

form.addEventListener('submit', e => {
    e.preventDefault(); 

	if (checkInputs()) {
        form.submit(); 
    }
});
function checkInputs() {
	const usernameValue = username.value.trim();
	const emailValue = email.value.trim();
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
	
	if(emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
		isValid = false;
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
		isValid = false;
	} else {
		setSuccessFor(email);
	}
	
	if(passwordValue === '') {
		setErrorFor(password, 'Password cannot be blank');
		isValid = false;
	} else  if(!isPassword(passwordValue)){
		setErrorFor(password, 'Password does not meet the requirements');
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
	
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}

function isPassword(password) {
	return /^(?=.*\d)(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z]).{8,}$/.test(password);
}