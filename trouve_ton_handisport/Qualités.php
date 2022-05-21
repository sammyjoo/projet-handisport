<?php
include_once('../includes/init.php');
include_once('../admin/init.php');


$titre = '05 - Qualités physique ';
include_once('../includes/header.php');
?>
    <link rel="stylesheet" href="../assets/css/TTH.css">


    <div class="contenu">
        <div class="bar_nav_formulaire">
            <a href="Profil.php">01. Profil</a>
            <a href="Pratiques.php">02. Pratiques</a>
            <a href="Envies.php">03. Envies</a>
            <a href="Eviter.php" >04. Contre indications</a>
            <a href="Qualités.php" class="active">05. Qualités physique</a>
            <a href="Motivations.php">06. Motivations</a>
        </div>

        <div class="info_eviter">
            <h1>
                JE SOUHAITE ÉVITER
            </h1>
            <h3>PLUSIEURS RÉPONSES POSSIBLES</h3>

            <div class="btn_qualites">
                <button class="btn_physique">
                    <img src="../assets/img/SVG/force.svg" alt="">
                    Force
                </button>

                <button class="btn_physique">
                    <img src="../assets/img/SVG/vitesse.svg" alt="">
                    Vitesse
                </button>

                <button class="btn_physique">
                    <img src="../assets/img/SVG/souplesse.svg" alt="">
                    Souplesse
                </button>

                <button class="btn_physique">
                    <img src="../assets/img/SVG/endurance.svg" alt="">
                    Endurance
                </button>

                <button class="btn_physique">
                    <img src="../assets/img/SVG/equilibre.svg" alt="">
                    Equilibre
                </button>

                <button class="btn_physique">
                    <img src="../assets/img/SVG/adresse.svg" alt="">
                    Adresse
                </button>
            </div>
            <div class="btn_eviter2">
                <button>Aucune, je passe à la question suivante !</button>
            </div>

        </div>
        <div class="groupe_btn">
    <a href="Eviter.php" class="button_retour">RETOUR</a>
    <button class="button_suivant" onclick="window.location.href = 'Motivations.php'">SUIVANT</button>
    </div>

    </div>












    <?php
    include_once('../includes/footer.php');
?>