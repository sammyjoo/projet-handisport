
<?php
include_once('../includes/init.php');
include_once('../admin/init.php');



$titre = 'Fiche Basket';
include_once('../includes/header.php');
?>
    <link rel="stylesheet" href="../assets/css/fiches.css">







    <div class="titre_image">
        <h1>
            BASKET FAUTEUIL
        </h1>
    </div>


    <div class="histoire">
        
        <h2>Histoire de la discipline</h2>
        <p>A l’origine, le basket en chaise roulante fut conçu comme moyen de rééducation pour les soldats de la seconde guerre mondiale présentant des lésions de la moëlle épinière. Il fait partie des huit sports qui ont fait leurs débuts aux premiers Jeux Paralympiques à Rome en 1960.</p>
    </div>

    <div class="presentation">
        <h2>Présentation de la discipline</h2>

<script type="text/javascript">
	function montrerCacher(unDiv)
	{
		if (unDiv.style.overflowY == "hidden")
		{
			unDiv.style.overflowY = "";
			unDiv.style.height = "auto";
		}
		else
		{
			unDiv.style.overflowY = "hidden";
			unDiv.style.height = "50px";
		}
	}
</script>

<div id="p" class="paragraphe" style="width:950px; height:100px; border:none; overflow-y:hidden;">
    
    Le basket fauteuil se joue en fauteuil roulant, par équipes de 5 joueur(se)s.
    <br><br>
    La pratique du basket-ball en compétition nécessite un fauteuil roulant spécifique, conçu en tenant compte des mensurations, du type de handicap et du rôle du joueur sur le terrain.
    <br><br>
    Les équipes sont composées de joueurs de handicaps physiques différents. Chacun(e) se voit attribuer, en fonction des caractéristiques de son handicap physique dans le jeu, un nombre de points individuel allant de 1 à 4,5 (5 points pour un joueur valide autorisé à jouer en championnat de France uniquement). Au total, sur le terrain, aucune équipe ne doit représenter un total de points supérieur à 14 points (International), 14,5 (Nationale A).
    <br><br>
    Les règles du para-basket-ball sont volontairement très proches de celles du basket-ball “traditionnel” afin de faciliter la pratique et l’adaptation des arbitres et entraineurs.
    <br><br>
    Ainsi, les dimensions du terrain, la hauteur du panier, le temps de jeu, le mode de comptabilisation des points sont inchangés.
    <br><br>
    Par contre, certaines règles sont modifiées en raison des contraintes liées à l’usage d’un fauteuil roulant par l’ensemble des joueur(se)s. La reprise de dribble est autorisée et la règle du “marché” est remplacée par une limitation du nombre de poussées sur les roues du fauteuil roulant. De même, lors du jugement de toutes les fautes liées au contact entre les joueur(se)s, le fauteuil est considéré comme faisant partie du joueur.
    

</div>
    <button class="button_cache" onclick="javascript:montrerCacher(document.getElementById('p'));">More Learn <img src="../assets/img/fleche_jaune.svg" alt="fleche bouton"></div>

</div>

    <div class="publics">
        <h2>Publics concernés</h2>
        <p>Il s’adresse aux personnes dont le handicap physique ne permet pas ou plus la pratique du basket-ball traditionnel.</p>
        
    </div>

    <div class="Matériel">
        <h2>Matériel spécifique utilisé</h2>
        <p>     Sport d’équipe dont le principe est le même que pour le basket debout, les dimensions du terrain et la hauteur du panier restent les mêmes. Les règles du jeu ne sont que très légèrement adaptées. Par exemple, un joueur sera sanctionné d’un « marcher » si quand il est en possession du ballon, il fait plus de deux poussées sur ses roues sans dribbler, tirer ou faire une passe.</p>

        
    </div>
    </div>

    <!--section bleu-->

    <div class="section_bleu">

        <div class="handi_groupe">
        <h1>HANDI'QUIPEMENTS</h1>

        <div class="handi_quipements">


        <img src="../assets/img/handisports/basket/acc fauteuil 2 achat.jpg" alt="handi équipements achat">
    

        <img src="../assets/img/handisports/basket/acc fauteuil 4 achat.jpg" alt="achat fauteuil">

        <img src="../assets/img/handisports/basket/acc fauteuil 5 achat.jpg" alt="materiel handisport">

        <img src="../assets/img/handisports/basket/basketFauteuiloriginal.jpg" alt="handi'quipements">

        

    </div>
    <a href="http://handiquipements.local/boutique/" target="_blank" class="icon_fleche">Voir les articles <img src="../assets/img/fleche_jaune.svg" alt="fleche bouton"></a>
</div>

<div class="intro">
    <h1>QU’EST-CE QUE HANDI’QUIPEMENTS ?</h1>
    <p>Handi’quiment est un service d’hébergement et d’intermédiation en ligne qui permet aux Utilisateurs d’échanger, de vendre et d’acheter des objets sur sa plateforme.<br><br> Handi’quiment facilite ces transactions et permet aux Utilisateurs de communiquer par messages privés ou en postant des messages sur le forum. Handi’quiment propose également des services supplémentaires payants pour sécuriser ces transactions (les « Services de Protection Acheteur ») ou pour améliorer la visibilité des articles qu’ils mettent en vente (comme le « boost d’article » ou le « Dressing en Vitrine »).</p>
    <a href="#">Découvrir comment ça marche <img src="../assets/img/fleche_jaune.svg" alt="fleche bouton"></a>
</div>
    <div class="club_proximite">
    <h1>Où pratiquer ?</h1>
    <p>Un annuaire interactif des structures sportives qui déclarent accueillir ou être en capacité d’accueillir des pratiquants sportifs…</p>
    <div class="bouton_recherche">
    <input type="text">
    <button>Rechercher</button>
</div>
    </div>
    </div>












    <?php
    include_once('../includes/footer.php');
?>