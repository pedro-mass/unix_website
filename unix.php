<?php include_once('page_parts/header_parts/doctype.php') ?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>	
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>409 | Group Project | team SU</title>
		<?php include_once('page_parts/header_parts/css_include.php'); ?>
		<!-- Bring in the javascript links -->
		<?php include_once('page_parts/header_parts/javascript_include.php'); ?>
	</head>
	</head>
	<body>
		<div id='wrapper'>
			<!-- Bring in the header -->
			<?php include_once('page_parts/header.php') ?>
		
			<div id='main'><div id='main_wrapper'>		
				<div id='content'>
					<!-- Bring in the local nav -->
					<?php include_once('page_parts/nav/local_nav.php') ?>

					<div id='content_target'>
						<!-- Bring in the home landing page -->
						<div id='content_target_inner'>
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
								include_once($pageName) 
							?>
						</div>
					</div>					
				</div>
				
				<!-- Bring in the sidebar -->
<!-- 				<?php include_once('page_parts/side_bar/side_bar.php') ?> -->
				
			</div></div>

		</div>

	</body>
</html>