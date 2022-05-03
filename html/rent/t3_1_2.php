<?php
require_once('../inc/init.php');

$score3 = $bdd->query("SELECT * FROM t3");

$t3 = $score3->fetch(PDO::FETCH_ASSOC);



if($_POST)
{
$envoi = $bdd->prepare("UPDATE t3 SET surv1_2 = :surv1_2, kill1_2 = :kill1_2");


            $envoi->bindValue(':surv1_2',$_POST['surv1_2'], PDO::PARAM_STR);
            $envoi->bindValue(':kill1_2',$_POST['kill1_2'], PDO::PARAM_STR);

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
                <label for="surv1_2" class="form-label">Survie</label>
                <input type="text" class="form-control" id="surv1_2" name="surv1_2" value="<?php if(isset($surv1_2)) echo $surv1_2; ?>" placeholder="surv1_2">
            </div>
                            <!-- kill1_2 -->
            <div class="">
                <label for="kill1_2" class="form-label">Tueur</label>
                <input type="text" class="form-control" id="kill1_2" name="kill1_2" value="<?php if(isset($kill1_2)) echo $kill1_2; ?>" placeholder="kill1_2">
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