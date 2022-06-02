

<?php
    // inclusion du fichier init.php (connnexion à la bdd, session, variables, fonctions etc...)
    include_once('init.php');

    if(adminConnecte())
    {
        // traitement de la page
        // Ici, se fait en une seule étape
        // Car il n'y a pas de marqueur auquel on associe une variable dans cette requête
        $pdoStatementObject = $pdoObject->query("SELECT * FROM membres");
        // Récupérer la réponse
        $membreQuantity = $pdoStatementObject->rowCount();
    } else {

    }

    $titre = 'Dashboard';
    include_once('../includes/header.php');
?>

    <?php if(adminConnecte()): ?>
        <link rel="stylesheet" href="../assets/css/dash.css">

       <div class="contenu_dash">
        <h1 class="alert alert-success text-center mt-3">Bienvenue <?php if(adminConnecte()) echo $_SESSION['membre']['firstname'];?></h1>
        <!-- contenu de la page -->
        <h2>Membres</h2>
        <p>Nombre d'inscrits : <span><?= $membreQuantity; ?></span></p>
        <h3><a href="commentaires.php">Gérer les commentaires</a></h3>
        
        <!-- <a href="inscription.php">ajouter un membre</a> -->
        </div> 
      <!--  include_once('../commentaires/page.php');?> -->


    <?php else : ?>
        <!-- Erreur 403, car l'utilisateur n'est pas admin -->
        <?php include_once('../includes/403.php'); ?>
    <?php endif; ?>



