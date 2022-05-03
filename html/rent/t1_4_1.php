<?php
require_once('../inc/init.php');

$score = $bdd->query("SELECT * FROM t1");

$t1 = $score->fetch(PDO::FETCH_ASSOC);


//  echo'<pre>'; print_r($t1surv); echo '</pre>';
if($_POST)
{
$envoi = $bdd->prepare("UPDATE t1 SET surv4_1 = :surv4_1, kill4_1 = :kill4_1");


            $envoi->bindValue(':surv4_1',$_POST['surv4_1'], PDO::PARAM_STR);
            $envoi->bindValue(':kill4_1',$_POST['kill4_1'], PDO::PARAM_STR);

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

                            <!-- surv1_3 -->
                <div class="">
                <label for="surv4_1" class="form-label">Survie</label>
                <input type="text" class="form-control" id="surv4_1" name="surv4_1" value="<?php if(isset($surv4_1)) echo $surv4_1; ?>" placeholder="surv4_1">
            </div>
                            <!-- kill1_4 -->
            <div class="">
                <label for="kill4_1" class="form-label">Tueur</label>
                <input type="text" class="form-control" id="kill4_1" name="kill4_1" value="<?php if(isset($kill4_1)) echo $kill4_1; ?>" placeholder="kill4_1">
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