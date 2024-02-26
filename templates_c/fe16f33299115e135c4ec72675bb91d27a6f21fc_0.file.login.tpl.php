<?php
/* Smarty version 3.1.48, created on 2024-02-26 14:20:49
  from 'C:\laragon\www\controlePHP\template\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_65dc9e417b3f08_51179850',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe16f33299115e135c4ec72675bb91d27a6f21fc' => 
    array (
      0 => 'C:\\laragon\\www\\controlePHP\\template\\login.tpl',
      1 => 1708950542,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65dc9e417b3f08_51179850 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="login-container">
        <form action=".?route=login" method="POST">
            <h2>Se connecter</h2>
            <label for="username">Email:</label>
            <input type="email" id="username" name="username" required>
            
            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Se connecter</button>
            <a href="?route=register" class="button">S'inscrire</a>
        </form>
    </div>
</body>
</html>
<?php }
}
