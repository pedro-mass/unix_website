<?php
	// default page is our 404 page
	$pageName = 'page_parts/404.php';
	
	// check to see if any variables was passed
	// via GET
	if (count($_GET)>0){							
		// Check if page variable was set
		if (isset($_GET['page'])){
			// check if page value has .php extension
			if( pathinfo($_GET['page'], PATHINFO_EXTENSION) == 'php' ){
				// get the specified name
				$pageName =$_GET['page'];
			}									
		}
	}
	include($pageName);
?>