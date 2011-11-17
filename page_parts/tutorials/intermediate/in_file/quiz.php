<div id="stage_content">
		<script>
			function validate(form, numOfQuestions){
				var isSet = 0;
				var allAnswered = true;
				var notAnswered = "You have not answered questions: ";
				
				for(q=1;q <= numOfQuestions;q++){ //loops through each set of questions
					var arrayName = eval("form.question"+q); //adds the question number to the name and form to make the array
					for(i=0;i < arrayName.length;i++){ //loops through all of the radio buttons for a question
						if(arrayName[i].checked){ //checks to see if the radio button is checked and if so if it is the correct answer
							isSet++;
						}
					}
					
					if(isSet == 0){
						allAnswered = false;
						notAnswered += q+" ";
					}
					isSet = 0;
				}
				
				if(!allAnswered){
					alert(notAnswered);
					return false;
				}
				
				gradeQuiz(form, numOfQuestions);
				return true;
			}
			
			
			function gradeQuiz(form, numOfQuestions){
				var grade = 0;
				
				for(q=1;q <= numOfQuestions;q++){ //loops through each set of questions
					var arrayName = eval("form.question"+q); //adds the question number to the name and form to make the array
					for(i=0;i < arrayName.length;i++){ //loops through all of the radio buttons for a question
						if(arrayName[i].checked && arrayName[i].value == "1"){ //checks to see if the radio button is checked and if so if it is the correct answer
							grade++;
						}
					}
				}

				alert("You answered "+grade+" out of "+numOfQuestions+" questions correctly!");
			}
		</script>
				
		<h3>In the file Quiz</h3>
		
		<form name="quiz1" method="GET" action="quiz.php" onsubmit="return validate(this,3)">
			<div class="question">
				<div class="quiz_answer"><label>Question 1: What command will remove all other output from the terminal?</label></div>
				<div class="quiz_answer"><input type="radio" name="question1" value="0"/>wipe</div>
				<div class="quiz_answer"><input type="radio" name="question1" value="0"/>clear</div>
				<div class="quiz_answer"><input type="radio" name="question1" value="1"/>start</div>
				<div class="quiz_answer"><input type="radio" name="question1" value="0"/>refresh</div>
			</div>
			
			<div class="question">
				<div class="quiz_answer"><label>Question 2: Which command will show the last ten lines of a file?</label></div>
				<div class="quiz_answer"><input type="radio" name="question2" value="0"/>less</div>
				<div class="quiz_answer"><input type="radio" name="question2" value="0"/>final</div>
				<div class="quiz_answer"><input type="radio" name="question2" value="1"/>tail</div>
				<div class="quiz_answer"><input type="radio" name="question2" value="0"/>ten</div>
			</div>
			
			<div class="question">
				<div class="quiz_answer"><label>Question 3: Which command lets you look for patterns in a file?</label></div>
				<div class="quiz_answer"><input type="radio" name="question3" value="0"/>search</div>
				<div class="quiz_answer"><input type="radio" name="question3" value="0"/>find</div>
				<div class="quiz_answer"><input type="radio" name="question3" value="0"/>locate</div>
				<div class="quiz_answer"><input type="radio" name="question3" value="1"/>grep</div>
			</div>
			
			<input name="page" value="page_parts/tutorials/intermediate/in_file/quiz.php" style="display:none;"/>  
		</form>
</div>