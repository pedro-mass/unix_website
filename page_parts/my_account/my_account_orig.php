	<div id="content_padding">
		<h1>Account</h1>
		<?php
			// Check to see if the user is already logged in		
			if(isset($_COOKIE['username1'])){ //check to see if user is logged in
				getInfo();
			}
			// Function gathers and displays the user's infor
			function getInfo(){
				// Connect and select the Unix database
				// if connection fails, the program fails.	
				include('db_connect.php');
				
				
				// create the query
				$query="SELECT * FROM users WHERE username='".$_COOKIE['username1']."'";
				// run the query
				$userRes=mysql_query($query);
				// echo the results
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
			// Check if the user is logged in
			if(isset($_COOKIE['username1'])){
				// setup some link variables
				$href="welcome.php?page=page_parts/my_account/logout.php&side=tutorial";
				$onclick="swapMain('page_parts/my_account/logout.php');";
				// create a link
				echo '<a href="'.$href.'" onclick="'.$onclick.'">Logout</a>';
			}
			else{
				$href="welcome.php?page=page_parts/my_account/accountlogin.php&side=tutorial";
				$onclick="swapMain('page_parts/my_account/accountlogin.php');";
				echo '<a href="'.$href.'" onclick="'.$onclick.'">Login</a>';
				
				echo"<br />";
				
				$href="/page_parts/my_account/accounts.php";
				$onclick="window.location = '/page_parts/my_account/accounts.php';";
				echo '<a href="'.$href.'" onclick="'.$onclick.'">Register</a>';
			}
		?>
	</div>