<?php
require_once('../inc/init.php');

$score = $bdd->query("SELECT * FROM t1");
$score2 = $bdd->query("SELECT * FROM t2");
$score3 = $bdd->query("SELECT * FROM t3");
$score4 = $bdd->query("SELECT * FROM t4");
$teamdemi = $bdd->query("SELECT * FROM teamdemi");
$teamfinal = $bdd->query("SELECT * FROM teamfinal");
$score5 = $bdd->query("SELECT * FROM t5");

$t1 = $score->fetch(PDO::FETCH_ASSOC);
$t2 = $score2->fetch(PDO::FETCH_ASSOC);
$t3 = $score3->fetch(PDO::FETCH_ASSOC);
$t4 = $score4->fetch(PDO::FETCH_ASSOC);
$td = $teamdemi->fetch(PDO::FETCH_ASSOC);
$tf = $teamfinal->fetch(PDO::FETCH_ASSOC);
$t5 = $score5->fetch(PDO::FETCH_ASSOC);
//  echo'<pre>'; print_r($t1surv); echo '</pre>';

require_once('../inc/header.php');
require_once('../inc/nav.php');

?>
        <!-- Groupe -->
        <h2 class="groupe" style="font-size:45px; margin-top: 20px;">Groupe</h2>

        <div style="display: flex; justify-content: center; align-items: center; padding: 5px; font-size: 30px">
            <p class="surv" style="padding: 10px;">Survivant</p>
            <p class="killer" style="padding: 10px;">Tueurs</p>
        </div>
        <div class="container" style="display: flex; justify-content: center; flex-wrap: wrap;">
            <div class="groupe">
                <table summary="">
                    <caption>Groupe A</caption>

                    <tr>
                        <th></th>
                        <th>Unity</th>
                        <th>Dead light</th>
                        <th>The Eclipse</th>
                        <th>Los Turistas</th>
                    </tr>
                    <tr>
                        <td>Unity</td>
                        <td class="mid"></td>
                        <td><span class="surv"><?= $t1['surv1_2']?></span> - <span class="killer"><?= $t1['kill1_2']?></span></td>
                        <td><span class="surv"><?= $t1['surv1_3']?></span> - <span class="killer"><?= $t1['kill1_3']?></span></td>
                        <td><span class="surv"><?= $t1['surv1_4']?></span> - <span class="killer"><?= $t1['kill1_4']?></span></td>
                    </tr>
                    <tr>
                        <td>Deadlight</td>
                        <td><span class="surv"><?= $t1['surv2_1']?></span> - <span class="killer"><?= $t1['kill2_1']?></span></td>
                        <td class="mid"></td>
                        <td><span class="surv"><?= $t1['surv2_3']?></span> - <span class="killer"><?= $t1['kill2_3']?></span></td>
                        <td><span class="surv"><?= $t1['surv2_4']?></span> - <span class="killer"><?= $t1['kill2_4']?></span></td>
                    </tr>
                    <tr>
                        <td>The Eclipse</td>
                        <td><span class="surv"><?= $t1['surv3_1']?></span> - <span class="killer"><?= $t1['kill3_1']?></span></td>
                        <td><span class="surv"><?= $t1['surv3_2']?></span> - <span class="killer"><?= $t1['kill3_2']?></span></td>
                        <td class="mid"></td>
                        <td><span class="surv"><?= $t1['surv3_4']?></span> - <span class="killer"><?= $t1['kill3_4']?></span></td>
                    </tr>
                    <tr>
                        <td class="">Los Turistas</td>
                        <td><span class="surv"><?= $t1['surv4_1']?></span> - <span class="killer"><?= $t1['kill4_1']?></span></td>
                        <td><span class="surv"><?= $t1['surv4_2']?></span> - <span class="killer"><?= $t1['kill4_2']?></span></td>
                        <td><span class="surv"><?= $t1['surv4_3']?></span> - <span class="killer"><?= $t1['kill4_3']?></span></td>
                        <td class="mid"></td>
                    </tr>
                </table>
            </div>
            <div class="groupe">
            <table summary="">
                    <caption>Groupe B</caption>

                    <tr>
                        <th></th>
                        <th>Survi vors</th>
                        <th>D.K.D</th>
                        <th>Soc. Bal.</th>
                        <th>Osiris</th>
                    </tr>
                    <tr>
                        <td>Survivors</td>
                        <td class="mid"></td>
                        <td><span class="surv"><?= $t2['surv1_2']?></span> - <span class="killer"><?= $t2['kill1_2']?></span></td>
                        <td><span class="surv"><?= $t2['surv1_3']?></span> - <span class="killer"><?= $t2['kill1_3']?></span></td>
                        <td><span class="surv"><?= $t2['surv1_4']?></span> - <span class="killer"><?= $t2['kill1_4']?></span></td>
                    </tr>
                    <tr>
                        <td>D.K.D</td>
                        <td><span class="surv"><?= $t2['surv2_1']?></span> - <span class="killer"><?= $t2['kill2_1']?></span></td>
                        <td class="mid"></td>
                        <td><span class="surv"><?= $t2['surv2_3']?></span> - <span class="killer"><?= $t2['kill2_3']?></span></td>
                        <td><span class="surv"><?= $t2['surv2_4']?></span> - <span class="killer"><?= $t2['kill2_4']?></span></td>
                    </tr>
                    <tr>
                        <td>Socquette Balayette</td>
                        <td><span class="surv"><?= $t2['surv3_1']?></span> - <span class="killer"><?= $t2['kill3_1']?></span></td>
                        <td><span class="surv"><?= $t2['surv3_2']?></span> - <span class="killer"><?= $t2['kill3_2']?></span></td>
                        <td class="mid"></td>
                        <td><span class="surv"><?= $t2['surv3_4']?></span> - <span class="killer"><?= $t2['kill3_4']?></span></td>
                    </tr>
                    <tr>
                        <td class="">Osiris</td>
                        <td><span class="surv"><?= $t2['surv4_1']?></span> - <span class="killer"><?= $t2['kill4_1']?></span></td>
                        <td><span class="surv"><?= $t2['surv4_2']?></span> - <span class="killer"><?= $t2['kill4_2']?></span></td>
                        <td><span class="surv"><?= $t2['surv4_3']?></span> - <span class="killer"><?= $t2['kill4_3']?></span></td>
                        <td class="mid"></td>
                    </tr>
                </table>
            </div>
            <div class="groupe">
            <table summary="">
                    <caption>Groupe C</caption>

                    <tr>
                        <th></th>
                        <th>Les Rou blards</th>
                        <th>Guéla léhir</th>
                        <th>Infinity</th>
                        <th>Dissidia</th>
                    </tr>
                    <tr>
                        <td>Les Roublards</td>
                        <td class="mid"></td>
                        <td><span class="surv"><?= $t3['surv1_2']?></span> - <span class="killer"><?= $t3['kill1_2']?></span></td>
                        <td><span class="surv"><?= $t3['surv1_3']?></span> - <span class="killer"><?= $t3['kill1_3']?></span></td>
                        <td><span class="surv"><?= $t3['surv1_4']?></span> - <span class="killer"><?= $t3['kill1_4']?></span></td>
                    </tr>
                    <tr>
                        <td>Guélaléhir</td>
                        <td><span class="surv"><?= $t3['surv2_1']?></span> - <span class="killer"><?= $t3['kill2_1']?></span></td>
                        <td class="mid"></td>
                        <td><span class="surv"><?= $t3['surv2_3']?></span> - <span class="killer"><?= $t3['kill2_3']?></span></td>
                        <td><span class="surv"><?= $t3['surv2_4']?></span> - <span class="killer"><?= $t3['kill2_4']?></span></td>
                    </tr>
                    <tr>
                        <td>Infinity</td>
                        <td><span class="surv"><?= $t3['surv3_1']?></span> - <span class="killer"><?= $t3['kill3_1']?></span></td>
                        <td><span class="surv"><?= $t3['surv3_2']?></span> - <span class="killer"><?= $t3['kill3_2']?></span></td>
                        <td class="mid"></td>
                        <td><span class="surv"><?= $t3['surv3_4']?></span> - <span class="killer"><?= $t3['kill3_4']?></span></td>
                    </tr>
                    <tr>
                        <td class="">Dissidia</td>
                        <td><span class="surv"><?= $t3['surv4_1']?></span> - <span class="killer"><?= $t3['kill4_1']?></span></td>
                        <td><span class="surv"><?= $t3['surv4_2']?></span> - <span class="killer"><?= $t3['kill4_2']?></span></td>
                        <td><span class="surv"><?= $t3['surv4_3']?></span> - <span class="killer"><?= $t3['kill4_3']?></span></td>
                        <td class="mid"></td>
                    </tr>
                </table>
            </div>
            <div class="groupe">
            <table summary="">
                    <caption>Groupe D</caption>

                    <tr>
                        <th></th>
                        <th>Black& White</th>
                        <th>IPMX</th>
                        <th>TISS Team</th>
                        <th>Gar goyles</th>
                    </tr>
                    <tr>
                        <td>Black& White</td>
                        <td class="mid"></td>
                        <td><span class="surv"><?= $t4['surv1_2']?></span> - <span class="killer"><?= $t4['kill1_2']?></span></td>
                        <td><span class="surv"><?= $t4['surv1_3']?></span> - <span class="killer"><?= $t4['kill1_3']?></span></td>
                        <td><span class="surv"><?= $t4['surv1_4']?></span> - <span class="killer"><?= $t4['kill1_4']?></span></td>
                    </tr>
                    <tr>
                        <td>IPMX</td>
                        <td><span class="surv"><?= $t4['surv2_1']?></span> - <span class="killer"><?= $t4['kill2_1']?></span></td>
                        <td class="mid"></td>
                        <td><span class="surv"><?= $t4['surv2_3']?></span> - <span class="killer"><?= $t4['kill2_3']?></span></td>
                        <td><span class="surv"><?= $t4['surv2_4']?></span> - <span class="killer"><?= $t4['kill2_4']?></span></td>
                    </tr>
                    <tr>
                        <td>TISS Team</td>
                        <td><span class="surv"><?= $t4['surv3_1']?></span> - <span class="killer"><?= $t4['kill3_1']?></span></td>
                        <td><span class="surv"><?= $t4['surv3_2']?></span> - <span class="killer"><?= $t4['kill3_2']?></span></td>
                        <td class="mid"></td>
                        <td><span class="surv"><?= $t4['surv3_4']?></span> - <span class="killer"><?= $t4['kill3_4']?></span></td>
                    </tr>
                    <tr>
                        <td class="">Gargoyles</td>
                        <td><span class="surv"><?= $t4['surv4_1']?></span> - <span class="killer"><?= $t4['kill4_1']?></span></td>
                        <td><span class="surv"><?= $t4['surv4_2']?></span> - <span class="killer"><?= $t4['kill4_2']?></span></td>
                        <td><span class="surv"><?= $t4['surv4_3']?></span> - <span class="killer"><?= $t4['kill4_3']?></span></td>
                        <td class="mid"></td>
                    </tr>
                </table>
            </div>
        </div>
        
        <!-- Bracket Final -->

        <!-- <h2 class="groupe" style="font-size:45px; margin-top: 30px;">Tree</h2> -->
        <div class="container" style="display: flex; justify-content: space-around;">
            <div class="title">
                <div><h2>Demi Final</h2></div>
                <div><h2>Final</h2></div>
            </div>
        </div>
        <div class="container" style="display: flex; justify-content: center;">
        
            <div class="bracket">
                <div class="bracket__bloc">
                    <div class="bracket__demi">
                        <div class="bracket__fight">
                                <div class="bracket__team">
                                    <?= $td['team1']?>
                                </div>
                                <div class="bracket__team">
                                    <?= $td['team2']?>
                                </div>
                        </div>
                        <div class="bracket__fight">
                                <div class="bracket__team">
                                    <?= $td['team3']?>
                                </div>
                                <div class="bracket__team">
                                    <?= $td['team4']?>
                                </div>
                        </div>
                    </div>

                    <div class="bracket__demi bracket__demi__result">
                        <div class="bracket__fight">
                                <div class="bracket__teamR"><!-- add qual class if Win -->
                                    <span class="surv"><?= $t5['surv1_2']?></span>
                                </div>
                                <div class="bracket__teamR">
                                    <span class="killer"><?= $t5['kill1_2']?></span>
                                </div>
                                
                        </div>
                        <div class="bracket__fight">
                                <div class="bracket__teamR">
                                    <span class="surv"><?= $t5['surv1_4']?></span>
                                </div>
                                <div class="bracket__teamR">
                                    <span class="killer"><?= $t5['kill1_4']?></span>
                                </div>
                                
                        </div>
                    </div>
                    <div class="bracket__demi bracket__demi__result">
                        <div class="bracket__fight">
                                <div class="bracket__teamR">
                                    <span class="killer"><?= $t5['kill1_3']?></span>
                                </div>
                                <div class="bracket__teamR">
                                    <span class="surv"><?= $t5['surv1_3']?></span>
                                </div>
                                
                        </div>
                        <div class="bracket__fight">
                                <div class="bracket__teamR">
                                    <span class="killer"><?= $t5['kill2_1']?></span>
                                </div>
                                <div class="bracket__teamR">
                                    <span class="surv"><?= $t5['surv2_1']?></span>
                                </div>
                        </div>
                    </div>
                </div>

                <div class="bracket__contentlink">
                    <div class="bracket__link2">
                    <img class="separation" src="../dist/assets/img/links-mob.png" alt="img test">
                    </div>
                </div>
            
                <div class="bracket__bloc">
                    <div class="bracket__final">
                        <div class="bracket__fight">
                            <!-- add qual class if Win -->
                            <div class="bracket__team">
                                <?= $tf['team1']?>
                            </div>
                            <div class="bracket__team">
                                <?= $tf['team2']?>
                            </div>
                        </div>
                    </div>
                    <div class="bracket__final bracket__final__result">
                        <div class="bracket__fight">
                                <div class="bracket__teamR">
                                    <span class="surv"><?= $t5['surv2_3']?></span>
                                </div>
                                <div class="bracket__teamR">
                                    <span class="killer"><?= $t5['kill2_3']?></span>
                                </div>
                        </div>
                    </div>
                    <div class="bracket__final bracket__final__result">
                        <div class="bracket__fight">
                                <div class="bracket__teamR">
                                    <span class="killer"><?= $t5['kill2_4']?></span>
                                </div>
                                <div class="bracket__teamR">
                                    <span class="surv"><?= $t5['surv2_4']?></span>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
		</div>


        <!-- <div class="container" style="display: flex; justify-content: space-around;">
            <div>
                <div> . </div>
                <div> . </div>
                <div>team 1</div>
                <div>team 2</div>
                <div>team 3</div>
                <div>team 4</div>
            </div>
            <div>
                <div>match</div>
            </div>
            <div>
                <div>Surv</div>
                <div></div>
            </div>
            <div>
                <div>tueur</div>
            </div>
            <div>
                <div>Total</div>
            </div>
        </div> -->

<?php

require_once('../inc/footer.php');

?>