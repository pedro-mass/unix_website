<div id="content_padding">
	<h2>Register an Account</h2>
	
	<form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validateForm(this)">
		User Name: <input type="text" name="username"/><br/>
		Password: <input type="password" name="password"/> Password must be at least 5 char long<br/>
		Email: <input type="email" name="email"/><br/>
		<input name="page" value="page_parts/my_account/accounts.php" style="visibility:hidden;"/>
		<input type="submit" value="Submit"/>
	</form>
</div>