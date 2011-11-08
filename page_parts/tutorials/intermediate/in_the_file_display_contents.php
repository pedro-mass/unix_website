
<h2>In the file: Displaying Contents of File</h2>
<h3>clear (clear screen)</h3>

<p>
	First and foremost, lets get comfortable with clearing the screen.
	<br /><br />
	To clear the screen:<br />
		clear		
	<br /><br />
	Clearing the screen removes all previous commands and results on the terminal screen and can allow you to focus on the new set of commands. It does not erase all previous commands, it just pushes the content up so the the only thing you see is the command prompt (can still scroll up to see previous commands).
	<br /><br />
	cat (concatenate)
	<br /><br />
	Displays the contents of the file on the screen on at once. Useful if the length of the content is shorter than the terminal. Otherwise, you’ll only catch the end of the file that fits on the screen.
	<br /><br />
	Instead use...
</p>

<h3>less</h3>
<p>
	This command writes out the content of the file, one page at a time. To go to the next page, tap the space bar. To exit out of viewing the contents, hit the q key.
	<br /><br />
	Ex: less phone_numbers.txt
	<br /><br />
	Another useful command to know is tail. 
</p>

<h3>tail</h3>
<p>
	This command shows the last 10 lines of a file by default. This can be useful if you want to look at the end of a log file to see what went wrong.	
</p>

<div id="pageNav">
	<a href='unix.php?page=page_parts/tutorials/main_tutorials.php' onclick="swapMainTerm('page_parts/tutorials/main_tutorials.php');">Previous</a> 
	| 
	<a href='unix.php?page=page_parts/tutorials/tutorial_template.php' onclick="swapMainTerm('page_parts/tutorials/tutorial_template.php');">Next</a>

</div>
