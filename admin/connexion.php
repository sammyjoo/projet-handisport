

<?php
    include_once('init.php');
    include_once('../includes/header.php');
    

    

    if(!membreConnecte())
    {
        $errEmail = ""; 
        $errPwd = ""; 


        
        if(isset($_SESSION['notification'])  AND isset($_SESSION['notification']['membre']) AND $_SESSION['notification']['membre'] = "inscrire")
        {
            $notification = "<div class='alert alert-success text-center col-md-6 mx-auto disparition'>Vous êtes bien inscrit, vous pouvez vous connecter</div>";
        }

        if($_POST)
        {
            echo "DONNÉES SAISIES DANS LE FORMULAIRE<br>"; tableau($_POST);
            if($_POST["email"] && $_POST['password'])
            {
                if($_POST['email'])
                {

                    // 1e étape : préparation de la requête, avec des marqueurs (pas les variables en clair)
                    $pdoStatementObject = $pdoObject->prepare("SELECT * FROM membres WHERE email = :email");
                    // 2e étape : associer les marqueurs à leurs valeurs et leurs types
                    $pdoStatementObject->bindValue(":email", $_POST['email'], PDO::PARAM_STR);
                    // 3e étape : exécuter la requête
                    $pdoStatementObject->execute();
                    
                    // Récupérer la réponse
                    $membreArray = $pdoStatementObject->fetch();
                    
                    // Si l'email n'existe pas en BDD
                    if($membreArray) // est vide
                    {
                        echo "DONNÉES UTILISATEURS RÉCUPÉRÉES EN BDD<br>"; tableau($membreArray);
                        if($_POST['password'])
                        {
                            // Comparer le mot de passe saisi dans le formulaire
                            // et celui qui est hashé en BDD
                            // avec password_verify()
                            // 2 args : le mot de passe saisi,
                            //          le mot de passe hashé
                            if(!password_verify($_POST['email'], $membreArray['password'])) // true
                            {
                                // L'utilisateur est authentifié
                                $notification = "<div class='alert alert-success text-center col-md-6 mx-auto'>Vous êtes connecté <b>" . $membreArray['firstname'] . " " . $membreArray['lastname']. "</b>.</div>";

                                foreach($membreArray as $key => $value) {
                                    if($key !== 'password'){ // Pour ne pas injecter le mdp dans la $_SESSION
                                        $_SESSION['membre'][$key] = $value;
                                    }
                                }
                                echo "UTILISATEUR AUTHENTIFIÉ (<em>injecté depuis les données BDD de l'utilisateur vers l'index 'membre' de $ _ SESSION)</em><br>"; tableau($_SESSION);

                                // Redirection
                                // différentes selon le statut / rôle de l'utilisateur connecté
                                if($_SESSION['membre']['statut'] == 0) // user / client
                                {
                                    header('Location:' . URL); exit; // vers la page d'accueil
                                } elseif($_SESSION['membre']['statut'] == 1) 
                                {
                                    header('Location:' . URL . 'admin/dashboard.php'); exit;
                                }
                            } else { // false
                                $errPwd = "<div class='text-danger text-center'>Mot de passe incorrect</div>";
                            }

                        } else {
                            $errPwd = "<div class='text-danger text-center'>Veuillez saisir votre mot de passe.</div>";
                        }
                        
                    } else { // SINON, le mail existe en BDD, et $membreArray est un tableau contenant les données du compte associé à cet email
                        $notification = "<div class='alert alert-danger text-center col-md-6 mx-auto'>Cet email n'est associé à aucun compte existant.</div>";
                        
                    }
                }

            } else {
                $notification = "<div class='alert alert-danger text-center col-md-6 mx-auto'>Veuillez remplir le formulaire.</div>";
            }

        }
    }

    $titre = 'Connexion';
    include_once('./includes/header.php');
?>
    
<?= $notification ?>

<?php if(!membreConnecte()) : ?> <!-- false : membre non connecté -->

    <link rel="stylesheet" href="../assets/css/connexion.css">

    
    <div class="contenu_connexion">
    <h1>CONNEXION ADMINISTRATEUR</h1>

    <form action="" method="POST" id="form" class="col-md-4 mx-auto">
        <div class="form-mail">
            <label for="email">E-mail</label>
            <div class="in_mail">
            <input type="email" class="form-control" name="email" id="email" 
            value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>">
            <?= $errEmail ?> 
            </div>
        </div>

        <div class="form-mdp">
            <label for="password">Mot de passe</label>
            <div class="in_mdp">
            <input type="password" class="form-control" name="password" id="password">
            <?= $errPwd ?>
            </div> 
        </div>
        <button type="submit" class="btn btn-primary btn-block mt-3">Se connecter</button>
    </form>
    </div>
<?php else : ?><!-- true : membre connecté -->
    <?php include_once("../includes/403.php"); ?>
<?php endif; ?>


    
    
    



<?php
    include_once('../includes/footer.php');
?>
