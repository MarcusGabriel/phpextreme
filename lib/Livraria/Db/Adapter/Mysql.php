<?php

class Livraria_Db_Adapter_Mysql implements Livraria_Db_Adapter_Interface {
	private static $instance;
		
	public static function getConnection($config){
		if(!isset(self::$instance)){
			$dsn = $config['adapter'].":host=".$config['hostname'].";dbname=".$config['dbname'];
			try{
				self::$instance = new PDO($dsn,$config['user'],$config['password']);
				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);			
			}catch(PDOException $e){
				die($e->getMessage());
			}
		}
		return self::$instance;	
	}
}
