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
            <a href="Pratiques.php">02. Pratiques</a>
            <a href="Envies.php">03. Envies</a>
            <a href="Eviter.php" >04. Contre indications</a>
            <a href="Qualités.php">05. Qualités physique</a>
            <a href="Motivations.php">06. Motivations</a>
    </div>

    <div class="info_handicap">
    <h1>
        MON HANDICAP
    </h1>
    <h3>PLUSIEURS RÉPONSES POSSIBLES</h3>
    
    <ul id='button_ev' class="buttons_form">
    <li class="btn_1 effect ">Je suis en fauteuil électrique</li>
    <li class="btn_2 effect">Je suis hémiparétique</li>
    <li class="btn_3 effect">Atteinte des membres supérieurs</li>
    <li class="btn_4 effect">Pas d’atteintes des membres supérieurs</li>
    </ul>

    <style>
        .effect.done {
  background: white;
  color: red;
}
    </style>
 
   
  
    </div>

    <div class="groupe_btn">
    <a href="Profil.php" class="button_retour">RETOUR</a>
    <button class="button_suivant" onclick="window.location.href = 'Pratiques.php'">SUIVANT</button>
    </div>
    



   </div>
   
   <script>
       let list = document.querySelector('#button_ev');
list.addEventListener('click', function(ev) { console.log(ev.target.innerHTML)
  if( ev.target.tagName === 'LI') {
     ev.target.classList.toggle('done');
  }
}, false);

console.log(list)


   </script>   

<?php
 include_once('../includes/footer.php');
?>