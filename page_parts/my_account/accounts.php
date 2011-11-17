	<div id="content_padding">
		<h2>Register an Account</h2>
		
		<?php 
			if(isset($_POST['email'])){
				submit();
			}
			
			function submit(){
				$db_host="localhost";
				$db_user="409_team_su";
				$db_pswd="fr1end";
				
				$db_connect = mysql_connect($db_host,$db_user,$db_pswd); //hook up to my db
				if (!$db_connect) {
					echo "Error connecting to database";
					die();
				}
				
				//stop sql injection for $_GET
				
				//stop sql injection for $_POST
				
				mysql_select_db("409_team_su");
				
				$query="SELECT * FROM users WHERE email='$_POST[email]'";
				$emailRes=mysql_query($query);
				
				$query="SELECT * FROM users WHERE username='$_POST[username]'";
				$userRes=mysql_query($query);
					
				echo "<p>query has been run</p>";
				if(mysql_num_rows($emailRes) == 0 || mysql_num_rows($userRes) == 0){
					mysql_query("INSERT INTO users (username, password, email, ipaddress) VALUES ('$_POST[username]','$_POST[password]','$_POST[email]','$_SERVER[REMOTE_ADDR]')");
					//$expire=time()+60*60*24*30;
			
					//setcookie(username1, $_POST[username],$expire);
					
					//$_REQUEST['409_team_su_username'] = $_POST[username];
					//header('Location: http://nova.it.rit.edu/~409_team_su/dev/_alpha/#');
				}
				else{
					echo "<p>This email address or username already has an account.</p>";
				}
				
			}

			//welcome.php?page=page_parts/my_account/accounts.php&side=tutorial
	//unix.php?page=page_parts/my_account/accounts.php&side=tutorial
		?>
		
		<form name="form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" onsubmit="return validateForm(this)">
			User Name: <input type="text" name="username"/><br/>
			Password: <input type="password" name="password"/> Password must be at least 5 char long<br/>
			Email: <input type="email" name="email"/><br/>
			<input name="page" value="page_parts/my_account/accounts.php" style="visibility:hidden;"/>
			<input type="submit" value="Submit"/>
		</form>
	</div>
