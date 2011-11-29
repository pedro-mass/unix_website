<?php 
<<<<<<< HEAD
	// include_once('page_parts/header_parts/doctype.php');
	include('page_parts/header_parts/doctype.php'); 
?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>	
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>409 | Group Project | team SU</title>
		<!-- Bring in the CSS links -->
		<?php include_once('page_parts/header_parts/css_include.php'); ?>
		<!-- Bring in the javascript links -->
		<?php include_once('page_parts/header_parts/javascript_include.php'); ?>
	</head>
	<body onload="page_init()">
		<div id='wrapper'>
			<!-- Bring in the header -->
			<?php include_once('page_parts/header.php'); ?>
		
			<div id='main'><div id='main_wrapper'>		
				<div id='content'>
					<!-- Bring in the local nav -->
					<?php include_once('page_parts/nav/local_nav.php'); ?>

					<div id='content_target'>						
						<!-- Bring in the terminal -->
						<!-- accomplished in onload of the body, via a page_init()
							which is located in page_setup.js
						-->
						<!-- <div id="terminal"></div> -->
						
						<!-- Bring in the home landing page -->
						<div id='content_target_inner'>
							<?php 
								$pageName = 'page_parts/home/home.php';
=======
	// Bring in the beginning section template
	include('/page_parts/header_parts/beginning.php'); 
?>

<!--  Content Section -->
							<?php 
								$pageName = '/page_parts/home/home.php';
>>>>>>> 28aabe65ce378ded4cc7b299673ea56f1d085d71
								if (isset($_GET['page'])){
									$pageName =$_GET['page'];
								}
								include_once($pageName); 
							?>
<<<<<<< HEAD
						</div>
						
						<!-- Bring in the terminal -->
						<!-- accomplished in onload of the body, via a page_init()
							which is located in page_setup.js
						-->
						<div id="terminal"></div>
					</div>					
				</div>
				
				<!-- Bring in the sidebar -->
				<?php include_once('page_parts/side_bar/side_bar.php') ?>
				
			</div></div>

		</div>

	</body>
</html>
=======
<!--  Content Section -->							

<?php 
	// Bring in the end section template
	include('/page_parts/header_parts/end.php'); 
?>
>>>>>>> 28aabe65ce378ded4cc7b299673ea56f1d085d71
