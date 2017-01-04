<?php
	
	function __autoload($class_name){
		$class_name = str_replace("_", "/", $class_name).".php";
		@include ($class_name);
	}
	
	spl_autoload_register('__autoload');
