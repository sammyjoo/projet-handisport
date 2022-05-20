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

        <ul id="nav" class="drop">
           <li ><a href="<?= URL ?>trouve_ton_handisport/TTH.php">Trouve ton handisport</a></li> 

            <li >
                <a href="#">Handisports</a>
                <ul >
                    <li >
                        <a href="#"> Santé et bien-être</a>
                    </li>
                    <li >
                        <a href="<?= URL ?>handisports.php"> Discipline</a>
                    </li>
                </ul>

            </li>

            <li ><a href="#">Paralympique</a></li>
            <li ><a href="#">Handi'quipement</a></li>
        </ul>




        <?php if(adminConnecte()) : ?> <!-- Admin -->
          
        <div class="admin_nav">
            <ul id="nav" class="drop">
            <li><a class="admin" href="#">Admin</a>
                <ul>
                    <li>
                    <a class="admin" href="<?= URL ?>admin/dashboard.php">Tableau de bord</a>
                    </li>
                    <li>
                    <a class="admin" href="<?= URL ?>admin/commentaires.php">Commentaires</a>
                    </li>
                    <li>
                    <a class="admin" href="<?= URL ?>admin/deconnexion.php">Déconnexion</a>
                    </li>
                </ul>
            </li>
            </ul>
       
        </div>
<?php elseif(membreConnecte()) : ?> <!-- Membre -->

        <li><a class="membre" href="<?= URL ?>deconnexion.php">Déconnexion</a></li>


<?php else: ?> <!-- Non connecté -->
    <input type="text" alt="Recherche">
<?php endif; ?>

    </li>
</ul>

    

</div>

        
    </header>