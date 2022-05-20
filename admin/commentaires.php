

<?php
    // inclusion du fichier init.php (connnexion à la bdd, session, variables, fonctions etc...)
    include_once('init.php');

    if(adminConnecte())
    {
        if(isset($_GET['delete_id'])) {
            $pdoStatementObjectDelete = $pdoObject->prepare("DELETE FROM commentaires WHERE id=:id");
            $pdoStatementObjectDelete->bindValue(":id", $_GET['delete_id']);
            $pdoStatementObjectDelete->execute();
        }
        // traitement de la page
        // Ici, se fait en une seule étape
        // Car il n'y a pas de marqueur auquel on associe une variable dans cette requête
        $pdoStatementObject = $pdoObject->query("SELECT * FROM commentaires");
        // Récupérer la réponse
        // $membreQuantity = $pdoStatementObject->rowCount();
        $commentaires = $pdoStatementObject->fetchAll();

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
        <h2>Commentaires</h2>
        <table>
            <thead>
                <tr>
                    <th></th>
                    <th>Id</th>
                    <th>Auteur</th>
                    <th>Mail</th>
                    <th>Contenu</th>
                    <th>Id de l'article</th>
                    <th>Date</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($commentaires as $commentaire) {  
                    ?>
                    <tr>
                        <td><a href="commentaires.php?delete_id=<?=$commentaire['id'];?>">Supprimer</a></button></td>
                        <td><?=$commentaire['id'];?></td>
                        <td><?=$commentaire['pseudo'];?></td>
                        <td><?=$commentaire['mail'];?></td>
                        <td><?=$commentaire['commentaire'];?></td>
                        <td><?=$commentaire['id_article'];?></td>
                        <td><?=date("d-m-Y H:i", $commentaire['quand']);?></td>
                    </tr>
                <?php
            }
        ?>
            </tbody>
        </table>
        <!-- <a href="inscription.php">ajouter un membre</a> -->
        </div> 
      <!--  include_once('../commentaires/page.php');?> -->


    <?php else : ?>
        <!-- Erreur 403, car l'utilisateur n'est pas admin -->
        <?php include_once('../includes/403.php'); ?>
    <?php endif; ?>



