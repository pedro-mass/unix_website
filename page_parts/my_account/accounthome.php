	<h1>Account</h1>
	<?php
		if(isset($_COOKIE['username'])){ //check to see if user is logged in
			getInfo();
		}
		
		function getInfo(){
			/*	Display users info		 */
			include("/home/mike/Documents/dbconfig.php");
			
			$db_connect = mysql_connect($db_host,$db_user,$db_pswd); //hook up to my db
			if (!$db_connect) {
				echo "Error connecting to database";
				die();
			}
			
			//stop sql injection for $_GET
			
			//stop sql injection for $_POST
			
			mysql_select_db("useraccounts");
			
			$query="SELECT * FROM users WHERE username='".$_COOKIE['username']."'";
			$userRes=mysql_query($query);
			echo "<h3>Your Information:</h3>";
			echo "<p>Username: ".mysql_result($userRes,0,"username")."</p>";
			echo "<p>Password: ".mysql_result($userRes,0,"password")."</p>";
			echo "<p>Email: ".mysql_result($userRes,0,"email")."</p>";
			echo "<p>IP Address: ".mysql_result($userRes,0,"ipaddress")."</p>";
			
			$query=	"SELECT quizgrades.quiz1 ".
					"FROM users, quizgrades ".
					"WHERE users.ID = quizgrades.ID ".
					"AND users.username='".$_COOKIE['username']."'";
			
			$results=mysql_query($query);
			
			if(mysql_num_rows($results) != 0 && mysql_result($results,0,"quiz1") != -1){
				$grade=mysql_result($results,0,"quiz1");
				echo "<p>Quiz 1 Grade: ".$grade."%</p>";
			}
		}
	?>
	
	<?php
		/*function clearCookie(){
			$past = time() - 10;
			setcookie(username, $_COOKIE[username], $past);
			return "index.php";
		}*/
		
		if(isset($_COOKIE['username'])){
			echo '<a href="logout.php">Logout</a>';
		}
		else{
			echo '<a href="accountlogin.php">Login</a> ';
			echo '<a href="accounts.php">Register</a>';
		}
	?>