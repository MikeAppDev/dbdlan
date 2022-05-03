<?php
require_once('../inc/init.php');

$score = $bdd->query("SELECT * FROM t1");

$t1 = $score->fetch(PDO::FETCH_ASSOC);


//  echo'<pre>'; print_r($t1surv); echo '</pre>';
if($_POST)
{
$envoi = $bdd->prepare("UPDATE t1 SET surv2_1 = :surv2_1, kill2_1 = :kill2_1");


            $envoi->bindValue(':surv2_1',$_POST['surv2_1'], PDO::PARAM_STR);
            $envoi->bindValue(':kill2_1',$_POST['kill2_1'], PDO::PARAM_STR);

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
                <label for="surv2_1" class="form-label">Survie</label>
                <input type="text" class="form-control" id="surv2_1" name="surv2_1" value="<?php if(isset($surv2_1)) echo $surv2_1; ?>" placeholder="surv2_1">
            </div>
                            <!-- kill1_3 -->
            <div class="">
                <label for="kill2_1" class="form-label">Tueur</label>
                <input type="text" class="form-control" id="kill2_1" name="kill2_1" value="<?php if(isset($kill2_1)) echo $kill2_1; ?>" placeholder="kill2_1">
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