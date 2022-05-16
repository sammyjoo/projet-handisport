<?php
include_once('../includes/init.php');
include_once('../admin/init.php');


$titre = '01. Profil - mon handicap';
include_once('../includes/header.php');
?>
    <link rel="stylesheet" href="../assets/css/TTH.css">


   <div class="contenu">
    <div class="bar_nav_formulaire">
        <a href="#" class="active">01. Profil</a>
        <a href="#">02. Pratiques</a>
        <a href="#">03. Envies</a>
        <a href="#">04. Contre indications</a>
        <a href="#">05. Qualités physique</a>
        <a href="#">06. Motivations</a>
    </div>

    <div class="info_handicap">
    <h1>
        MON HANDICAP
    </h1>
    <h3>PLUSIEURS RÉPONSES POSSIBLES</h3>
    
    <form class="buttons_form" action="">
    <div class="btn_1"><button>Je suis en fauteuil électrique</button></div>
    <div class="btn_2"><button>Je suis hémiparétique</button></div>
    <div class="btn_3"><button>Atteinte des membres supérieurs</button></div>
    <div class="btn_4"><button>Pas d’atteintes des membres supérieurs</button></div>
    </form>
  
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
                    <img src="../img/Icon-in.svg" alt="linkedin">
                    <img src="../img/Icon-twitter.svg" alt="twitter">
                    <img src="../img/Icon-facebook-f.svg" alt="facebook">
                    <img src="../img/Icon-instagram.svg" alt="">

                </div>
            </div>

        </div>
    </footer>
</body>
</html>