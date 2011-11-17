		function validateForm(form){
			var uName = form.username.value;
			var pWord = form.password.value;
			
			if (uName === "" || uName == null){
				alert("Fill in the user name!");
				return false;
			}
			if (pWord === "" || pWord == null){
				alert("Fill in the password!");
				return false;
			}
			return true;
		}