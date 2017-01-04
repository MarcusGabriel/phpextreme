<?php

	error_reporting(E_ALL);
	set_include_path("lib/".PATH_SEPARATOR."lib/Livraria/".PATH_SEPARATOR."config/".PATH_SEPARATOR.get_include_path());

	session_start();

	require_once "loader.php";
	require_once "config.php";
	require_once "smarty.php";
	
