<?php

	require_once 'config/index.php';
	require_once 'config/checkAuth.php';
        
	if(!isset($_REQUEST['delete']))
		$_REQUEST['delete'] = -1;
	if(!isset($_REQUEST['edit']))
		$_REQUEST['edit'] = -1;
	
	if($_REQUEST['edit']>0){
		$produto = new Livraria_Produto();
		$produto->setId($_REQUEST['edit']);		
		$smarty->assign('produto', $produto->find());	
	}
	
	if($_REQUEST['edit']==0){
		$produto = new Livraria_Produto();
		$smarty->assign('produto', '');
	}
	//deletar
	if($_REQUEST['delete']>0){
		$produto = new Livraria_Produto();
		$produto->setId($_REQUEST['delete']);
		$produto->delete();
		
	}
	
	//salvar
	if(isset($_REQUEST['salvar'])){
		$produto = new Livraria_Produto($_REQUEST['data']);
		if($_REQUEST['id']>0)
			$produto->setId($_REQUEST['id']);
		if($produto->save()){
			$destino = "images/produtos/".$produto->getId().".jpg";
			if(move_uploaded_file($_FILES['file']['tmp_name'], $destino))
				echo "<script>window.alert('Arquivo enviado');</script>";
		}
		
		
		$_REQUEST['edit']=-1;

	}
	
	
	//Listar
	$categorias = new Livraria_Categoria();
	$smarty->assign('categorias', $categorias->fetchAll());
	$produtos = new Livraria_Produto();
	$smarty->assign('produtos', $produtos->fetchAll());
	$smarty->assign("edit",$_REQUEST['edit']);

	//display
        $smarty->assign("logado", $auth->isLogged());
	$smarty->assign("content","admin/produtos.phtml");
	$smarty->display("admin/layout.phtml");
