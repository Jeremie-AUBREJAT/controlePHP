<?php
// $fichier = file_get_contents('template/upload.tpl');
// echo $fichier;
require_once('libs/Smarty.class.php');
$smarty = new Smarty;

$smarty->setTemplateDir('template');
$smarty->display('template/upload.tpl');
?>