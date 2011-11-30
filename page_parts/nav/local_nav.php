<?php
    $baseUrl = "/409_unix_site/";
?>

<div id='local_nav'>
	<ul>
		<li><a href="<?php echo $baseUrl ?>page_parts/index/main_index.php">index</a></li> 
		<li><a href='unix.php?page=page_parts/quizzes/main_quizzes.php&side=quiz' onclick="swapMultiple('page_parts/quizzes/main_quizzes.php','page_parts/side_bar/side_bar_quizzes.php');">quizzes</a></li>
		<li><a href='unix.php?page=page_parts/tutorials/main_tutorials.php&side=tutorials' onclick="swapMultiple('page_parts/tutorials/main_tutorials.php', 'page_parts/side_bar/side_bar_tutorials.php');">tutorials</a></li>
	</ul> 
</div>