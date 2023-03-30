function validateForm() {
	var name = document.getElementById("name").value;
	var email = document.getElementById("email").value;
	var phone = document.getElementById("phone").value;
	var error = "";
	var namePattern = /^[A-Za-z ]+$/;
	var phonePattern = /^[0-9]{3}-[0-9]{3}-[0-9]{4}$/;

	if (!namePattern.test(name)) {
		error += "Invalid name format. ";
	}

	if (!validateEmail(email)) {
		error += "Invalid email format. ";
	}

	if (phone !== "" && !phonePattern.test(phone)) {
		error += "Invalid phone format. ";
	}

	if (error !== "") {
		alert(error);
		return false;
	}
}

function validateEmail(email) {
	var emailPattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
	if (emailPattern.test(email)) {
		return true;
	} else {
		return false;
	}
}

