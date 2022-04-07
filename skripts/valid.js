function Validate()
{
    var form =document.getElementById('form');
    var username =document.getElementById('username');
    var email =document.getElementById('email');
    var pass =document.getElementById('pass');
    var passc =document.getElementById('passc');

    if( username.value.length < 5){
        setErrorFor(username, 'Username need to be at least 5 characters long');
        return false;
    }
    else{
        setSuccessFor(username);
    }

    if (!isEmail(email.value)) {
		setErrorFor(email, 'Not a valid email');
        return false;
	} else {
		setSuccessFor(email);
	}

    if( pass.value.length < 6){
        setErrorFor(pass, 'Username need to be at least 6 characters long');
        return false;
    }
    else{
        setSuccessFor(pass);
    }

	if(pass.value !== passc.value) {
		setErrorFor(passc, 'Passwords does not match');
        return false;
	}  else{
		setSuccessFor(passc);
        return true;
	}


}

function setErrorFor(input, message) {
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');

    small.innerText = message;

    formControl.className = 'form-control error';
}


function setSuccessFor(input) {
    const formControl = input.parentElement;
    formControl.className = 'form-control success';
}

function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}