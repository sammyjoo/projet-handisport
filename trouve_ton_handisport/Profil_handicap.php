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
    
    <ul class="buttons_form">
    <li class="btn_1 effect ">Je suis en fauteuil électrique</li>
    <li class="btn_2 effect">Je suis hémiparétique</li>
    <li class="btn_3 effect">Atteinte des membres supérieurs</li>
    <li class="btn_4 effect">Pas d’atteintes des membres supérieurs</li>
    </ul>

    <style>
        html body div.contenu div.info_handicap ul.buttons_form li.btn_2.effect.done {
  background: #CCFF99;
}
    </style>
 
   
  
    </div>

    <div class="groupe_btn">
    <a href="Profil.php" class="button_retour">RETOUR</a>
    <button class="button_suivant" onclick="window.location.href = 'Pratiques.php'">SUIVANT</button>
    </div>
    



   </div>
   
   <script>
       let list = document.querySelector('ul');
list.addEventListener('click', function(ev) {
  if( ev.target.tagName === 'LI') {
     ev.target.classList.toggle('done');
  }
}, false);

console.log(list)

document.getElementsByClassName

   </script>   

<?php
 include_once('../includes/footer.php');
?>