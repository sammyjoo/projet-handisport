<?php
include_once('../includes/init.php');
include_once('../admin/init.php');


$titre = '05 - Qualités physique ';
include_once('../includes/header.php');
?>
    <link rel="stylesheet" href="../assets/css/selection.css">


    <div class="contenu">

    <h1>Voici notre sélection d’activités pour toi !</h1>

    <div class="btn_selection">
        <a href="#" class="_g"><img src="../assets/img/fleche_g.svg" alt="fleche bouton">MODIFIER MES CRITÈRES </a>
        <a href="#">VOIR TOUTES LES DISCIPLINES<img src="../assets/img/fleche.svg" alt="fleche bouton"></a>
    </div>

    <div class="result">
    <div class="choix_1">
    <div class="n1">
    <p>01</p> 
    </div>
    <div class="rang">
        <button onclick="window.location.href = '../fiches_handisport/basket.php'" ><img src="../assets/img/SVG/basket.svg" alt="icon basket"> <p>Basket en fauteuil</p></button>
    </div>
    </div>

    <div class="choix_1">
    <div class="n1">
    <p>02</p> 
    </div>
    <div class="rang">
        <button onclick="window.location.href = 'fiches_handisport/basket.php'" ><img src="../assets/img/SVG/tennis_de_table.svg" alt="icon tennis"> <p>Tennis de table</p></button>
    </div>
    <div class="rang">
        <button onclick="window.location.href = 'fiches_handisport/basket.php'" ><img src="../assets/img/SVG/tir_a_larc.svg" alt="icon Tir"> <p>Tir à l’arc</p></button>
    </div>
    <div class="rang">
        <button onclick="window.location.href = 'fiches_handisport/basket.php'" ><img src="../assets/img/SVG/rugby_a_xiii.svg" alt="icon rubgy"> <p>Rugby</p></button>
    </div>

    </div>

    <div class="choix_1">
    <div class="n1">
    <p>03</p> 
    </div>
    <div class="rang btn2">
        <button onclick="window.location.href = 'fiches_handisport/basket.php'" ><img src="../assets/img/SVG/tir.svg" alt="icon tir"> <p>Tir</p></button>
    </div>
    </div>


    



    </div>

    <div class="modifier">
        <p>D’autres sports te sont accessibles, n’hésites pas à aller plus loin dans les choix en</p>
        <p>consultant le listing de toutes les disciplines</p> 

        <div class="btn_modif">
        <button onclick="window.location.href = 'Profil_handicap.php'">MODIFIER MES CRITÈRES</button>
        <button onclick="window.location.href = '../Handisports.php'">VOIR TOUTES LES DISCIPLINES</button>
        </div>

    </div>
    </div>






    <?php
    include_once('../includes/footer.php');
?>