<div id="content_padding">	
	<h2>Login</h2>
	
	<?php 
		if(isset($_POST['password'])){
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
			
			$query="SELECT password FROM users WHERE password='$_POST[password]'";
			$passRes=mysql_query($query);
			
			$query="SELECT username FROM users WHERE username='$_POST[username]'";
			$userRes=mysql_query($query);
				
			if(mysql_num_rows($passRes) == 0 || mysql_num_rows($userRes) == 0){
				echo "<p>The username or password is incorrect!</p>";
				$_POST['username']="";
				$_POST['password']="";
			}
			else{
				
				//echo "<p>Welcome ".mysql_result($userRes,0).".</p>";
				//$expire=time()+60*60*24*30;
				//setcookie(username, mysql_result($userRes,0),$expire);
				//header('Location: index.php');
			}
		}
	?>
	
	<form name="form" method="POST" action="<?php echo ($_SERVER['PHP_SELF']) ?>" onsubmit="return validateForm(this)">
		User Name: <input type="text" name="username"/><br/>
		Password: <input type="password" name="password"/><br/>
		<input name="page" value="page_parts/my_account/accountlogin.php" style="visibility:hidden;"/>
		<input type="submit" value="Submit"/>
	</form>
</div>
