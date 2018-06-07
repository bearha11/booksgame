function check(){

	
	var question2 = document.quiz.question2.value;

	var correct = 0;


	
	if (question2 == "Lattente") {
		correct++;
}	
	
	var pictures = ["", "image/win.gif", "image/lose.gif"];
	var messages = ["", "Bonne réponse !", ":( "];
	var score;

	if (correct == 0) {
		score = 2;
	}

	if (correct > 0 && correct < 3) {
		score = 1;
	}

	if (correct == 3) {
		score = 0;
	}

	document.getElementById("after_submit").style.visibility = "visible";

	document.getElementById("message").innerHTML = messages[score];
	document.getElementById("number_correct").innerHTML = "tu as  " + correct + " correcte.";
	document.getElementById("picture").src = pictures[score];
	}