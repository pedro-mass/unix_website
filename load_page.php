<?php
	
	//check to see if user is logged in
	if($_REQUEST['page'] == "page_parts/my_account/accounts.php"){
		if(isset($_REQUEST['username']) && !empty($_REQUEST['username'])){ 
			$expire=time()+60*60*24*30;
			setcookie(username1, $_REQUEST['username'], $expire);
			
			unset($_REQUEST['username']);
			//echo '<meta http-equiv="refresh" content="0;url=http://nova.it.rit.edu/~409_team_su/dev/_alpha/">';
		}
	}
	elseif($_REQUEST['page'] == "page_parts/my_account/logout.php") {
		$past = time() - 10;
		setcookie(username1, $_COOKIE[username], $past);
		
		unset($_COOKIE[username]);
		
		unset($_REQUEST['username']);
		//$_REQUEST['page'] = "welcome.php";
		//echo "<p>its here</p>";
		//echo '<meta http-equiv="refresh" content="0;url=http://nova.it.rit.edu/~409_team_su/dev/_alpha/">';
	}
	elseif($_REQUEST['page'] == "page_parts/my_account/accountlogin.php"){
		if($_REQUEST['username'] != "" && $_REQUEST['password'] != ""){
			$expire=time()+60*60*24*30;
			
			echo "<p>Request".$_REQUEST['username']."</p>";
			
			setcookie(username, $_REQUEST['username'], $expire);
			
			echo "<p>Coookie".$_COOKIE['username']."</p>";
			
			unset($_REQUEST['username']);
			echo "<p>REquest".$_REQUEST['username']."</p>";
		}
		else{
			
		}
	}
	


	// default page is our 404 page
	$pageName = 'page_parts/404.php';
	//echo $_REQUEST['username'];
	// check to see if any variables was passed
	// via GET
	if (count($_REQUEST)>0){							
		// Check if page variable was set
		if (isset($_REQUEST['page'])){
			// check if page value has .php extension
			if( pathinfo($_REQUEST['page'], PATHINFO_EXTENSION) == 'php' ){
				// get the specified name
				$pageName =$_REQUEST['page'];
			}									
		}
	}
	include($pageName);
?>