<?php
if (empty($_POST["envoyer"])) {
    $score = $_POST["optradio1"] + $_POST["optradio2"] + $_POST["optradio3"] + $_POST["optradio4"] + $_POST["optradio5"] + $_POST["optradio6"] + $_POST["optradio7"] + $_POST["optradio8"] + $_POST["optradio9"] + $_POST["optradio10"] + $_POST["optradio11"] + $_POST["optradio12"] + $_POST["optradio13"] + $_POST["optradio14"] + $_POST["optradio15"] + $_POST["optradio16"] + $_POST["optradio17"] + $_POST["optradio18"] + $_POST["optradio19"] + $_POST["optradio20"];

     $score_maximum_possible = 20*7;
     $score_min = $score_maximum_possible/3;
     $score_max = $score_min*2;
     $name = $_POST["name"];
}
?>
<html>
<head>
          <meta charset="utf-8">
         <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
          <meta http-equiv="X-UA-Compatible" content="ie=edge">
          <link rel="stylesheet" href="css/bootstrap.min.css">
          <link rel="stylesheet" href="css/style.css">
          <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

          <title>Qu'est-ce-que la nomophobie</title>
</head>
<body>
            <header>
                <h1>Qu'est-ce-que la nomophobie</h1>
            </header>
<div class="container">
    <div class="row">
        <div class="center-block">
            <div class="col-md-12">
                <p class="p1er"><b>Des chercheurs de l’Université de l’Iowa ont mis au point un test pour savoir si l’on souffre de nomophobie. C’est le résultat du mémoire de maîtrise de Caglar Yildirim qui vient d’être publié dans la revue Computers in Human Behavior.</b></p>
            </div>
        </div>
        <div class="row">
            <div class="center-block">
                <div class="col-md-12">
                    <p><i>La nomophobie est un mal de l’ère moderne. Il s’est développé avec l’augmentation de l’interaction entre l’homme et les technologies mobiles, en particulier le téléphone.

Avez-vous déjà perdu ou oublié votre téléphone quelque part? Pour certains, l’absence de téléphone s’accompagne d’une poussée d’anxiété qui peut s’avérer très grave. C’est dans le but de mesurer cette nomophobie et d’établir son degré de sévérité que ces chercheurs de l’Université de l’Iowa ont élaboré un questionnaire.

L’étude a été menée en deux phases. La première a consisté en l’exploration qualitative de la nomophobie à travers des entrevues avec neuf étudiants. C’est à la suite de cette étape que quatre dimensions ont été définies : l’incapacité à communiquer, la perte de connectivité, l’impossibilité d’accéder à de l’information et l’abandon de la commodité.

À partir de ces réponses, le questionnaire suivant a été élaboré dans la seconde phase de l’étude.</i></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="center-block">
                <div class="col-md-12">
                    <h2>Le questionnaire de la nomophobie</h2>
                    <p>Vous devez répondre aux questions suivantes selon une échelle de 1 (fortement en désaccord) à 7 (fortement en accord). Plus votre résultat est élevé, plus le niveau de votre nomophobie est élevé (20 étant le score le moins élevé et 140 étant le score le plus élevé).</p>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="center-block">
        <div class="col-md-12">
                <form class="form-inline" action="" method="post">

                    <div class="text-center">
                        <h2>Si j'ai mon téléphone avec moi:</h2>
                    </div>
<br>
          <ol>
            <li>
                <h3>Je me sentirais mal à l’aise sans un accès constant à de l’information sur mon téléphone cellulaire.</h3>
                <div class="button_inline text-center">

                    <label class="radio-inline"><input type="radio" name="optradio1" value="1" required="">Option 1</label>
                    <label class="radio-inline"><input type="radio" name="optradio1" value="2" required="">Option 2</label>
                    <label class="radio-inline"><input type="radio" name="optradio1" value="3" required="">Option 3</label>
                    <label class="radio-inline"><input type="radio" name="optradio1" value="4" required="">Option 4</label>
                    <label class="radio-inline"><input type="radio" name="optradio1" value="5" required="">Option 5</label>
                    <label class="radio-inline"><input type="radio" name="optradio1" value="6" required="">Option 6</label>
                    <label class="radio-inline"><input type="radio" name="optradio1" value="7" required="">Option 7</label>
                </div>

            </li>

            <li>
              <h3>Je me sentirais agacé si je ne pouvais pas consulter de l’information sur mon téléphone quand bon me semble.</h3>

              <div class="button_inline text-center">
                  <label class="radio-inline"><input type="radio" name="optradio2" value="1" required="">Option 1</label>
                  <label class="radio-inline"><input type="radio" name="optradio2" value="2" required="">Option 2</label>
                  <label class="radio-inline"><input type="radio" name="optradio2" value="3" required="">Option 3</label>
                  <label class="radio-inline"><input type="radio" name="optradio2" value="4" required="">Option 4</label>
                  <label class="radio-inline"><input type="radio" name="optradio2" value="5" required="">Option 5</label>
                  <label class="radio-inline"><input type="radio" name="optradio2" value="6" required="">Option 6</label>
                  <label class="radio-inline"><input type="radio" name="optradio2" value="7" required="">Option 7</label>
            </div>
            </li>
            <li>
              <h3>Je me sentirais nerveux si je ne pouvais pas m’informer (actualité, météo, etc.) sur mon téléphone. </h3>

                  <div class="button_inline text-center">
                      <label class="radio-inline"><input type="radio" name="optradio3" value="1" required="">Option 1</label>
                      <label class="radio-inline"><input type="radio" name="optradio3" value="2" required="">Option 2</label>
                      <label class="radio-inline"><input type="radio" name="optradio3" value="3" required="">Option 3</label>
                      <label class="radio-inline"><input type="radio" name="optradio3" value="4" required="">Option 4</label>
                      <label class="radio-inline"><input type="radio" name="optradio3" value="5" required="">Option 5</label>
                      <label class="radio-inline"><input type="radio" name="optradio3" value="6" required="">Option 6</label>
                      <label class="radio-inline"><input type="radio" name="optradio3" value="7" required="">Option 7</label>
                  </div>


                  <li>
                    <h3>Je me sentirais agacé si je ne pouvais pas utiliser mon téléphone ou ses fonctionnalités quand bon me semble. </h3>

                    <div class="button_inline text-center">
                        <label class="radio-inline"><input type="radio" name="optradio4" value="1" required="">Option 1</label>
                        <label class="radio-inline"><input type="radio" name="optradio4" value="2" required="">Option 2</label>
                        <label class="radio-inline"><input type="radio" name="optradio4" value="3" required="">Option 3</label>
                        <label class="radio-inline"><input type="radio" name="optradio4" value="4" required="">Option 4</label>
                        <label class="radio-inline"><input type="radio" name="optradio4" value="5" required="">Option 5</label>
                        <label class="radio-inline"><input type="radio" name="optradio4" value="6" required="">Option 6</label>
                        <label class="radio-inline"><input type="radio" name="optradio4" value="7" required="">Option 7</label>
                    </div>

                  </li>
                  <li>
                    <h3>Manquer de batterie pour mon cellulaire me ferait peur. </h3>

                    <div class="button_inline text-center">
                        <label class="radio-inline"><input type="radio" name="optradio5" value="1" required="">Option 1</label>
                        <label class="radio-inline"><input type="radio" name="optradio5" value="2" required="">Option 2</label>
                        <label class="radio-inline"><input type="radio" name="optradio5" value="3" required="">Option 3</label>
                        <label class="radio-inline"><input type="radio" name="optradio5" value="4" required="">Option 4</label>
                        <label class="radio-inline"><input type="radio" name="optradio5" value="5" required="">Option 5</label>
                        <label class="radio-inline"><input type="radio" name="optradio5" value="6" required="">Option 6</label>
                        <label class="radio-inline"><input type="radio" name="optradio5" value="7" required="">Option 7</label>
                    </div>


                  </li>
                  <li>
                    <h3>
Si j’atteignais la limite de mon plan de données, je paniquerais.</h3>

                    <div class="button_inline text-center">
                        <label class="radio-inline"><input type="radio" name="optradio6" value="1" required="">Option 1</label>
                        <label class="radio-inline"><input type="radio" name="optradio6" value="2" required="">Option 2</label>
                        <label class="radio-inline"><input type="radio" name="optradio6" value="3" required="">Option 3</label>
                        <label class="radio-inline"><input type="radio" name="optradio6" value="4" required="">Option 4</label>
                        <label class="radio-inline"><input type="radio" name="optradio6" value="5" required="">Option 5</label>
                        <label class="radio-inline"><input type="radio" name="optradio6" value="6" required="">Option 6</label>
                        <label class="radio-inline"><input type="radio" name="optradio6" value="7" required="">Option 7</label>
                    </div>


                  </li>
                  <li>
                    <h3>Si je n’avais pas de signal ou de connexion wifi, je vérifierais constamment mon téléphone pour voir si le signal revenait.</h3>

                    <div class="button_inline text-center">
                        <label class="radio-inline"><input type="radio" name="optradio7" value="1" required="">Option 1</label>
                        <label class="radio-inline"><input type="radio" name="optradio7" value="2" required="">Option 2</label>
                        <label class="radio-inline"><input type="radio" name="optradio7" value="3" required="">Option 3</label>
                        <label class="radio-inline"><input type="radio" name="optradio7" value="4" required="">Option 4</label>
                        <label class="radio-inline"><input type="radio" name="optradio7" value="5" required="">Option 5</label>
                        <label class="radio-inline"><input type="radio" name="optradio7" value="6" required="">Option 6</label>
                        <label class="radio-inline"><input type="radio" name="optradio7" value="7" required="">Option 7</label>
                    </div>


                  </li>
                  <li>
                    <h3>Si je ne pouvais pas utiliser mon téléphone, j’aurais peur de rester pris quelque part.</h3>

                    <div class="button_inline text-center">
                        <label class="radio-inline"><input type="radio" name="optradio8" value="1" required="">Option 1</label>
                        <label class="radio-inline"><input type="radio" name="optradio8" value="2" required="">Option 2</label>
                        <label class="radio-inline"><input type="radio" name="optradio8" value="3" required="">Option 3</label>
                        <label class="radio-inline"><input type="radio" name="optradio8" value="4" required="">Option 4</label>
                        <label class="radio-inline"><input type="radio" name="optradio8" value="5" required="">Option 5</label>
                        <label class="radio-inline"><input type="radio" name="optradio8" value="6" required="">Option 6</label>
                        <label class="radio-inline"><input type="radio" name="optradio8" value="7" required="">Option 7</label>
                    </div>


                  </li>
                  <li>
                    <h3>Si je ne pouvais pas vérifier mon téléphone pendant quelque temps, je sentirais le besoin de le faire.</h3>

                    <div class="button_inline text-center">
                        <label class="radio-inline"><input type="radio" name="optradio9" value="1" required="">Option 1</label>
                        <label class="radio-inline"><input type="radio" name="optradio9" value="2" required="">Option 2</label>
                        <label class="radio-inline"><input type="radio" name="optradio9" value="3" required="">Option 3</label>
                        <label class="radio-inline"><input type="radio" name="optradio9" value="4" required="">Option 4</label>
                        <label class="radio-inline"><input type="radio" name="optradio9" value="5" required="">Option 5</label>
                        <label class="radio-inline"><input type="radio" name="optradio9" value="6" required="">Option 6</label>
                        <label class="radio-inline"><input type="radio" name="optradio9" value="7" required="">Option 7</label>
                    </div>


                  </li>
<br>
                  <div class="text-center">
                      <h2>Si je n’avais pas mon téléphone avec moi:</h2>
                  </div>
<br>
                  <li>
                    <h3>Je serais inquiet de ne pas pouvoir communiquer avec mes amis ou ma famille instantanément.</h3>

                    <div class="button_inline text-center">
                        <label class="radio-inline"><input type="radio" name="optradio10" value="1" required="">Option 1</label>
                        <label class="radio-inline"><input type="radio" name="optradio10" value="2" required="">Option 2</label>
                        <label class="radio-inline"><input type="radio" name="optradio10" value="3" required="">Option 3</label>
                        <label class="radio-inline"><input type="radio" name="optradio10" value="4" required="">Option 4</label>
                        <label class="radio-inline"><input type="radio" name="optradio10" value="5" required="">Option 5</label>
                        <label class="radio-inline"><input type="radio" name="optradio10" value="6" required="">Option 6</label>
                        <label class="radio-inline"><input type="radio" name="optradio10" value="7" required="">Option 7</label>
                    </div>


                  </li>
                  <li>
                    <h3>Je serais inquiet de ne pas pouvoir être joint par mes amis ou ma famille.</h3>

                    <div class="button_inline text-center">
                        <label class="radio-inline"><input type="radio" name="optradio11" value="1" required="">Option 1</label>
                        <label class="radio-inline"><input type="radio" name="optradio11" value="2" required="">Option 2</label>
                        <label class="radio-inline"><input type="radio" name="optradio11" value="3" required="">Option 3</label>
                        <label class="radio-inline"><input type="radio" name="optradio11" value="4" required="">Option 4</label>
                        <label class="radio-inline"><input type="radio" name="optradio11" value="5" required="">Option 5</label>
                        <label class="radio-inline"><input type="radio" name="optradio11" value="6" required="">Option 6</label>
                        <label class="radio-inline"><input type="radio" name="optradio11" value="7" required="">Option 7</label>
                    </div>


                  </li>
                  <li>
                    <h3>Je serais inquiet de ne pas pouvoir recevoir de messages texte ni d’appels.</h3>

                    <div class="button_inline text-center">
                        <label class="radio-inline"><input type="radio" name="optradio12" value="1" required="">Option 1</label>
                        <label class="radio-inline"><input type="radio" name="optradio12" value="2" required="">Option 2</label>
                        <label class="radio-inline"><input type="radio" name="optradio12" value="3" required="">Option 3</label>
                        <label class="radio-inline"><input type="radio" name="optradio12" value="4" required="">Option 4</label>
                        <label class="radio-inline"><input type="radio" name="optradio12" value="5" required="">Option 5</label>
                        <label class="radio-inline"><input type="radio" name="optradio12" value="6" required="">Option 6</label>
                        <label class="radio-inline"><input type="radio" name="optradio12" value="7" required="">Option 7</label>
                    </div>


                  </li>
                  <li>
                    <h3>Je me sentirais anxieux de ne pas pouvoir garder le contact avec ma famille ou mes amis.</h3>

                    <div class="button_inline text-center">
                        <label class="radio-inline"><input type="radio" name="optradio13" value="1" required="">Option 1</label>
                        <label class="radio-inline"><input type="radio" name="optradio13" value="2" required="">Option 2</label>
                        <label class="radio-inline"><input type="radio" name="optradio13" value="3" required="">Option 3</label>
                        <label class="radio-inline"><input type="radio" name="optradio13" value="4" required="">Option 4</label>
                        <label class="radio-inline"><input type="radio" name="optradio13" value="5" required="">Option 5</label>
                        <label class="radio-inline"><input type="radio" name="optradio13" value="6" required="">Option 6</label>
                        <label class="radio-inline"><input type="radio" name="optradio13" value="7" required="">Option 7</label>
                    </div>


                  </li>
                  <li>
                    <h3>Je serais inquiet de ne pas savoir si quelqu’un essaie de me rejoindre.</h3>

                    <div class="button_inline text-center">
                        <label class="radio-inline"><input type="radio" name="optradio14" value="1" required="">Option 1</label>
                        <label class="radio-inline"><input type="radio" name="optradio14" value="2" required="">Option 2</label>
                        <label class="radio-inline"><input type="radio" name="optradio14" value="3" required="">Option 3</label>
                        <label class="radio-inline"><input type="radio" name="optradio14" value="4" required="">Option 4</label>
                        <label class="radio-inline"><input type="radio" name="optradio14" value="5" required="">Option 5</label>
                        <label class="radio-inline"><input type="radio" name="optradio14" value="6" required="">Option 6</label>
                        <label class="radio-inline"><input type="radio" name="optradio14" value="7" required="">Option 7</label>
                    </div>


                  </li>
                  <li>
                    <h3>Je me sentirais anxieux de savoir que ma connexion constante avec mes amis et ma famille est interrompue.</h3>

                    <div class="button_inline text-center">
                        <label class="radio-inline"><input type="radio" name="optradio15" value="1" required="">Option 1</label>
                        <label class="radio-inline"><input type="radio" name="optradio15" value="2" required="">Option 2</label>
                        <label class="radio-inline"><input type="radio" name="optradio15" value="3" required="">Option 3</label>
                        <label class="radio-inline"><input type="radio" name="optradio15" value="4" required="">Option 4</label>
                        <label class="radio-inline"><input type="radio" name="optradio15" value="5" required="">Option 5</label>
                        <label class="radio-inline"><input type="radio" name="optradio15" value="6" required="">Option 6</label>
                        <label class="radio-inline"><input type="radio" name="optradio15" value="7" required="">Option 7</label>
                    </div>


                  </li>
                  <li>
                    <h3>Je serais inquiet d’être déconnecté de mon identité en ligne.</h3>

                    <div class="button_inline text-center">
                        <label class="radio-inline"><input type="radio" name="optradio16" value="1" required="">Option 1</label>
                        <label class="radio-inline"><input type="radio" name="optradio16" value="2" required="">Option 2</label>
                        <label class="radio-inline"><input type="radio" name="optradio16" value="3" required="">Option 3</label>
                        <label class="radio-inline"><input type="radio" name="optradio16" value="4" required="">Option 4</label>
                        <label class="radio-inline"><input type="radio" name="optradio16" value="5" required="">Option 5</label>
                        <label class="radio-inline"><input type="radio" name="optradio16" value="6" required="">Option 6</label>
                        <label class="radio-inline"><input type="radio" name="optradio16" value="7" required="">Option 7</label>
                    </div>


                  </li>
                  <li>
                    <h3>Je serais mal à l’aise de ne pas pouvoir rester à jour dans l’actualité de mes réseaux sociaux.</h3>

                    <div class="button_inline text-center">
                        <label class="radio-inline"><input type="radio" name="optradio17" value="1" required="">Option 1</label>
                        <label class="radio-inline"><input type="radio" name="optradio17" value="2" required="">Option 2</label>
                        <label class="radio-inline"><input type="radio" name="optradio17" value="3" required="">Option 3</label>
                        <label class="radio-inline"><input type="radio" name="optradio17" value="4" required="">Option 4</label>
                        <label class="radio-inline"><input type="radio" name="optradio17" value="5" required="">Option 5</label>
                        <label class="radio-inline"><input type="radio" name="optradio17" value="6" required="">Option 6</label>
                        <label class="radio-inline"><input type="radio" name="optradio17" value="7" required="">Option 7</label>
                    </div>


                  </li>
                  <li>
                    <h3>JJe serais mal à l’aise de ne pas pouvoir recevoir les notifications de mes connexions et de mes réseaux en ligne.</h3>

                    <div class="button_inline text-center">
                        <label class="radio-inline"><input type="radio" name="optradio18" value="1" required="">Option 1</label>
                        <label class="radio-inline"><input type="radio" name="optradio18" value="2" required="">Option 2</label>
                        <label class="radio-inline"><input type="radio" name="optradio18" value="3" required="">Option 3</label>
                        <label class="radio-inline"><input type="radio" name="optradio18" value="4" required="">Option 4</label>
                        <label class="radio-inline"><input type="radio" name="optradio18" value="5" required="">Option 5</label>
                        <label class="radio-inline"><input type="radio" name="optradio18" value="6" required="">Option 6</label>
                        <label class="radio-inline"><input type="radio" name="optradio18" value="7" required="">Option 7</label>
                    </div>


                  </li>
                  <li>
                    <h3>Je me sentirais anxieux de ne pas pouvoir vérifier ma boîte de courriels.</h3>

                    <div class="button_inline text-center">
                        <label class="radio-inline"><input type="radio" name="optradio19" value="1" required="">Option 1</label>
                        <label class="radio-inline"><input type="radio" name="optradio19" value="2" required="">Option 2</label>
                        <label class="radio-inline"><input type="radio" name="optradio19" value="3" required="">Option 3</label>
                        <label class="radio-inline"><input type="radio" name="optradio19" value="4" required="">Option 4</label>
                        <label class="radio-inline"><input type="radio" name="optradio19" value="5" required="">Option 5</label>
                        <label class="radio-inline"><input type="radio" name="optradio19" value="6" required="">Option 6</label>
                        <label class="radio-inline"><input type="radio" name="optradio19" value="7" required="">Option 7</label>
                    </div>


                  </li>
                  <li>
                    <h3>Je me sentirais bizarre parce que je ne saurais pas quoi faire.</h3>

                    <div class="button_inline text-center">
                        <label class="radio-inline"><input type="radio" name="optradio20" value="1" required="">Option 1</label>
                        <label class="radio-inline"><input type="radio" name="optradio20" value="2" required="">Option 2</label>
                        <label class="radio-inline"><input type="radio" name="optradio20" value="3" required="">Option 3</label>
                        <label class="radio-inline"><input type="radio" name="optradio20" value="4" required="">Option 4</label>
                        <label class="radio-inline"><input type="radio" name="optradio20" value="5" required="">Option 5</label>
                        <label class="radio-inline"><input type="radio" name="optradio20" value="6" required="">Option 6</label>
                        <label class="radio-inline"><input type="radio" name="optradio20" value="7" required="">Option 7</label>
                    </div>


                  </li>


              </li>
            </ol>
            <div class="border">
                <div class="coordonnees">
                    <div class="form-group">
                        <label for="labelemail">Name</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Your name" required="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail2">Email</label>
                        <input type="email" class="form-control" name="mail" id="mail" placeholder="youremail@demo.com" required="">
                    </div>
                </div>

                    <div class="boutton">
                    <button type="submit" name="envoyer" class="btn btn-default">Envoyer</button>
                    </div>
            </div>


                </form>
        </div>

    </div>
  </div>

</div>
</div>
<footer>
    <?php echo "Bonjour " . $name ." votre score est de  " . $score . " / 140. ";

        if ($score < $score_min) {
            echo " Vous êtes dans la moyenne des gens raisonnables.";
        }
        elseif ($score > $score_max) {
             echo " Veuillez consulter un spécialiste rapidement.";
        }
        else{
            echo " Vous êtes à la limite de passer d'une personnalité saine à une personnalité nomophobe : ATTENTION !";
        }

    ?>
</footer>
</body>


</html>
