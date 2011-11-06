<div id="tutorial_title">
	<h2>UNIX Navigation</h2>
</div>

<div id="tutorial_container">
	<div id="tutorial_step_stages">
		<div class="stage">
			<?php include('step1.php') ?>
		</div>
		
		<div class="stage">
			<?php include('step1.php') ?>
		</div>
	
		<div class="stage">
			<?php include('step1.php') ?>
		</div>	
		
		<div class="stage">
			<?php include('step1.php') ?>
		</div>
		
		<div class="stage">
			<?php include('step1.php') ?>
		</div>
		
		<div class="stage">
			<?php include('quiz.php') ?>
		</div>				
	</div>
</div>

<div id="stage_controls">
	<span onclick="move1()">Part 1</span>
	<span onclick="move2()">Part 2</span>
	<span onclick="move3()">Part 3</span>
	<span onclick="move4()">Part 4</span>
	<span onclick="move5()">Part 5</span>
	<span onclick="move6()">Practice Quiz!</span>
</div>	

<DIV ID="termDiv"></DIV>













<!-- Had to use inline style because CSS couldnt find element and class-->
<div id="pageNav" class="pageNavSummary" style="margin:2px;">
	<a href='unix.php?page=page_parts/template.php' onclick="swapMainTerm('page_parts/template.php');">Previous</a> 
	| 
	<a href='unix.php?page=page_parts/template.php' onclick="swapMainTerm('page_parts/template.php');">Next</a>

</div>

