const form = document.getElementById('form');
const username = document.getElementById('username');
const firstName = document.getElementById('name');
const famName = document.getElementById('famname');
const email = document.getElementById('email');
const pass = document.getElementById('pass');
const passConfirm = document.getElementById('passconfirm');

document.getElementById("button").addEventListener('click', e => {
	e.preventDefault();
	checkInputs();
});

function checkInputs() {
	// trim to remove the whitespaces
	const usernameValue = username.value.trim();
    const firstNameValue = firstName.value.trim();
    const famNameValue = famName.value.trim();
	const emailValue = email.value.trim();
	var passValue = pass.value.trim();
	const passConfirmValue = passConfirm.value.trim();
	
	if(usernameValue === '') {
		setErrorFor(username, 'Username cannot be blank');
	} else {
		setSuccessFor(username);
	}
    if(firstNameValue === '') {
		setErrorFor(firstName, 'First name cannot be blank');
	} else {
		setSuccessFor(firstName);
	}
    if(famNameValue === '') {
		setErrorFor(famName, 'Family name cannot be blank');
	} else {
		setSuccessFor(famName);
	}
	
	if(emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
	} else {
		setSuccessFor(email);
	}
	
	if(passValue === '') {
		setErrorFor(pass, 'Password cannot be blank');
	} else if(!isValidPassword(passValue)) {
        setErrorFor(pass, 'Password must contain at least 8 symbols');
    } else {
		setSuccessFor(pass);
	}
	
	if(passConfirmValue === '') {
		setErrorFor(passConfirm, 'Confirm password cannot be blank');
	} else if(passValue !== passConfirmValue) {
		setErrorFor(passConfirm, 'Passwords does not match');
	} else{
		setSuccessFor(passConfirm);
	}
}

function setErrorFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setSuccessFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}
	
function isValidPassword(pass){
    if(pass.length<8) {
        return false;
    }
    return true;
}
function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}