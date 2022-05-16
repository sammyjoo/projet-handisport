<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="<?= URL ?>assets/css/header.css">
    <title><?php echo $titre ?></title>
</head>

<body>

    <header>
        <img src="<?= URL ?>assets/img/logo_handi_discipline.svg" alt="logo_handi_discipline" onclick="window.location.href = '<?= URL ?>index.php'">

        <div class="bar_nav">
            <a href="<?= URL ?>trouve_ton_handisport/TTH.php">Trouve ton handisport</a>
            <a href="<?= URL ?>handisports.php">Handisports</a>
            <a href="#">Paralympique</a>
            <a href="#">Handi'quipement</a>
        </div>

        <input type="text" alt="Recherche">


        <?php if(adminConnecte()) : ?> <!-- Admin -->
            

        <a class="admin" href="<?= URL ?>admin/deconnexion.php">Déconnexion</a>
  

<?php elseif(membreConnecte()) : ?> <!-- Membre -->

        <li><a class="membre" href="<?= URL ?>deconnexion.php">Déconnexion</a></li>


<?php else: ?> <!-- Non connecté -->

<?php endif; ?>

    </li>
</ul>

    

</div>

        
    </header>