
<?php
include_once('../includes/init.php');
include_once('../admin/init.php');



$titre = 'Idée d\'activité handisport';
include_once('../includes/header.php');
?>
    <link rel="stylesheet" href="../assets/css/TTH.css">

    
   <div class="contenu contenu_tth">
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
       <button id="check_action">C'EST PARTI <img src="../assets/img/fleche.svg" alt="fleche bouton"></button>


    </div>

    <div class="go_img">
    
    <img class="course" src="../assets/img/formulaire/AdobeStock_128823582.jpg" alt="">
    <img class="basket" src="../assets/img/formulaire/AdobeStock_209126661.jpg" alt="">
    <img class="escrime" src="../assets/img/formulaire/AdobeStock_180468554.jpg" alt="">
    </div>
      
    <div class="design">
    <img class="design" src="../assets/img/SVG/design.svg" alt="">
    <img class="design" src="../assets/img/SVG/design.svg" alt="">
    <img class="design" src="../assets/img/SVG/design.svg" alt="">
    </div>




   </div>
   
   



<script src="../assets/js/TTH.js"></script>

   <?php
    include_once('../includes/footer.php');
  ?>