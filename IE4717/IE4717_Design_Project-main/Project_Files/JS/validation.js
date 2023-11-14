function allLetters() {

    var name = document.getElementById("custName");
    var letters = /^[A-Za-z\s]+[A-Za-z]$/;

    if (name.value.match(letters)) {
        return true;
    } 
    else {
        alert("Name should only contain space and letters!");
        return false;
    }
}

function validateEmail() {

    var email = document.getElementById("custEmail");
    var characters = /^[A-Za-z0-9]+([\-\.\_]?[A-Za-z0-9]+)*@([a-z]+){1}([\.]?[a-z]+){0,2}\.([a-z]{2,3})$/;
    // for password ^[A-Z]{1}(?=.*?[A-Z])(?=.*?[0-9])(?=.*?[a-z])(?=.*?[!@#$%^&*]).{8,}$

    if (email.value.match(characters)) {
        return true;
    }
    else {
        alert("Email is invalid!");
        return false;
    }
} 

function allNumber() {
	
	var custNumber = document.getElementById("number");
	var number = /^[8-9]{1}([0-9]{7})+$/;
	
	if (custNumber.value.match(number)) {
        return true;
    }
    else {
        alert("Number is invalid!");
        return false;
    }
}

function validateInput() {

    var button = document.getElementById("Submit");
    var email = document.getElementById("custEmail");
    var name = document.getElementById("custName");

    var letters = /^[A-za-z\s]+$/;
    var characters = /^\w+([\-\.]?\w+)*@\w+([\.]?\w+)*\.([a-z]{2,3})$/;

    if (name.value.match(letters)) {
        if (email.value.match(characters)) {
			button.disabled = false;
				return true;
		} 
		else {
			button.disabled = true;
			return false;
		}
	} 
	else {
		button.disabled = true;
		return false;
	}
}

function validateContact() {

    var button = document.getElementById("Submit");
    var email = document.getElementById("custEmail");
    var name = document.getElementById("custName");
	var custNumber = document.getElementById("number");

    var letters = /^[A-za-z\s]+$/;
    var characters = /^\w+([\-\.]?\w+)*@\w+([\.]?\w+)*\.([a-z]{2,3})$/;
	var number = /^[8-9]{1}([0-9]{7})+$/;

    if (name.value.match(letters)) {
        if (email.value.match(characters)) {
			if (custNumber.value.match(number)) {
				button.disabled = false;
				return true;
			} 
			else {
				button.disabled = true;
				return false;
			}
		} 
		else {
			button.disabled = true;
			return false;
		}
	} 
	else {
		button.disabled = true;
		return false;
	}
}

