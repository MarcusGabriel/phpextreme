<?php
/* Smarty version 3.1.31, created on 2016-12-30 19:06:02
  from "/var/www/html/phpextreme/templates/admin/layout.phtml" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5866e85a0061b5_02077712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ecfb5683eb0f59797bcfe6ea826ad49ef00b0f3' => 
    array (
      0 => '/var/www/html/phpextreme/templates/admin/layout.phtml',
      1 => 1483139161,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5866e85a0061b5_02077712 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
    <head>
        <title>Livraria School of Net</title>
        <meta http-equiv="Content-type" content="text/html;charset=utf-8" >
        <link rel="stylesheet" type="text/css" href="styles/style.css">
        <link rel="stylesheet" type="text/css" href="styles/form.css">
        <link rel="stylesheet" type="text/css" href="styles/frontend.css">
        <!--<link rel="stylesheet" type="text/css" href="styles/bootstrap.min.css">-->
    </head>

    <body>

        <div id="barrinha"></div>
        <div id="estrutura">


            <div id="topo">
                <h1>Livraria SON</h1>
                <h2>Sistema administrativo</h2>
            </div>

            <div class="clearfix"></div>

            <div id="barra">
                <div id="menu-horizontal">
                    <ul class="navigation">
                        <li><a href="admin_pedidos.php">Pedidos</a></li>
                        <li><a href="admin_produtos.php">Produtos</a></li>
                        <li class="active"><a href="admin_categorias.php">Categorias</a></li>
                        <li><a href="logout.php">Sair</a></li>
                    </ul>
                </div>
            </div>

            <div class="clearfix"></div>


            <div id="content">
									<?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['content']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

									
									
                <div class="clearfix"></div>
            </div>

            <div class="clearfix"></div>

        </div>
        <div id="footer">
            <p>Livraria SON - Todos os direitos reservados</p></div>
    </body>
</html>
<?php }
}
