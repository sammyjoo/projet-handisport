<?php 

    $pdoObject = new PDO(
        "mysql:host=localhost; dbname=handi_scipline",
        "root",
        "root",
        array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING, // rapports d'erreur
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", // forcer l'encodage utf8
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC // par défaut
        )
    );

// SESSION

session_start();

// CONSTANTES

define("URL", "http://localhost:8888/handi_scipline/");

// VARIABLES

$notification = "";
$counter = 0;
$acces = true;

foreach($_POST as $key => $value)
{
    $_POST[$key] = strip_tags($value);
}
// strip_tags() permet de supprimer les balises et de les convertir en texte brut qui ne sera pas interprété comme du code
// trim() permet de supprimer les espaces en début et fin de chaîne


// Fonctions
include_once('functions.php');

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";
//echo "$ _ SESSION<br>"; tableau($_SESSION); // cf le fichier functions.php
// tableau($_POST);

