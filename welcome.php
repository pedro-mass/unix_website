<?php include_once('page_parts/header/doctype.php') ?>
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>	
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>409 | Group Project | team SU</title>
		<!-- Bring in the CSS links -->
		<?php include_once('page_parts/header/css_include.php'); ?>
		<!-- Bring in the javascript links -->
		<?php include_once('page_parts/header/javascript_include.php'); ?>
	</head>
	<body onload="stripATags()">
		<div id='wrapper'>
			<!-- Bring in the header -->
			<?php include_once('page_parts/header/header.php') ?>
		
			<div id='main'><div id='main_wrapper'>		
				<div id='content'>
					<!-- Bring in the local nav -->
					<?php include_once('page_parts/nav/local_nav.php') ?>

					<div id='content_target'>
						<!-- Bring in the home landing page -->
						<?php 
							$pageName = 'page_parts/home/home.php';
							if (isset($_GET['page'])){
								$pageName =$_GET['page'];
							}
							include_once($pageName) 
						?>
					</div>					
				</div>
				
				<!-- Bring in the sidebar -->
				<?php include_once('page_parts/side_bar/side_bar.php') ?>
				
			</div></div>

		</div>

	</body>
</html>