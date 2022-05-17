

<?php
    include_once('./init.php');


    if(!membreConnecte())
    {
        $errEmail = "";
        $errFirstname = "";
        $errLastname = "";
        $errPwd = "";

        $valueEmail = "";
        $valueFirstname = "";
        $valueLastname = "";
        $valuePwd = "";

        if($_POST) // /!empty($_POST) : si $_POST n'est pas vide.
        {
            tableau($_POST); // cf functions.php

            $valueEmail = $_POST['email'];
            $valueFirstname = $_POST['firstname'];
            $valueLastname = $_POST['lastname'];

            

            foreach($_POST as $key => $value)
            {
                if(!empty($value))
                {
                    $counter++; 
                } else {
                    $notification = "<div class='alert alert-danger text-center col-md-6 mx-auto'>Veuillez remplir l'intégralité du formulaire.</div>";
                }
            }

            // Aucun champ ne doit être vide
            if($counter > 0)
            {   
                // L'email ne doit pas exister en BDD
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
                    if(!$membreArray) // est vide
                    {
                        // Les mots de passe ne doivent pas être identiques
                        if($_POST['password'] !== $_POST['password-confirm'])
                        {
                            $acces = false;
                            $errPwd = "<div class='text-danger'>Les deux mots de passe ne sont pas identiques.</div>";
                        }
                        if(strlen($_POST['firstname']) < 2 || strlen($_POST['firstname']) > 50)
                        {
                            $acces = false;
                            $errFirstname = "<div class='text-danger'>Veuillez saisir un prénom entre 2 et 50 caractères.</div>";
                        }
                        if(strlen($_POST['lastname']) < 2 || strlen($_POST['lastname']) > 50)
                        {
                            $acces = false;
                            $errLastname = "<div class='text-danger'>Veuillez saisir un nom entre 2 et 50 caractères.</div>";
                        }

                        if($acces) // === true
                        {
                            // hasher le mdp
                            // password_hash() permet de hasher un mdp
                            // 2 args :     // str : le mdp à hasher
                                            // la clé de hashage (PASSWORD_DEFAULT...)
                            $hashed_pwd = password_hash($_POST['password'], PASSWORD_DEFAULT);
                            // echo $hashed_pwd; 
                            // die; // permet d'interrompre la lecture du code
                            
                            // insérer en BDD
                            // 1e étape : préparation de la requête, avec des marqueurs (pas les variables en clair)
                            $pdoStatementObject = $pdoObject->prepare("INSERT INTO membres (firstname, lastname, email, password, statut, date_reg) VALUES (:firstname, :lastname, :email, :password, :statut, :date_reg)");

                            // 2e étape : associer les marqueurs à leurs valeurs et leurs types
                            $pdoStatementObject->bindValue(":firstname", $_POST['firstname'], PDO::PARAM_STR);
                            $pdoStatementObject->bindValue(":lastname", $_POST['lastname'], PDO::PARAM_STR);
                            $pdoStatementObject->bindValue(":email", $_POST['email'], PDO::PARAM_STR);
                            $pdoStatementObject->bindValue(":password", $hashed_pwd, PDO::PARAM_STR);
                            $pdoStatementObject->bindValue(":statut", 0, PDO::PARAM_INT);
                            $pdoStatementObject->bindValue(":date_reg", date("Y-m-d H:i:s"), PDO::PARAM_STR);
                            
                            // 3e étape : exécuter la requête
                            $pdoStatementObject->execute();



                            // message success
                            // $notification = "<div class='alert alert-success text-center col-md-6 mx-auto'>Vous êtes inscrit !</div>";
                            $_SESSION['notification']['membre'] = "inscrire";

                            // redirection
                            header('Location:' . URL . "connexion.php"); exit; // exit; permet de ne pas lire dava

                            // $valueEmail = "";
                            // $valueFirstname = "";
                            // $valueLastname = "";
                            // $valuePwd = "";
                        }



                    } else { // SINON, le mail existe en BDD, et $membreArray est un tableau contenant les données du compte associé à cet email
                        $notification = "<div class='alert alert-danger text-center col-md-6 mx-auto'>Cet email est associé à un compte déjà existant.</div>";
                        tableau($membreArray);
                    }

                } else {
                    $notification = "<div class='alert alert-danger text-center col-md-6 mx-auto'>Veuillez saisir un email.</div>";
                }


            } else {
                $notification = "<div class='alert alert-danger text-center col-md-6 mx-auto'>Veuillez remplir le formulaire.</div>";
            }


        } // fermeture du if($_POST)
    } 
    $titre = 'Inscription';
    include_once('../includes/header.php');
?>


<?= $notification ?>

<?php if(!membreConnecte()) : ?> <!-- false : membre non connecté -->
    <form action="" method="POST" id="form" class="col-md-4 mx-auto">
        <div class="form-group mt-2">
            <label for="email">E-mail</label>
            <input type="email" class="form-control" name="email" id="email" value="<?= $valueEmail ?>">
            <?= $errEmail ?> 
        </div>
        <div class="form-group mt-2">
            <label for="firstname">Prénom</label>
            <input type="text" class="form-control" name="firstname" id="firstname" value="<?= $valueFirstname ?>">
            <?= $errFirstname ?> 
        </div>
        <div class="form-group mt-2">
            <label for="lastname">Nom</label>
            <input type="text" class="form-control" name="lastname" id="lastname" value="<?= $valueLastname ?>">
            <?= $errLastname ?> 
        </div>
        <div class="form-group mt-2">
            <label for="password">Mot de passe</label>
            <input type="password" class="form-control" name="password" id="password">
            <?= $errPwd ?> 
        </div>
        <div class="form-group mt-2">
            <label for="password">Confirmez le mot de passe</label>
            <input type="password" class="form-control" name="password-confirm" id="password-confirm">
        </div>
        <button type="submit" class="btn btn-primary btn-block mt-3">M'inscrire</button>
    </form>
<?php else : ?><!-- true : membre connecté -->
    <?php include_once("../includes/403.php"); ?>
<?php endif; ?>





<?php
    include_once('../includes/footer.php');
?>
