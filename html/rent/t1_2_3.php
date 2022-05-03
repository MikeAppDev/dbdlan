<?php
require_once('../inc/init.php');

$score = $bdd->query("SELECT * FROM t1");

$t1 = $score->fetch(PDO::FETCH_ASSOC);


//  echo'<pre>'; print_r($t1surv); echo '</pre>';
if($_POST)
{
$envoi = $bdd->prepare("UPDATE t1 SET surv2_3 = :surv2_3, kill2_3 = :kill2_3");


            $envoi->bindValue(':surv2_3',$_POST['surv2_3'], PDO::PARAM_STR);
            $envoi->bindValue(':kill2_3',$_POST['kill2_3'], PDO::PARAM_STR);

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
                <label for="surv2_3" class="form-label">Survie</label>
                <input type="text" class="form-control" id="surv2_3" name="surv2_3" value="<?php if(isset($surv2_3)) echo $surv2_3; ?>" placeholder="surv2_3">
            </div>
                            <!-- kill3_3 -->
            <div class="">
                <label for="kill2_1" class="form-label">Tueur</label>
                <input type="text" class="form-control" id="kill2_3" name="kill2_3" value="<?php if(isset($kill2_3)) echo $kill2_3; ?>" placeholder="kill2_3">
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