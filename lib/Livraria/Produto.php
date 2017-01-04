<?php

class Livraria_Produto extends Livraria_Db_Abstract {

	protected $_table = "produtos";
	
	private $categoria_id = null;
    private $nome = null;
    private $autor = null;
    private $editora = null;
    private $descricao = null;
    private $valor = null;

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCategoria_id() {
        return $this->categoria_id;
    }

    public function setCategoria_id($categoria_id) {
        $this->categoria_id = $categoria_id;
    }

    public function getAutor() {
        return $this->autor;
    }

    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getEditora() {
        return $this->editora;
    }

    public function setEditora($editora) {
        $this->editora = $editora;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function getValor() {
        return $this->valor;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

	
	protected function _insert(){
		$db = $this->getDb();
		$stmt = $db->prepare("insert into ".$this->_table." values(null,:categoria_id,:nome,:autor,:editora,:descricao,:valor)");
		$stmt->bindValue(":categoria_id", $this->getCategoria_id());
		$stmt->bindValue(":nome", $this->getNome());
		$stmt->bindValue(":autor", $this->getAutor());
		$stmt->bindValue(":editora", $this->getEditora());
		$stmt->bindValue(":descricao", $this->getDescricao());
		$stmt->bindValue(":valor", $this->getValor());
		
		return $stmt->execute();
	}

	protected function _update(){
		$db = $this->getDb();
		$stmt = $db->prepare("update ".$this->_table." set categoria_id=:categoria_id, nome=:nome, autor=:autor, editora=:editora, descricao=:descricao, valor=:valor where id=:id");
	 	$stmt->bindValue(":id", $this->getId());
	 	$stmt->bindValue(":categoria_id", $this->getCategoria_id());
	 	$stmt->bindValue(":nome", $this->getNome());
	 	$stmt->bindValue(":autor", $this->getAutor());
	 	$stmt->bindValue(":editora", $this->getEditora());
	 	$stmt->bindValue(":descricao", $this->getDescricao());
	 	$stmt->bindValue(":valor", $this->getValor());
		
		return $stmt->execute();	 	
	}
}
