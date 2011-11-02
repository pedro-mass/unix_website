<div id='content_target_inner'>
						<h1>Tutorial 1</h1>
						<ul class="accordian">
							<li id="tut1">
								<h2><a id="tut1link" href='#' onclick="listOpen('tut1','tut1link')">Level 1: Progress</a></h2>
								<ul>
									<li><a href="http://www.google.com/">Part 1</a></li>
									<li>Part 2</li>
									<li>Part 3</li>
								</ul>
							</li>
							   
							<li id="tut2">
								<h2><a id="tut2link" href='#' onclick="listOpen('tut2','tut2link')">Level 2: Progress</a></h2>
								<ul>
								<li>Part 1</li>
								<li>Part 2</li>
								</ul>
							</li>
							   
							<li id="tut3">
								<h2><a id="tut3link" href='#' onclick="listOpen('tut3','tut3link')">Level 3: Progress</a></h2>
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
							<a href='unix.php?page=page_parts/tutorials/' onclick="swapMain('page_parts/tutorials/summaries/file_manip_summary.php');">Previous</a> 
							| 
							<a href='unix.php?page=page_parts/quizzes/beginner/file_manip_quiz.php' onclick="addMultiple('page_parts/quizzes/beginner/file_manip_quiz.php','page_parts/side_bar_quizzes.php');">Quiz Time!</a>
			
						</div>
					</div