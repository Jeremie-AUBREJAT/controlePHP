<?php
// require('routers/index.php');
// Vos fonctions (token, traitement des fichiers etc...)
$dsn = 'mysql:dbname=examphp;host=localhost';
$user = 'root';
$password = '';

$db = new PDO($dsn, $user, $password);

$serveur = "localhost"; 
$utilisateur = "root"; 
$motdepasse = ""; 
$users = $db->query('SELECT * FROM utilisateurs');
var_dump($users->fetchAll());


if(isset($_POST['submit']))
{
    if(!empty($_POST['username'])&& !empty($_POST['password'])&& !empty($_POST['confirm-password']))
    {
        $req=$dbh->prepare("INSERT INTO utilisateurs(email, password) VALUES(:username, :password");
        $req->bindParam(":email",$_POST['username']);
        $req->bindParam(":password",$_POST['password']);
        // $req->bindParam(":confirm-password",$_POST['confirm-password']);
        
        
        if($_req->execute()){
            echo "inscription ok";
        }else{
            echo "probleme inscrition";
        }
    }else{
        echo "erreur d envoi";
    }}

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
    
    }
    session_start();
if(isset($_POST['submit']))
{
    if(!empty($_POST['username']) && !empty($_POST['password']))
    {
        
        // On vérifie si les valeurs sont dans la session
        if(($_POST['username'] == $_SESSION['username']) && password_verify($_POST['password'],$_SESSION['password']))
        {
            echo 'Vous êtes connecté';
        }
        else
        {
            echo 'Tu as rien à faire là !';
        }
    }
}
?>