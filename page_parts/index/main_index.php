
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
				
				//hook up to my db
				$dbLink=mysql_connect("localhost","409_team_su","fr1end")
					or die("couldn't connect: ".mysql_error());
				
				mysql_select_db("409_team_su");
				
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
							/*
							if ($firstRow) {
								//give the table a table header...
								//foreach($row as $index => $val){
								//	$result .= "<th>".$index."</th>";
								//}
								
								$result .= "<th>".$row['command']."</th>";
								$result .= "<th>".$row['usage']."</th>";
								
								$result.="</tr>";
								$firstRow = false;
								
								continue;
							}//first row
							*/
						
							$result.="<tr>";
							//foreach($row as $index => $val){
							//	$result .='<td style="padding:10px">'.$val.'</td>';
							//}
							
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