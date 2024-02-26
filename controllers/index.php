<?php
// Page accessible uniquement aux personnes connectées
// require_once('autoload.php');

// $fichier = file_get_contents('template/index.tpl');
// echo $fichier;
require_once('libs/Smarty.class.php');
$smarty = new Smarty;

// $smarty->setTemplateDir('templates_c');
$smarty->display('template/index.tpl');

?>