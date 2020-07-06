function validateForm() {
	var uname = document.enquiries.userid;

	var uid = document.enquiries.userid;
	var phone = document.enquiries.phone;
	var email = document.enquiries.email;
	var enquiries = document.enquiries.enquiries;

	var check_letter_regex = /^[A-Za-z]+$/;
	var numbers = /^[0-9]+$/;
	var emails_fmt = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

	if (!uname.value.match(check_letter_regex)) {
		alert(
			" Name must have alphabet characters only and it should not be empty."
		);
		uname.focus();
	} else if (!phone.value.match(numbers)) {
		alert("phone number must have number & the field cannot be empyty.");
		phone.focus();
	} else if (!email.value.match(emails_fmt)) {
		alert("Please enter a valid email");
		email.focus();
		return false;
	} else {
		alert("Successfully! form has been submitted.");
	}
}
function submitForm() {
	console.log("Successfully! form has been submitted.");
}
