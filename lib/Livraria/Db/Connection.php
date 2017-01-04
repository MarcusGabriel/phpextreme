<?php


class Livraria_Db_Connection{
	public static function factory($config){
		switch($config['adapter']){
			case "mysql" :
				return Livraria_Db_Adapter_Mysql::getConnection($config);
				break;
		}		
	}
}

