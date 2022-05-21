<?php
include_once('../includes/init.php');
include_once('../admin/init.php');


$titre = '06. Motivations';
include_once('../includes/header.php');
?>
    <link rel="stylesheet" href="../assets/css/TTH.css">


   <div class="contenu">
    <div class="bar_nav_formulaire">
    <a href="Profil.php">01. Profil</a>
        <a href="Pratiques.php">02. Pratiques</a>
        <a href="Envies.php">03. Envies</a>
        <a href="Eviter.php" >04. Contre indications</a>
        <a href="Qualités.php">05. Qualités physique</a>
        <a href="#" class="active">06. Motivations</a>
    </div>

    <div class="info_motivations">
    <h1>
        MES 3 GRANDES MOTIVATIONS
    </h1>
    <h3>3 RÉPONSES MAXIMUM</h3>
    
    <div class="btn_contenu">
    <form class="buttons_motivations" action="">
    <div class="btn_A"><button>Me sentir bien</button></div>
    <div class="btn_B"><button>Me remettre au sport</button></div>
    <div class="btn_C"><button>Me dépasser</button></div>
    <div class="btn_D"><button>Me destresser</button></div>
    </form>

    <form class="buttons_motivations" action="">
        <div class="btn_A"><button>Gagner en autonomie</button></div>
        <div class="btn_B"><button>Rencontrer des gens</button></div>
        <div class="btn_C"><button>Performer</button></div>
        <div class="btn_D"><button>Perdre du poids</button></div>
        </form>
    </div>
    </div>

    <div class="groupe_btn">
    <a href="Qualités.php" class="button_retour">RETOUR</a>
    <button class="button_suivant" onclick="window.location.href = 'Sélection.php'">SUIVANT</button>
    </div>



   </div>
   
   



   <?php
    include_once('../includes/footer.php');
?>