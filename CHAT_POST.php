<?php
// Connexion à la base de données
require_once("dbconnect.php");

// Insertion du message à l'aide d'une requête préparée
$req = $bdd->prepare('INSERT INTO USER (pseudo, message) VALUES(?, ?)');
$req->execute(array($_POST['pseudo'], $_POST['message']));

// Redirection du visiteur vers la page du minichat
header('Location: index.php');
?>