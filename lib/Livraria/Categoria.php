<?php


class Livraria_Categoria extends Livraria_Db_Abstract{
	
	protected $_table = "categorias";
	private $nome = null;
	
	public function getNome(){
		return $this->nome;
	}
	public function setNome($nome){
		$this->nome = $nome;
	}
	
	protected function _insert(){
		$db = $this->getDb();
		$stmt = $db->prepare('insert into '.$this->_table.' values(null,:nome)');
		$stmt->bindValue(':nome',$this->getNome());
		$stmt->execute();
	}
	
	protected function _update(){
		$db = $this->getDb();
		$stmt = $db->prepare('update '.$this->_table.' set nome=:nome where id=:id');
		$stmt->bindValue(':nome',$this->getNome());
		$stmt->bindValue(':id',$this->getId());
		$stmt->execute();
	}
	
	
}
