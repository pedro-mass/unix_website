<h2>Welcome Guest</h2>
<ul class="accordian">
	<li id="tut1">
		<h2><a id="tut1link" href='#' onclick="listOpen('tut1','tut1link')">Beginner</a></h2>
		<ul>
			<li><a href='unix.php?page=page_parts/tutorials/beginner/file_manip_copy.php' onclick="swapMain('page_parts/tutorials/beginner/file_manip_copy.php');">Copy command</a></li>
			<li><a href='unix.php?page=page_parts/tutorials/beginner/file_manip_move.php' onclick="swapMain('page_parts/tutorials/beginner/file_manip_move.php');">Move command</a></li>
			<li><a href='unix.php?page=page_parts/tutorials/beginner/file_manip_remove.php' onclick="swapMain('page_parts/tutorials/beginner/file_manip_remove.php');">Remove command</a></li>
			<li><a href='unix.php?page=page_parts/tutorials/beginner/file_name_conventions.php' onclick="swapMain('page_parts/tutorials/beginner/file_name_conventions.php');">Name Conventions</a></li>
		</ul>
	</li>
	   
	<li id="tut2">
		<h2><a id="tut2link" href='#' onclick="listOpen('tut2','tut2link')">Intermediate</a></h2>
		<ul>
		<li>Part 1</li>
		<li>Part 2</li>
		</ul>
	</li>
	   
	<li id="tut3">
		<h2><a id="tut3link" href='#' onclick="listOpen('tut3','tut3link')">Advanced</a></h2>
		<ul>
			<li>Part 1</li>
			<li>Part 2</li>
			<li>Part 3</li>
			<li>Part 4</li>
		</ul>
	</li>
</ul>

<!-- Had to use inline style because CSS couldnt find element and class-->
<div id="pageNav" class="pageNavSummary" style="margin:2px;">
	<a href='unix.php?page=page_parts/tutorials/summaries/file_manip_summary.php' onclick="swapMainTerm('page_parts/tutorials/summaries/file_manip_summary.php', 'page_parts/tutorials/summaries/file_manip_summary.php');">Previous</a> 
	| 
	<a href='unix.php?page=page_parts/quizzes/beginner/file_manip_quiz.php' onclick="swapMultiple('page_parts/quizzes/beginner/file_manip_quiz.php','page_parts/side_bar/side_bar_quizzes.php');">Quiz Time!</a>

</div>
			