<div id="stage_content">
		<script>
			function validate(form, numOfQuestions){
				var isSet = 0;
				var allAnswered = true;
				var notAnswered = "You have not answered questions: ";
				
				for(q=1;q <= numOfQuestions;q++){ 				//loops through each set of questions
					var arrayName = eval("form.question"+q); 	//adds the question number to the name and form to make the array
					for(i=0;i < arrayName.length;i++){ 			//loops through all of the radio buttons for a question
						if(arrayName[i].checked){ 				//checks to see if the radio button is checked and if so if it is the correct answer
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
				
		<h3>Editing With vi</h3>
		
		<form name="quiz1" onsubmit="return validate(this,3)">
			<div class="question">
				<div class="quiz_answer"><label>Question 1: What does vi stand for?</label></div>
				<div class="quiz_answer"><input type="radio" name="question1" value="0"/>victory inbound</div>
				<div class="quiz_answer"><input type="radio" name="question1" value="1"/>visual interface</div>
				<div class="quiz_answer"><input type="radio" name="question1" value="0"/>vice interaction</div>
				<div class="quiz_answer"><input type="radio" name="question1" value="0"/>virtual integration</div>
			</div>
			
			<div class="question">
				<div class="quiz_answer"><label>Question 2: What can you press to enter editing mode?</label></div>
				<div class="quiz_answer"><input type="radio" name="question2" value="1"/>"insert" key</div>
				<div class="quiz_answer"><input type="radio" name="question2" value="0"/>"e" key</div>
				<div class="quiz_answer"><input type="radio" name="question2" value="0"/>typing "edit"</div>
				<div class="quiz_answer"><input type="radio" name="question2" value="0"/>"enter" key</div>
			</div>
			
			<div class="question">
				<div class="quiz_answer"><label>Question 3: What can you type after "esc" to save and quit vi?</label></div>
				<div class="quiz_answer"><input type="radio" name="question3" value="0"/>:q!</div>
				<div class="quiz_answer"><input type="radio" name="question3" value="0"/>:w</div>
				<div class="quiz_answer"><input type="radio" name="question3" value="1"/>:wq!</div>
				<div class="quiz_answer"><input type="radio" name="question3" value="0"/>pp</div>
			</div>
			
			<input name="page" value="page_parts/tutorials/intermediate/shell_edit/quiz.php" style="display:none;"/>
			
			<input name="submit" type="submit" value="Submit" />
			
		</form>
</div>