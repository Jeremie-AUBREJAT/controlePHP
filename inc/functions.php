<?php
// require('routers/index.php');
// Vos fonctions (token, traitement des fichiers etc...)
//  require_once('libs/Smarty.class.php');
//  $smarty = new Smarty;

//  $smarty->setTemplateDir('templates');


$dsn = 'mysql:dbname=examphp;host=localhost';
$user = 'root';
$password = '';


$db = new PDO($dsn, $user, $password);

// Ma requête SQL non préparé
$serveur = "localhost"; // Adresse du serveur MySQL
$utilisateur = "root"; // Nom d'utilisateur MySQL
$motdepasse = ""; // Mot de passe MySQL
$base_de_donnees = "examphp"; // Nom de la base de données



if(isset($_POST['submit']))
{
    if(!empty($_POST['username'])&& !empty($_POST['password'])&& !empty($_POST['confirm-password']))
    {
    

// Hasher le mot de passe
        $motDePasseHashé = password_hash($_POST['password'], PASSWORD_DEFAULT);        
        $req=$db->prepare("INSERT INTO utilisateurs (email,password) VALUES (:username, :password)");
        $req->bindParam(":username",$_POST['username']);
        $req->bindParam(":password",$motDePasseHashé);
       
        
        if($req->execute()){
            echo "inscription ok";
        }else{
            echo "probleme inscrition";
        }
    }else{
        echo "erreur d envoi";
    }
};
    session_start();
    if(isset($_POST['submit']))
    {
        // On vérifie si les champs ont une valeur
        if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['confirm-password']))
        {
            $motdepasse = password_hash($_POST['password'],PASSWORD_DEFAULT);
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['password'] = $motdepasse;
    
            {
                // On prépare notre ligne CSV
                $donnees = $_POST['username'].';'.$motdepasse."\n";
                // J'insère ma nouvelle ligne
                fwrite($fp,$donnees);
                // Je ferme mon fichier
                fclose($fp);
                echo 'Inscription réussie';
    
            }
        }
    
    };

?>