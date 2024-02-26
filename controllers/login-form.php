<?php
// Page inaccessible si la personne est connecté
// $fichier = file_get_contents('template/login.tpl');
// echo $fichier;
require_once('libs/Smarty.class.php');
$smarty = new Smarty;

$smarty->setTemplateDir('template');
$smarty->display('template/login.tpl');
?>