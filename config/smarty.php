<?php

	require_once 'Smarty/libs/Smarty.class.php';

	
	$smarty = new Smarty();
	$smarty->template_dir = "templates";
	$smarty->compile_dir = "templates_c";
	$smarty->cache_dir = "cache";
	$smarty->config_dir = "configs";
	

