<?php

    include_once("init.php");
    
    if(membreConnecte()) {
        unset($_SESSION['membre']);

        // Redirection vers la page Connexion
        header('Location:' . URL . "admin/connexion.php"); exit; // redirection
    } else {
        $titre = 'Déconnexion';
        include_once('../includes/header.php');
        include_once('../includes/403.php');
        include_once('../includes/footer.php');
        
    }
    

    

?>