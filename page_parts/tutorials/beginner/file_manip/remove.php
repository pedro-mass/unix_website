<div id="stage_content">
		<h3 id="stage_subtitle">Remove (rm/rmdir)</h3>

		<p id="stage_description">
			<strong>rm fileName</strong>  <strong>rmdir directoryName</strong>
			<br />
			The first command deletes a file, while the second deletes a directory.
			The separation in delete commands is suppose to prevent the user from 
			accidently deleting a directory when they thought it was a file.

		</p>
		
		<p id="stage_example">
			<div id="code_example">
				Code example: 
			</div>
				<code>rm -r dirName</code>	
		</p>
		
		<p id="stage_steps">
			The code example shown deletes a directory by recursively deleting the files within it.
			Create a directory, fill it with files, then try to use the rmdir command. See the error?
		</p>
</div>