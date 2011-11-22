<div id="tutorial_title">
	<h2>In the file</h2>
</div>

<div id="tutorial_container">
	<div id="tutorial_step_stages">
		<div class="stage">
			<?php include('display_contents_step1.php') ?>
		</div>
		
		<div class="stage">
			<?php include('display_contents_step2.php') ?>
		</div>
	
		<div class="stage">
			<?php include('display_contents_step3.php') ?>
		</div>	
		
		<div class="stage">
			<?php include('display_contents_step4.php') ?>
		</div>
		
		<div class="stage">
			<?php include('search_contents_step1.php') ?>
		</div>
		
		<div class="stage">
			<?php include('search_contents_step2.php') ?>
		</div>
		
		<div class="stage">
			<?php include('quiz.php') ?>
		</div>				
	</div>
</div>

<div id="stage_controls">
	<span onclick="move1()">part 1</span>
	<span onclick="move2()">part 2</span>
	<span onclick="move3()">part 3</span>
	<span onclick="move4()">part 4</span>
	<span onclick="move5()">part 5</span>
	<span onclick="move6()">part 6</span>
	<span onclick="swapMain('page_parts/tutorials/intermediate/in_file/quiz.php');">Start Quiz</span>
</div>	


