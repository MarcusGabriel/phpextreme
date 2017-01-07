<?php

require_once 'config/index.php';
require_once 'config/checkAuth.php';

//LISTAR
$pedido = new Livraria_Pedido();
$pedidos = $pedido->fetchAll();
$smarty->assign('pedidos', $pedidos);

$smarty->assign("logado", $auth->isLogged());
//$smarty->assign("user",$auth->getUser());
$smarty->assign("content","admin/pedidos.phtml");
$smarty->display("admin/layout.phtml");