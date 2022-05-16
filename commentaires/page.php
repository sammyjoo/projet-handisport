

<?php
include_once('../includes/init.php');
include_once('../admin/init.php');



$titre = 'Témoignage_handisport';
include('../includes/header.php');
?>


<?php
//on définit notre variable pour pouvoir inclure les fichier
define("C2SCRIPT","peut être n'importe quoi ici");
include("fonctions/fonctions.php");

//on se connecte à la base de données (à adapter/remplacer avec votre système de connexion)
$BDD = array();
$BDD['serveur'] = "localhost";
$BDD['login'] = "root";
$BDD['pass'] = "root";
$BDD['bdd'] = "handi_scipline";
$mysqli = mysqli_connect($BDD['serveur'],$BDD['login'],$BDD['pass'],$BDD['bdd']);
if(!$mysqli) exit('Connexion MySQL non accomplie!');


?>

<link rel="stylesheet" href="../assets/css/commentaires.css">


<div class="contenu_temoignage">

	<div class="title_trait">
    <h1>Témoignages</h1>
	</div>

	<div class="intro">
	<h2>Ils partagent leurs expériences</h2>
	<p> Nous leur laissons la parole afin d’inspirer les autres et démontrer que la pratique sportive est possible.<br>Parents, aidants, sportifs, dirigeants de clubs et encadrants vous racontent ce que la pratique du sport apporte de différentes manières…</p>
	</div>

	<div class="commentaires">
		<div class="form_commentaire">

			<h2>Vous souhaitez laisser votre témoignage ?</h2>
			<?php
			//on affiche le formulaire pour poster un commentaire
			afficherFormulaireCommentaire("page.php",123);
			?>
    	</div>

		<div class="poste_commentaire">
			<h2>Commentaires postés</h2>
			<div class="contenu_com">
			<?php
			afficherCommentaires(123);
			?>
			</div>
		</div>
	</div>

</div>
	<?php
    include_once('../includes/footer.php');
?>