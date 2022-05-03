<?php
require_once('../inc/init.php');

$score = $bdd->query("SELECT * FROM t1");

$t1 = $score->fetch(PDO::FETCH_ASSOC);


//  echo'<pre>'; print_r($t1surv); echo '</pre>';
if($_POST)
{
$envoi = $bdd->prepare("UPDATE t1 SET surv4_3 = :surv4_3, kill4_3 = :kill4_3");


            $envoi->bindValue(':surv4_3',$_POST['surv4_3'], PDO::PARAM_STR);
            $envoi->bindValue(':kill4_3',$_POST['kill4_3'], PDO::PARAM_STR);

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
                <label for="surv4_3" class="form-label">Survie</label>
                <input type="text" class="form-control" id="surv4_3" name="surv4_3" value="<?php if(isset($surv4_3)) echo $surv4_3; ?>" placeholder="surv4_3">
            </div>
                            <!-- kill1_3 -->
            <div class="">
                <label for="kill4_3" class="form-label">Tueur</label>
                <input type="text" class="form-control" id="kill4_3" name="kill4_3" value="<?php if(isset($kill4_3)) echo $kill4_3; ?>" placeholder="kill4_3">
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