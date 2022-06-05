
<?php
include_once('../includes/init.php');
include_once('../admin/init.php');


$titre = '03 - Envies';
include_once('../includes/header.php');
?>
    <link rel="stylesheet" href="../assets/css/TTH.css">


   <div class="contenu">
    <div class="bar_nav_formulaire">
        <a href="Profil.php" >01. Profil</a>
        <a href="Pratiques.php" >02. Pratiques</a>
        <a href="Envies.php" class="active">03. Envies</a>
        <a href="Eviter.php">04. Contre indications</a>
        <a href="Qualités.php">05. Qualités physique</a>
        <a href="Motivations.php">06. Motivations</a>
    </div>

    <div class="info_envies">
    <h1>
        JE SOUHAITE FAIRE UN SPORT
    </h1>
    
    <div id="button_ev" class="btn_pratiques">
                <button class="btn_collectif effect">
                   <p>COLLECTIF</p> 
                </button>

                <button class="btn_individuel effect">
                   <p>INDIVIDUEL</p> 
                </button>

                <button class="btn_importe effect">
                   <p>PEU IMPORTE</p> 
                </button>
            </div>
  
  
    </div>

    <div class="groupe_btn">
    <a href="Profil.php" class="button_retour">RETOUR</a>
    <button class="button_suivant" onclick="window.location.href = 'Eviter.php'">SUIVANT</button>
    </div>

   </div>
   
   



   <?php
    include_once('../includes/footer.php');
?>