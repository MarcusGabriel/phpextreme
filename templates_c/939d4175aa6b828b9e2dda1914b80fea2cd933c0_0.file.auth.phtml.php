<?php
/* Smarty version 3.1.31, created on 2017-01-02 14:59:01
  from "/var/www/html/phpextreme/templates/admin/auth.phtml" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_586aa2f51612c3_29789593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '939d4175aa6b828b9e2dda1914b80fea2cd933c0' => 
    array (
      0 => '/var/www/html/phpextreme/templates/admin/auth.phtml',
      1 => 1483383540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_586aa2f51612c3_29789593 (Smarty_Internal_Template $_smarty_tpl) {
?>

<h3>Autenticação</h3>
<br>
<form method="post">
    <label>Email <input autocomplete="off" type="text" name="data[email]" value=""></label>
    <label>Senha <input type="password" name="data[password]" value=""></label>
    <label><input type="submit" name="submit" value="Autenticar"></label>
    
    
</form><?php }
}
