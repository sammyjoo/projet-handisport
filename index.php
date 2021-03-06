

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="trouve ton handisport">
    <meta name="author" content="sammy-jo">
    <meta name="keywords" content="sport handisport santé JO paralympique paris 2024">
    <link rel="stylesheet" href="<?= URL ?>assets/css/header.css">
</head>

<?php
include_once('./includes/init.php');
include_once('./admin/init.php');


$titre = 'Accueil';
include_once('./includes/header.php');


define("C2SCRIPT","peut être n'importe quoi ici");
include_once("commentaires/fonctions/fonctions.php");

//on se connecte à la base de données (à adapter/remplacer avec votre système de connexion)
$BDD = array();
$BDD['serveur'] = "localhost";
$BDD['login'] = "root";
$BDD['pass'] = "root";
$BDD['bdd'] = "handi_scipline";
$mysqli = mysqli_connect($BDD['serveur'],$BDD['login'],$BDD['pass'],$BDD['bdd']);
if(!$mysqli) exit('Connexion MySQL non accomplie!');


?>

    <link rel="stylesheet" href="assets/css/accueil.css">

    <div class="handi_equipement">

        <h1>HANDI'</h1>

        <h2> QUIPEMENTS</h2>

        <h3 class="noResponsive">vendez vos équipements handisport</h3>
        <h3 class="responsive">vendez vos<br> équipements handisport</h3>
        <div class="button_equipement">
            <button class="effect_buttons" >Vends maintenant</button>
            <a href="http://handiquipements.local/">Découvrir comment ça marche <img src="assets/img/fleche.svg" alt="fleche bouton"></a>
        </div>
    </div>

    <div class="three_blocs">
        <div class="box1">
            <div class="white_opacity">
                <h2>COMPÉTION, LOISIRS</h2>
                <h2 class="position_h2"> & PERFORMANCES</h2>
                <p>Trouve ton Handisport</p>
            </div>
        </div>

        <div class="box2">
            <div class="white_opacity">
                <h2>DÉCOUVRIR LE MEILLEUR </h2>
                <h2 class="position_h2">DU HANDISPORT</h2>
                <p>Les Handisports</p>
            </div>
        </div>

        <div class="box3">
            <div class="white_opacity">
                <h2>LES HANDISPORTS AUTOUR</h2>
                <h2 class="position_h2"> DE CHEZ TOI</h2>
                <p>Les clubs handisport</p>
            </div>
        </div>

    </div>

    <div class="bien_etre">
        <div class="position_bien_etre">
            <h1>SANTÉ</h1>
            <h1>BIEN-ÊTRE</h1>
            <h2>HANDISPORT</h2>

            <p>Les bénéfices possibles de la pratique<br> sportive pour une personne en situation <br> de handicap</p>

            <button class="effect_buttons">Découvrir les bien-faits</button>
        </div>
    </div>



    <div class="temoignages">

    <div class="commentaire">
    <p class="red"> " </p> <?php afficherCommentaires(123, 1); ?> <p class="red"> " </p> 
    </div>
   <!-- <p>le commentaire : php echo $_GET('commentaire');  </p> -->

        <button class="active_btn effect_buttons" onclick="window.location.href = 'commentaires/page.php'"> Tous les témoignage</button>
    </div>

    <div class="club_proximite">
        <p class="noResponsive">Trouvez votre structure sportive à proximité</p>
        <p class="responsive">Trouvez votre structure </p>
        <p class="responsive">sportive à proximité</p>

        <input type="text">
        <button class="effect_buttons"> Recherche </button>
    </div>

    <div class="insta">
        <div class="insta_description">
        <h2>Dernières actualités</h2>
        <h3>@Handi'scipline</h3>
        </div>

        <div class="insta_img">
        <img src="assets/img/accueil/IMG_0633.jpg" alt="insta">
        <img src="assets/img/accueil/IMG_0634.png" alt="insta">
        <img src="assets/img/accueil/IMG_0635.PNG" alt="insta">
        <img src="assets/img/accueil/IMG_0636.PNG" alt="insta">

    
         </div>


        <button class="effect_buttons">Découvrir</button>

    </div>

    <div class="partenaires">
        <h1>Partenaires</h1>
        <div class="logos_partenaires">
            <div class="nike">
                <img src="assets/img/accueil/logo-nike.png" alt="nike">
            </div>

            <div class="ministere_sport">
                <img src="assets/img/accueil/Ministere-Education-Nationale-Jeunesse-Sports.logo_.png"
                    alt="Ministere des education nationale jeunesse sport">
            </div>

            <div class="federation_handisport">
                <img src="assets/img/accueil/1200px-Fédération_française_handisport_logo_2009.png"
                    alt="federation francaise handisport">
            </div>
        </div>
    </div>


    <?php
    include_once('./includes/footer.php');
?>