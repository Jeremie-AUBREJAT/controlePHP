<?php
// Votre code de connexion à la DB
require_once('libs/Smarty.class.php');
$smarty = new Smarty;

$smarty->setTemplateDir('template');



$dsn = 'mysql:dbname=examphp;host=localhost';
$user = 'root';
$password = '';

$db = new PDO($dsn, $user, $password);
// Ma requête SQL non préparé
$serveur = "localhost"; // Adresse du serveur MySQL
$utilisateur = "root"; // Nom d'utilisateur MySQL
$motdepasse = ""; // Mot de passe MySQL
$base_de_donnees = "examphp"; // Nom de la base de données
$users = $db->query('SELECT * FROM utilisateurs');
var_dump($users->fetchAll());


?>