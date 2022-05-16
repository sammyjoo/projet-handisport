
<?php
include_once('./includes/init.php');
include_once('./admin/init.php');



$titre = 'Handisports';
include_once('./includes/header.php');
?>
    <link rel="stylesheet" href="assets/css/handisports.css">


<div class="bloc1">
    <h2>Tous les handisports</h2>
    <a href="">RETOUR</a>
</div>
<div class="liste_handisport">
    <div class="rang">
        <button onclick="window.location.href = 'fiches_handisport/basket.php'" ><img src="assets/img/SVG/basket.svg" alt="icon basket"> <p>Basket en fauteuil</p></button>
        <button><img src="assets/img/SVG/force.svg" alt="icon basket"> <p>Basket en fauteuil</p></button>
        <button><img src="assets/img/SVG/tennis_de_table.svg" alt="icon basket"><p>Basket en fauteuil</p></button>
    </div>

    <div class="rang">
        <button><img src="assets/img/SVG/tir_a_larc.svg" alt="icon basket"> <p>Basket en fauteuil</p></button>
        <button><img src="assets/img/SVG/vitesse.svg" alt="icon basket"> <p>Basket en fauteuil</p></button>
        <button><img src="assets/img/SVG/rugby_a_xiii.svg" alt="icon basket"><p>Basket en fauteuil</p></button>
    </div>

    <div class="rang">
        <button><img src="assets/img/SVG/tennis_de_table.svg" alt="icon basket"> <p>Basket en fauteuil</p></button>
        <button class="special"><img src="assets/img/SVG/tir.svg" alt="icon basket"> <p>Basket en fauteuil</p></button>
        <button class="special"><img src="assets/img/SVG/aquatique.svg" alt="icon basket"><p>Basket en fauteuil</p></button>
    </div>

    <div class="rang_final">
        <div class="box">
            <img src="assets/img/logo_discipline_responsive_color.svg" alt="logo handi_discipline">
            <button>TROUVE TON HANDISPORT <img src="assets/img/fleche.svg" alt="bouton fleche"> </button>
        </div>
        <div class="box">
            <img src="assets/img/logo_equipement_responsive_color.svg" alt="logo handi_equipement">
            <button>TROUVE TON HANDI ÉQUIPEMENT <img src="assets/img/fleche.svg" alt="bouton fleche"></button>
        </div>

    </div>




</div>




<?php
    include_once('./includes/footer.php');
?>