<?php
require_once("headerHTML.php");
?>
<?php
// Connexion à la base de données
require_once("dbconnect.php");

// Récupération des 10 derniers messages
$reponse = $bdd->query('SELECT pseudo, message FROM USER ORDER BY ID DESC LIMIT 0, 10');

// Affichage de chaque message (toutes les données sont protégées par htmlspecialchars)
while ($donnees = $reponse->fetch())
{
	echo '<p><strong>' . htmlspecialchars($donnees['pseudo']) . '</strong> : ' . htmlspecialchars($donnees['message']) . '</p>';
}

$reponse->closeCursor();

?>
<?php
   require_once("footerHTML.php");
   ?>