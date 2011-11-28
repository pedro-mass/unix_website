<?php 
	$result;
	$base_url;


	if(isset($_POST['email'])){
		submit();
	}
	
	function submit(){
		// Connect and select the Unix database
		// if connection fails, the program fails.	
		include('/sql/db_connect.php');
		
		$result = "";
		
		// create the query
		$query="select * from users where email='$_POST[email]'";
echo "<p>Query1: ".$query;		
		
		// run the query
		$emailRes=mysql_query($query);
echo "<br />result: ".$emailRes;		
echo "<br />results:".mysql_num_rows($emailRes)."</p>";

		
		// create another query
		$query="SELECT * FROM users WHERE username='$_POST[username]'";
echo "<p>Query2: ".$query;

		// run the query
		$userRes=mysql_query($query);	
echo " results:".mysql_num_rows($userRes)."</p>";
		
		// show some feedback	
		$result .= "<p>query has been run</p>";
		// check to see if we got any results back
		if ((mysql_num_rows($emailRes) == 0) || (mysql_num_rows($userRes) == 0)){
			// add user to the database
			mysql_query("INSERT INTO users (username, password, email, ipaddress) VALUES ('$_POST[username]','$_POST[password]','$_POST[email]','$_SERVER[REMOTE_ADDR]')");
			
			// setup a cookie to keep track if user is logged in
			
			// setup an expiration date for the cookie
			$expire=time()+60*60*24*30;
	
			// set the cookie for the username
			setcookie("username1", $_POST["username"],$expire);
			
			//$_REQUEST['409_team_su_username'] = $_POST[username];
			//header('Location: http://nova.it.rit.edu/~409_team_su/dev/_alpha');
		}
		else{
			$result = "<p>This email address or username already has an account.</p>";
		}
		
	}
?>	

<?php 
	// include_once('page_parts/header_parts/doctype.php');
	include('../../page_parts/header_parts/doctype.php'); 
?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>	
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>409 | Group Project | team SU</title>
		<!-- Bring in the CSS links -->
		<?php include_once('../../page_parts/header_parts/css_include.php'); ?>
		<!-- Bring in the javascript links -->
		<?php include_once('../../page_parts/header_parts/javascript_include.php'); ?>
	</head>
	<body onload="page_init()">
		<div id='wrapper'>
			<!-- Bring in the header -->
			<?php include_once('../../page_parts/header.php'); ?>
		
			<div id='main'><div id='main_wrapper'>		
				<div id='content'>
					<!-- Bring in the local nav -->
					<?php include_once('../../page_parts/nav/local_nav.php'); ?>

					<div id='content_target'>						
						
						<!-- Bring in the home landing page -->
						<div id='content_target_inner'>
							<?php 
								// check if the email is set
								if(isset($_POST['email']) && isset($result)){
									// echo out the result from the registration
									echo $result;	
								} else{
									include('accounts_registration_form.php');
								}
							?>
						</div>
						
						<div id="terminal"></div>
					</div>					
				</div>
				
				<!-- Bring in the sidebar -->
				<?php include_once('../../page_parts/side_bar/side_bar.php') ?>
				
			</div></div>

		</div>

	</body>
</html>

