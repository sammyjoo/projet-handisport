<?php
include_once('../includes/init.php');
include_once('../admin/init.php');


$titre = '1. Profil';
include_once('../includes/header.php');
?>
    <link rel="stylesheet" href="../assets/css/TTH.css">



   <div class="contenu">
    <div class="bar_nav_formulaire">
        <a href="#" class="active">01. Profil</a>

            <a href="Pratiques.php">02. Pratiques</a>
            <a href="Envies.php">03. Envies</a>
            <a href="Eviter.php" >04. Contre indications</a>
            <a href="Qualités.php">05. Qualités physique</a>
            <a href="Motivations.php">06. Motivations</a>
    </div>

    <div class="info_utilisateur">
    <h1>
        INFORMATION UTILISATEUR
    </h1>
    <p>Je m’appelle <input type="text" name="" id=""> , j’ai <input type="text" name="" id=""> ans.</p>
    <p>Je me déplace et/ou je veux pratiquer</p>
    
    <ul id="nav" class="drop">
            <li><a href="#">en fauteuil / assis</a></li>
         </ul>
   

    </div>

    <button class="button_profil" onclick="window.location.href = 'profil_handicap.php'">SUIVANT</button>



   </div>
   
   



   <?php
    include_once('../includes/footer.php');
?>