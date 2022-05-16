<?php

// fonction pour afficher un tableau sans avoir à toujours réécrire les echo/print_r
function tableau($tableau) {
    echo "<hr>";
    echo "<pre>";
    print_r($tableau);
    echo "</pre>";
    echo "<hr>";
    
}

function membreConnecte() // bool
{ 
    if(isset($_SESSION['membre']))
    {
        return true;
    } else {
        return false;
    }
}

function adminConnecte() // bool
{
    if(membreConnecte() && $_SESSION['membre']['statut'] == 1)
    {
        return true;
    } 
    else 
    {
        return false;
    }
}
?>