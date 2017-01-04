<?php

abstract class Livraria_Db_Abstract {

	protected $id = null;
	protected $_table = null;
	
	
	abstract protected function _insert();
	
	abstract protected function _update();
	
	public function __construct(array $options = null) {

		if (count($options))			
			$this->setOptions($options);
	}
	public function setOptions(array $options){
		$methods = get_class_methods($this);
		foreach($options as $key => $value){
			$method = 'set' . ucfirst($key);
			if(in_array($method, $methods))
				$this->$method($value);
		}
		return $this;
	}
	public function getId(){
		return $this->id;
	}
	
	public function setId($id){
		if(!is_null($this->id))
			throw new Excpetion("O Id não pode ser alterado");
		$this->id = (int) $id;
		return $this;
	}
	
	public function save(){
		if(is_null($this->getId())){
			$res = $this->_insert();
			if($res){
				$this->setId($this->getDb()->lastInsertId());
				return $this->getId();
			}
		}else
			return $this->_update();
	}		
	
	public function fetchAll(){
		try{
			$db = $this->getDb();
			$stmt = $db->prepare("SELECT * FROM ". $this->_table);
			$stmt->execute();
			//print_r($stmt);
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}catch(PDOException $e){
			print_r($e->getMessage());
		}
	}
	
	public function find(){
		$db = $this->getDb();
		$stmt = $db->prepare("SELECT * FROM ".$this->_table." WHERE id=:id");
		$stmt->bindValue(":id",$this->getId());
		$stmt->execute();
		return $stmt->fetch(PDO::FETCH_ASSOC);
	}
	
	public function delete(){
		try{
			$db = $this->getDb();
			$stmt = $db->prepare("delete from ".$this->_table." where id=:id");
			$stmt->bindValue(":id",$this->getId());
			return $stmt->execute();		
		}catch(PDOException $e){
			die($e->getMessage());
		}
	}
	
	public function getDb(){
		global $config;
		return Livraria_Db_Connection::factory($config);
	}
}
