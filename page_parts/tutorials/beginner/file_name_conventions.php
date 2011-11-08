
<h2>File name conventions</h2>

<p><em>Note: These conventions should also be followed for naming directories</p></em>

<p>
When naming a file, you should avoid using any special characters such as: 
/  		-> used for delineating directories(ex. root/docs/)
*, &, and %	-> used for regular expressions when searching
</p>

<p>
	Another thing to avoid is using spaces in file names. Reason being is it makes 
	it difficult for the shell to determine if what is on the terminal is a single 
	file or multiple.
</p>

<p>
	Later on we'll take about copying and moving files but lets just talk about what 
	that command requires.
</p>

<p>
	The copy command requires you to begin the copy command space the filename space 
	then the location/file. Lets say our file is called "bob.txt", and we want make 
	a copy called "cat.txt". (cp bob.txt cat.txt)
</p>

<p>
	If you tried entering a file name with spaces, the terminal would complain 
	because of excess parameters. Lets say the file we wanted to copy was "unix 
	commands.txt" to "cmds.txt." 
</p>

<p>
	In this case the command would be (cp unix commands.txt cmds.txt), which would 
	result in an error because of the terminal not knowing that the spaced filed was 
	just one file.
</p>

<p><em>
	Note: you force a fix by specifying its one file by enclosing the name in 
	quotations.
</p></em>

<p>
	The best way to name a file is use only alphanumeric characters (letters and 
	numbers), together with _ (underscores for spaces) and . (dot to specify file 
	name extensions).
</p>

<p>
	Most file names start with a lower case letter and may end with a dot, followed 
	by more characters. The characters after the dot are to indicate the file 
	extension which may alert you to the contents of the file. 
	<br />
	For example, most javascript files end with .js but are not required to.
</p>

<div id="pageNav">
	<a href='unix.php?page=page_parts/tutorials/tutorial_template.php' onclick="swapMainTerm('page_parts/tutorials/tutorial_template.php');">Previous</a> 
	| 
	<a href='unix.php?page=page_parts/tutorials/summaries/file_name_conventions_summary.php' onclick="swapMainTerm('page_parts/tutorials/summaries/file_name_conventions_summary.php');">Next</a>
</div>

