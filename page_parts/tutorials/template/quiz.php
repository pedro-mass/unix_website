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
				
		<h3>Practice Quiz</h3>
		
		<form name="quiz1" method="GET" action="quiz.php" onsubmit="return validate(this,3)">
			<label>Question 1: What command would you use to make a directory?<br /></label>
			<input type="radio" name="question1" value="0"/>cd
			<input type="radio" name="question1" value="0"/>ls
			<input type="radio" name="question1" value="1"/>mkdir
			<input type="radio" name="question1" value="0"/>touch
			
			<label><br />Question 2: Which variable will display the shell you are in?<br /></label>
			<input type="radio" name="question2" value="0"/>$PATH
			<input type="radio" name="question2" value="1"/>$SHELL
			<input type="radio" name="question2" value="0"/>$RANDOM
			<input type="radio" name="question2" value="0"/>$IPS <br />
			
			<label>Question 3: Which option will give you the long listing for ls?<br /></label>
			<input type="radio" name="question3" value="0"/>-a
			<input type="radio" name="question3" value="0"/>-d
			<input type="radio" name="question3" value="0"/>-L
			<input type="radio" name="question3" value="1"/>-l <br />
			
			<input name="submit" type="submit" value="Submit" />
		</form>
</div>