
<?php
include_once('../includes/init.php');
include_once('../admin/init.php');



$titre = 'Idée d\'activité handisport';
include_once('../includes/header.php');
?>
    <link rel="stylesheet" href="../assets/css/TTH.css">

    
   <div class="contenu">
       <h1>Répondez à ces brèves questions afin de connaître</h1>
        <h1>les sports adaptés correspondant le mieux</h1>
        <h1>à votre situation.</h1>
       <h2>As-tu une idée de l’activité que tu souhaites pratiquer ?</h2>



       <div class="choix_idee">
        <p>Oui, je fonce !</p>

          <label class="switch">
            <input type="checkbox" id="check_box" checked>
            <span class="slider round" id="slider_button"></span>
          </label>

        <p>Non, je souhaite être accompagné</p>
       </div>



       <div class="go">
       <button id="check_action">C'EST PARTI</button>


    </div>
    <img src="../img/formulaire/AdobeStock_209126661.jpg" alt="">
      




   </div>
   
   



<script>

let accompagnement = false;
let url = "";
let sliderButton = document.getElementById('slider_button');
sliderButton.addEventListener('click', function() {
  accompagnement ? accompagnement = false : accompagnement = true;
});

let submitButton = document.getElementById('check_action');
submitButton.addEventListener('click', function() {
  accompagnement ? url = "../handisports.php" : url = "Profil.php";
  window.location.href = url;
});
</script>

   <?php
    include_once('../includes/footer.php');
?>