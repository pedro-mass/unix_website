
<h2>In the File: Searching Contents of File</h2>

<h3>grep</h3>
<p>
	grep - a powerful way of searching for words or patterns
	<br /><br />
	ex: grep chelsea phone_numbers.txt
	<br /><br />
	This command will print out each line containing the word “chelsea”
</p>

<h3>tips</h3>
<p>
	<ul>
		<li>grep is case-sensitive
			<ul>
				<li>"chelsea" is the not the same as "Chelsea"</li>
				<li>can use the -i option to ignore case</li>
			</ul>	
		</li>
		<li>to search for a phrase/pattern
			<ul>
				<li>enclose it in single quotes</li>
			</ul>
		</li>
		<li>Other options
			<ul>
				<li>-v	display lines that do not match the search_term</li>
				<li>-n	show line numbers on the results</li>
				<li>-c	print total number of matched lines (used for counting occurences)</li>
			</ul>
		</li>
	</ul>
</p>

<div id="pageNav">
	<a href='unix.php?page=page_parts/tutorials/intermediate/in_the_file/search_contents.php&side=tutorial' onclick="swapMainTerm('page_parts/tutorials/intermediate/in_the_file/search_contents.php');">Previous</a> 
	| 
	<a href='unix.php?page=page_parts/tutorials/summaries/in_the_file_summary.php&side=tutorial' onclick="swapMainTerm('page_parts/tutorials/summaries/in_the_file_summary.php');">Next</a>

</div>

