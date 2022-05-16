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



    <button>RETOUR</button>
    <button>SUIVANT</button>



    </div>







    <footer>
        <div class="newsletter">
            <h2>Newsletter</h2>

            <div class="button_newsletter">
                <input type="Email">
                <button>Envoyer</button>
            </div>
        </div>

        <div class="nav">

            <div class="gauche">
                <div class="element_gauche">
                    <div class="logo_accueil">
                        <img src="../img/logo_discpline_responsive.svg" alt="handi_discipline">
                    </div>
                    <div class="nav_bar">
                        <a href="#">Trouve ton handisport</a>
                        <a href="#">Handisports</a>
                        <a href="#">Paralympique</a>
                        <a href="#">À propos</a>
                        <a href="#">Nous contacter</a>
                        <img src="../img/logo_equipement_responsive.svg" alt="handi_equipement">
                    </div>
                </div>
            </div>

            <div class="droite">
                <div class="mobile">

                    <div class="left_mobile">
                        <img src="../img/Path 110.svg" alt="logo_mobile">
                        <p>+123 456 789 234</p>
                    </div>
                    <a href="#" class="footer_a">Mobile</a>
                </div>

                <hr>

                <div class="mail">
                    <div class="left_mail">
                        <img src="../img/Path 50.svg" alt="logo_email">
                        <p>info@handicontact.com</p>
                    </div>
                    <a href="#" class="footer_a">Email</a>
                </div>

                <hr>

                <div class="reseaux_sociaux">
                    <img src="../assets/img/Icon-in.svg" alt="linkedin">
                    <img src="../assets/img/Icon-twitter.svg" alt="twitter">
                    <img src="../assets/img/Icon-facebook-f.svg" alt="facebook">
                    <img src="../assets/img/Icon-instagram.svg" alt="">

                </div>
            </div>

        </div>
    </footer>
</body>

</html>