
						<h2>File Manipulation</h2>
						<h3>Remove (rm/rmdir)</h3>

						<p>
							Deleting/Removing a file and a directory are two 
							separate commands. This is done on purpose.
							<br /><br />
							Since file extensions are not required when naming a 
							file, getting a listing of files can be misleading.
							<br /><br />
							Using ls, you could see a listing of:<br />
							docs                -which is a directory<br />
							welcome        		-php file
							<br /><br />
							This lack of distinction could be troublesome if you 
							think you are deleting a file, when it really is a 
							directory that contains all of your life's work.
							<br /><br />
							To protect yourself, Unix has divided the task of 
							deletion to two separate commands.
							<br /><br />
							One for deleting a file:<br />
							rm filename 
							<br /><br />
							Another for deleting a directory<br />
							rmdir directory
							<br /><br />
							Then when you think you are just deleting a file, 
							by using rm, it will warn you that it is not a file 
							but a directory. Thus preventing you from shooting 
							yourself in the foot and deleting more than you 
							intended.
							<br /><br />
							<em>Note: In order to delete a directory, that directory 
							must first be empty. Otherwise UNIX will not let you 
							delete it. (how would you delete all files within a 
							directory?)</em>
							<br /><br />
							Question: How would delete all files with the .tmp 
							extension?<br />
							Answer: rm *.txt

							<div id="pageNav">
								<a href='unix.php?page=page_parts/tutorials/beginner/file_manip_move.php&side=tutorial' onclick="swapMainTerm('page_parts/tutorials/beginner/file_manip_move.php');">Previous </a> 
								 |  
								<a href='unix.php?page=page_parts/tutorials/summaries/file_manip_summary.php&side=tutorial' onclick="swapMainTerm('page_parts/tutorials/summaries/file_manip_summary.php');"> Next</a>
							</div>
						</p>
					