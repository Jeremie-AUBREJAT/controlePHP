<?php
// Page inaccessible si la personne est connecté
// $file = file_get_contents('template/logout.tpl');
// echo $file;
require_once('libs/Smarty.class.php');
$smarty = new Smarty;

$smarty->setTemplateDir('template');
$smarty->display('template/logout.tpl');
?>