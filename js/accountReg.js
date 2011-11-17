function validateForm(form){
	var uName = form.username.value;
	var pWord = form.password.value;
	var email = form.email.value;
	
	if (uName === "" || uName == null){
		alert("Fill in the user name!");
		return false;
	}
	if (pWord === "" || pWord == null){
		alert("Fill in the password!");
		return false;
	}
	if (email === "" || email == null){
		alert("Fill in the email!");
		return false;
	}
	if (pWord.length < 5)
	{
		alert("Your password is not long enough!");
		return false;
	}
	return true;
}