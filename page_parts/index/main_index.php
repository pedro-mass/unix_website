
<div id="content_padding">
	<div id="left_content">
		<h2>Index:</h2>
		<p>
			Use the commands to the right as a quick reference guide, or for quiz prep!
		</p>
	</div>

	<div id="right_content">
		<div id="index_content">
			<?php 
				// Connect and select the Unix database
				// if connection fails, the program fails.	
				include('/sql/db_connect.php');
				
				//get all data from db
				
				$query="select * from unix_commands order by command asc";
				$res=mysql_query($query);
					
				if(mysql_num_rows($res) == 0){
					echo "no records found";
				}else{
					//print out as table
					if($res){
						$firstRow = true;
						$result='<table border="1"><tr>';
						
						$result .= "<th>".'command'."</th>";
						$result .= "<th>".'usage'."</th>";
						
						while($row=mysql_fetch_assoc($res)){
							$result.="<tr>";
								$result .= "<th>".$row['command']."</th>";
								$result .= "<th>".$row['usage']."</th>";
							$result.="</tr>";					
						}//fetch
						
						$result .= "</table>";
						echo $result;
	
					} //if res
				}//if records found
			?>
		</div>
	</div>
</div>