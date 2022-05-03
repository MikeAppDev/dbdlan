<?php
require_once('../inc/init.php');

$score5 = $bdd->query("SELECT * FROM t5");

$t5 = $score5->fetch(PDO::FETCH_ASSOC);



if($_POST)
{
$envoi = $bdd->prepare("UPDATE t5 SET surv1_3 = :surv1_3, kill1_3 = :kill1_3");


            $envoi->bindValue(':surv1_3',$_POST['surv1_3'], PDO::PARAM_STR);
            $envoi->bindValue(':kill1_3',$_POST['kill1_3'], PDO::PARAM_STR);

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
                <label for="surv1_3" class="form-label">Survie</label>
                <input type="text" class="form-control" id="surv1_3" name="surv1_3" value="<?php if(isset($surv1_3)) echo $surv1_3; ?>" placeholder="surv1_3">
            </div>
                            <!-- kill1_3 -->
            <div class="">
                <label for="kill1_3" class="form-label">Tueur</label>
                <input type="text" class="form-control" id="kill1_3" name="kill1_3" value="<?php if(isset($kill1_3)) echo $kill1_3; ?>" placeholder="kill1_3">
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