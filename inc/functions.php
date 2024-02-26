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
// require_once('db.php');
// Je vérifie si le formulaire a été envoyé
// if(isset($_POST['submit']))
// {
//     // Je vérifie si mes champs ont une valeur
//     if(!empty($_POST['email']) && !empty($_POST['password']))
//     {
//         // Je fais ma requête pour vérifier si j'ai un user
//         $req = $dbh->query('SELECT * FROM users WHERE email = "'.$_POST['email'].'" LIMIT 1');
//         if($req->rowCount() == 1)
//         {
//             // Je range les infos du user dans un tableau associatif
//             $user = $req->fetch(PDO::FETCH_ASSOC);
//             // Je vérifie si le mot de passe est bon
//             if(password_verify($_POST['password'],$user['password'])){
//                 // On va lui envoyer un mail
//                 use PHPMailer\PHPMailer\PHPMailer;
//                 use PHPMailer\PHPMailer\SMTP;
//                 use PHPMailer\PHPMailer\Exception;

//                 //Load Composer's autoloader
//                 require 'vendor/autoload.php';

//                 //Create an instance; passing `true` enables exceptions
//                 $mail = new PHPMailer(true);

//                 try {
                    
//                     $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
//                     $mail->isSMTP();                                          
//                     $mail->Host       = 'dwwm2324.fr';                     
//                     $mail->Username   = 'contact@dwwm2324.fr';                     
//                     $mail->Password   = 'm%]E5p2%o]yc';                             
//                     $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;           
//                     $mail->Port       = 465;                                    

                    
//                     $mail->setFrom('contact@dwwm2324.fr', 'PHP life');
//                     $mail->addAddress($user['email'],$user['nom']);     
                  
//                     $mail->isHTML(true);                                  
//                     $mail->Subject = 'Connexion à votre compte';
//                     $mail->Body    = 'Un utilisateur vient de se connecter (ip ='.$_SERVER['REMOTE_ADDR'].')';
//                     $mail->AltBody = 'Un utilisateur vient de se connecter (ip ='.$_SERVER['REMOTE_ADDR'].')';

//                     $mail->send();
//                     echo 'Vous êtes connecté';
//                 } catch (Exception $e) {
//                     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
//                 }
//             }
//         }
//     }
// }
?>