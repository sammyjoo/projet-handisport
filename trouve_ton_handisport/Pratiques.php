<?php
include_once('../includes/init.php');
include_once('../admin/init.php');


$titre = '02 - Pratiques';
include_once('../includes/header.php');
?>
    <link rel="stylesheet" href="../assets/css/TTH.css">


   <div class="contenu">
    <div class="bar_nav_formulaire">
        <a href="#" >01. Profil</a>
        <a href="#" class="active">02. Pratiques</a>
        <a href="#">03. Envies</a>
        <a href="#">04. Contre indications</a>
        <a href="#">05. Qualités physique</a>
        <a href="#">06. Motivations</a>
    </div>

    <div class="info_pratiques">
    <h1>
        JE SOUHAITE PRATIQUER
    </h1>
    
    <img src="../assets/img/formulaire/AdobeStock_180468554.jpg" alt="">
  
    </div>

    <div class="groupe_btn">
    <a href="Profil_handicap.php" class="button_retour">RETOUR</a>
    <button class="button_suivant" onclick="window.location.href = 'Envies.php'">SUIVANT</button>
    </div>



   </div>
   
   




   <?php
    include_once('../includes/footer.php');
?>