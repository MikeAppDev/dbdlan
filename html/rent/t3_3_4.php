<?php
require_once('../inc/init.php');

$score3 = $bdd->query("SELECT * FROM t3");

$t3 = $score3->fetch(PDO::FETCH_ASSOC);



if($_POST)
{
$envoi = $bdd->prepare("UPDATE t3 SET surv3_4 = :surv3_4, kill3_4 = :kill3_4");


            $envoi->bindValue(':surv3_4',$_POST['surv3_4'], PDO::PARAM_STR);
            $envoi->bindValue(':kill3_4',$_POST['kill3_4'], PDO::PARAM_STR);

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

                            <!-- surv3_4 -->
            <div class="">
                <label for="surv3_4" class="form-label">Survie</label>
                <input type="text" class="form-control" id="surv3_4" name="surv3_4" value="<?php if(isset($surv3_4)) echo $surv3_4; ?>" placeholder="surv3_4">
            </div>
                            <!-- kill3_4 -->
            <div class="">
                <label for="kill3_4" class="form-label">Tueur</label>
                <input type="text" class="form-control" id="kill3_4" name="kill3_4" value="<?php if(isset($kill3_4)) echo $kill3_4; ?>" placeholder="kill3_4">
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