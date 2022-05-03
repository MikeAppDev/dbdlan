<?php
require_once('../inc/init.php');

$score5 = $bdd->query("SELECT * FROM t5");

$t5 = $score5->fetch(PDO::FETCH_ASSOC);



if($_POST)
{
$envoi = $bdd->prepare("UPDATE t5 SET surv2_4 = :surv2_4, kill2_4 = :kill2_4");


            $envoi->bindValue(':surv2_4',$_POST['surv2_4'], PDO::PARAM_STR);
            $envoi->bindValue(':kill2_4',$_POST['kill2_4'], PDO::PARAM_STR);

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

                            <!-- surv2_4 -->
            <div class="">
                <label for="surv2_4" class="form-label">Survie</label>
                <input type="text" class="form-control" id="surv2_4" name="surv2_4" value="<?php if(isset($surv2_4)) echo $surv2_4; ?>" placeholder="surv2_4">
            </div>
                            <!-- kill2_4 -->
            <div class="">
                <label for="kill2_4" class="form-label">Tueur</label>
                <input type="text" class="form-control" id="kill2_4" name="kill2_4" value="<?php if(isset($kill2_4)) echo $kill2_4; ?>" placeholder="kill2_4">
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