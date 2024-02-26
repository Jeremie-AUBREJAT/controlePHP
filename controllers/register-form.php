<?php
// Page inaccessible si la personne est connecté
//  $file = file_get_contents('template/register.tpl');
//  echo $file;
require_once('inc/functions.php');
require_once('libs/Smarty.class.php');
$smarty = new Smarty;

$smarty->setTemplateDir('template');
$smarty->display('template/register.tpl');
?>