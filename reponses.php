<?php

					//SANITISATION
					if(isset($_POST["envoyer"])){
							$SANI_name =	filter_var($_POST["name"], FILTER_SANITIZE_STRING);
							$SANI_mail =	filter_var($_POST["mail"], FILTER_SANITIZE_EMAIL);

							//print_r ($_POST);

					//VALIDATION
					if(!empty($SANI_name) && !empty($SANI_mail)){
							//echo "Bonjour";
					}
					else{
							echo "Votre e-mail n'est pas valide";
						}
					}
					//RECUPERATION DONNEES MISES EN INPUT PAR L UTILISATEUR
					if(isset($_POST["envoyer"])){
							$email = $_POST["mail"];
							$name = $_POST["name"];
							// the message
							$msg = "Message reçu de Quizz Nomophobie from server";
							// send email
							mail("kreshnikiberdemaj@gmail.com","QCM nomophobie reponses",$msg);
							//mail("info@bethek.5gbfree.com","QCM reponses",$msg);


				            $answer1 = $_POST['question-1-answers'];
				            $answer2 = $_POST['question-2-answers'];
				            $answer3 = $_POST['question-3-answers'];
							$answer4 = $_POST['question-4-answers'];
							$answer5 = $_POST['question-5-answers'];



	            			$totalCorrect = 0;

				            if ($answer1 == "B") { $totalCorrect++; }
				            if ($answer2 == "C") { $totalCorrect++; }
				            if ($answer3 == "A") { $totalCorrect++; }
							if ($answer4 == "B") { $totalCorrect++; }
							if ($answer5 == "A") { $totalCorrect++; }


	            			echo "<div id=results>Bonjour " . $name ." vous avez " . $totalCorrect . " / 5</div>";


					}
?>
