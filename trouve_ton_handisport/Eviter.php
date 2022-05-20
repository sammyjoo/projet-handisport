<?php
include_once('../includes/init.php');
include_once('../admin/init.php');


$titre = '04 - Contre indications';
include_once('../includes/header.php');
?>
    <link rel="stylesheet" href="../assets/css/TTH.css">


    <div class="contenu">
        <div class="bar_nav_formulaire">
            <a href="#">01. Profil</a>
            <a href="#">02. Pratiques</a>
            <a href="#">03. Envies</a>
            <a href="#" class="active">04. Contre indications</a>
            <a href="#">05. Qualités physique</a>
            <a href="#">06. Motivations</a>
        </div>

        <div class="info_eviter">
            <h1>
                JE SOUHAITE ÉVITER
            </h1>
            <h3>PLUSIEURS RÉPONSES POSSIBLES</h3>

            <div class="btn_eviter">
                <button class="btn_chocs">
                    <img src="../assets/img/SVG/chocs_chutes_plongeons.svg" alt="">
                    Chocs, Chutes <br> et plongeons
                </button>

                <button class="btn_chocs">
                    <img src="../assets/img/SVG/efforts.svg" alt="">
                    Efforts violents
                </button>

                <button class="btn_chocs">
                    <img src="../assets/img/SVG/musculation.svg" alt="">
                    Travaille de musculation
                </button>

                <button class="btn_chocs">
                    <img src="../assets/img/SVG/aquatique.svg" alt="">
                    Activités,<br> aquatiques,<br> nautiques
                </button>
            </div>
            <div class="btn_eviter2">
                <button>Rien, je suis prêt(e) a tout !</button>
            </div>

        </div>
    </div>


    <div class="groupe_btn">
    <a href="Envies.php" class="button_retour">RETOUR</a>
    <button class="button_suivant" onclick="window.location.href = 'Qualités.php'">SUIVANT</button>
    </div>


    </div>





    <?php
    include_once('../includes/footer.php');
?>