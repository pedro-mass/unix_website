<?php 
	// Bring in the beginning section template
	include('/page_parts/header_parts/beginning.php'); 
?>

<!--  Content Section -->
							<?php 
								$pageName = '/page_parts/home/home.php';
								if (isset($_GET['page'])){
									$pageName =$_GET['page'];
								}
								include_once($pageName); 
							?>
<!--  Content Section -->							
<?php 
	// Bring in the end section template
	include('/page_parts/header_parts/end.php'); 
?>