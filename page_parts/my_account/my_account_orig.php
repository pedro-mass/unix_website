	<div id="content_padding">
		<h1>Account</h1>
		<?php
			if(isset($_COOKIE['username1'])){ //check to see if user is logged in
				getInfo();
			}
			
			function getInfo(){
				/*	Display users info		 */
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
				
				$query="SELECT * FROM users WHERE username='".$_COOKIE['username1']."'";
				$userRes=mysql_query($query);
				echo "<h3>Your Information:</h3>";
				echo "<p>Username: ".mysql_result($userRes,0,"username")."</p>";
				echo "<p>Password: ".mysql_result($userRes,0,"password")."</p>";
				echo "<p>Email: ".mysql_result($userRes,0,"email")."</p>";
				echo "<p>IP Address: ".mysql_result($userRes,0,"ipaddress")."</p>";
				/*
				$query=	"SELECT quizgrades.quiz1 ".
						"FROM users, quizgrades ".
						"WHERE users.ID = quizgrades.ID ".
						"AND users.username='".$_COOKIE['username']."'";
				
				$results=mysql_query($query);
				
				if(mysql_num_rows($results) != 0 && mysql_result($results,0,"quiz1") != -1){
					$grade=mysql_result($results,0,"quiz1");
					echo "<p>Quiz 1 Grade: ".$grade."%</p>";
				}*/
			}
		?>
		
		<?php
			if(isset($_COOKIE['username1'])){
				$href="welcome.php?page=page_parts/my_account/logout.php&side=tutorial";
				$onclick="swapMain('page_parts/my_account/logout.php');";
				
				echo '<a href="'.$href.'" onclick="'.$onclick.'">Logout</a>';
			}
			else{
				$href="welcome.php?page=page_parts/my_account/accountlogin.php&side=tutorial";
				$onclick="swapMain('page_parts/my_account/accountlogin.php');";
				echo '<a href="'.$href.'" onclick="'.$onclick.'">Login</a>';
				
				echo"<br />";
				
				$href="welcome.php?page=page_parts/my_account/accounts.php&side=tutorial";
				$onclick="swapMain('page_parts/my_account/accounts.php');";
				echo '<a href="'.$href.'" onclick="'.$onclick.'">Register</a>';
			}
		?>
	</div>