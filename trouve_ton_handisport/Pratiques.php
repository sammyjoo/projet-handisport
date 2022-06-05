<?php
include_once('../includes/init.php');
include_once('../admin/init.php');


$titre = '02 - Pratiques';
include_once('../includes/header.php');
?>
    <link rel="stylesheet" href="../assets/css/TTH.css">


   <div class="contenu">
    <div class="bar_nav_formulaire">
        <a href="Profil.php">01. Profil</a>
        <a href="#" class="active">02. Pratiques</a>
        <a href="Envies.php">03. Envies</a>
        <a href="Eviter.php" >04. Contre indications</a>
        <a href="Qualités.php">05. Qualités physique</a>
        <a href="Motivations.php">06. Motivations</a>
    </div>

    <div class="info_pratiques">
    <h1>
        JE SOUHAITE PRATIQUER
    </h1>
      
    <div id="button_ev" class="btn_pratiques">
                <button class="btn_loisir effect">
                   <p>EN LOISIR</p> 
                </button>

                <button class="btn_competition effect">
                   <p>COMPÉTITION</p> 
                </button>

                <button class="btn_importe effect">
                   <p>PEU IMPORTE</p> 
                </button>
            </div>
    </div>

    <div class="groupe_btn">
    <a href="Profil_handicap.php" class="button_retour">RETOUR</a>
    <button class="button_suivant" onclick="window.location.href = 'Envies.php'">SUIVANT</button>
    </div>



   </div>
   
   




   <?php
    include_once('../includes/footer.php');
?>