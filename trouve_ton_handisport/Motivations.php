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
    
    <div  class="btn_contenu">
    <form id="button_ev" class="buttons_motivations" action="">
    <div class="btn_A"><button class="effect">Me sentir bien</button></div>
    <div class="btn_B"><button class="effect">Me remettre au sport</button></div>
    <div class="btn_C"><button class="effect">Me dépasser</button></div>
    <div class="btn_D"><button class="effect">Me destresser</button></div>
    </form>

    <form class="buttons_motivations" action="">
        <div class="btn_A"><button class="effect">Gagner en autonomie</button></div>
        <div class="btn_B"><button class="effect">Rencontrer des gens</button></div>
        <div class="btn_C"><button class="effect">Performer</button></div>
        <div class="btn_D"><button class="effect">Perdre du poids</button></div>
        </form>
    </div>
    </div>

    <div class="groupe_btn">
    <a href="Qualités.php" class="button_retour">RETOUR</a>
    <button class="button_suivant" onclick="window.location.href = 'Sélection.php'">SUIVANT</button>
    </div>



   </div>
   
   



   <style>
        .effect.done {
  background: white;
  color: red;
  opacity: 100%;
  
}
    </style>
   
   <script>
       let list = document.querySelector('#button_ev');
       Array.from(list.children).forEach(button => {
        button.addEventListener('click', () => {
            button.classList.toggle('done');
        });
       });
// list.addEventListener('click', function(ev) { console.log(ev.target.innerHTML)
//   if( ev.target.tagName === 'EMPTY STRING') {
//      ev.target.classList.toggle('done');
//   }
// }, false);

console.log(list)


   </script> 

   <?php
    include_once('../includes/footer.php');
?>