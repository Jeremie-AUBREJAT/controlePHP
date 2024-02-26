<?php
/* Smarty version 3.1.48, created on 2024-02-26 14:14:23
  from 'C:\laragon\www\controlePHP\template\register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_65dc9cbf758964_75646308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c9389bdac23a7fc55a1c176b30feb81921b22892' => 
    array (
      0 => 'C:\\laragon\\www\\controlePHP\\template\\register.tpl',
      1 => 1708956858,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_65dc9cbf758964_75646308 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="register-container">
        <form action="?route=register" method="POST" enctype="multipart/form-data">
            <h2>Inscription</h2>
            <label for="username">Email:</label>
            <input type="email" id="username" name="username" required>

            <label for="password">Mot de passe:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm-password">Confirmer mot de passe:</label>
            <input type="password" id="confirm-password" name="confirm-password" required>

            <button type="submit">Inscription</button>
            <a href="?route=login" class="button">Se connecter</a>
        </form>
    </div>
</body>
</html>
<?php }
}
