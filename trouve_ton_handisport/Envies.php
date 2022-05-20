
<?php
include_once('../includes/init.php');
include_once('../admin/init.php');


$titre = '03 - Envies';
include_once('../includes/header.php');
?>
    <link rel="stylesheet" href="../assets/css/TTH.css">


   <div class="contenu">
    <div class="bar_nav_formulaire">
        <a href="#" >01. Profil</a>
        <a href="#" >02. Pratiques</a>
        <a href="#" class="active">03. Envies</a>
        <a href="#">04. Contre indications</a>
        <a href="#">05. Qualités physique</a>
        <a href="#">06. Motivations</a>
    </div>

    <div class="info_envies">
    <h1>
        JE SOUHAITE FAIRE UN SPORT
    </h1>
    
    <img src="../assets/img/formulaire/AdobeStock_128823582.jpg" alt="">
  
    </div>

    <div class="groupe_btn">
    <a href="Envies.php" class="button_retour">RETOUR</a>
    <button class="button_suivant" onclick="window.location.href = 'Eviter.php'">SUIVANT</button>
    </div>

   </div>
   
   



   <?php
    include_once('../includes/footer.php');
?>