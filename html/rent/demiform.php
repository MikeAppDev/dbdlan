<?php
require_once('../inc/init.php');

$team = $bdd->query("SELECT * FROM teamdemi");

$td = $team->fetch(PDO::FETCH_ASSOC);


//  echo'<pre>'; print_r($t1surv); echo '</pre>';
if($_POST)
{
$envoi = $bdd->prepare("UPDATE teamdemi SET team1 = :team1, team2 = :team2, team3 = :team3, team4 = :team4");


            $envoi->bindValue(':team1',$_POST['team1'], PDO::PARAM_STR);
            $envoi->bindValue(':team2',$_POST['team2'], PDO::PARAM_STR);
            $envoi->bindValue(':team3',$_POST['team3'], PDO::PARAM_STR);
            $envoi->bindValue(':team4',$_POST['team4'], PDO::PARAM_STR);

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
            <div class="">
                <label for="team3" class="form-label">Team 3</label>
                <input type="text" class="form-control" id="team3" name="team3" value="<?php if(isset($team3)) echo $team3; ?>" placeholder="team3">
            </div>
            <div class="">
                <label for="team4" class="form-label">Team 4</label>
                <input type="text" class="form-control" id="team4" name="team4" value="<?php if(isset($team4)) echo $team4; ?>" placeholder="team4">
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