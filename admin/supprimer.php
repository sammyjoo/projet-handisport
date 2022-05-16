<?php

    include_once('../../includes/init.php');

    if(adminConnecte())
    {
        // traitement de la page
        // Ici, se fait en une seule étape
        // Car il n'y a pas de marqueur auquel on associe une variable dans cette requête
        $pdoStatementObject = $pdoObject->query("SELECT * FROM membres");
        // Récupérer la réponse
        $quantity = $pdoStatementObject->rowCount();
    }

    $titre = "Supprimer un produit";
    include_once('../../includes/header.php');
?>


<?php if(adminConnecte()) : ?>
    <div class="col-md-10 mx-auto">

        <!-- <h1 class="text-center mt-3">Gestion des produits</h1> -->
        <a class="btn btn-info" href="<?= URL ?>admin/produit/afficher.php">Retour</a></li>

        

    </div>
<?php else : ?>
    <?php include_once("./includes/403.php"); ?>
<?php endif; ?>


<?php

    include_once('../../includes/footer.php');