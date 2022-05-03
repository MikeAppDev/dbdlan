<?php
require_once('../inc/init.php');

$teamfinal = $bdd->query("SELECT * FROM teamfinal");

$tf = $teamfinal->fetch(PDO::FETCH_ASSOC);


//  echo'<pre>'; print_r($t1surv); echo '</pre>';
if($_POST)
{
$envoi = $bdd->prepare("UPDATE teamfinal SET team1 = :team1, team2 = :team2");


            $envoi->bindValue(':team1',$_POST['team1'], PDO::PARAM_STR);
            $envoi->bindValue(':team2',$_POST['team2'], PDO::PARAM_STR);


            $envoi->execute(); 
//  echo'<pre>'; print_r($_POST); echo '</pre>';
}

require_once('../inc/header.php');
require_once('../inc/nav.php');

?>
        <!-- Groupe -->
        <h2 class="groupe" style="font-size:45px; margin-top: 20px;">Groupe A</h2>
        <!-- action="../pages/dashboard.php" -->
        <form method="post" class="admincenter">

                            <!-- surv1_2 -->
            <div class="">
                <label for="team1" class="form-label">Team 1</label>
                <input type="text" class="form-control" id="team1" name="team1" value="<?php if(isset($team1)) echo $team1; ?>" placeholder="team1">
            </div>
                            <!-- kill1_2 -->
            <div class="">
                <label for="team2" class="form-label">Team 2</label>
                <input type="text" class="form-control" id="team2" name="team2" value="<?php if(isset($team2)) echo $team2; ?>" placeholder="team2">
            </div>

            <!-- BOUTON -->
            <div class="">
                <button type="submit" class="but"> Send</button>
                <a href="../pages/dashboard.php" class="but">retour</a>
            </div>
        </form>



<?php

require_once('../inc/footer.php');

?>