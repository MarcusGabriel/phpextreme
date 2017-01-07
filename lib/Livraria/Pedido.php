<?php

    class Livraria_Pedido extends Livraria_Db_Abstract{
        
        
        protected $_table = "pedidos";
        private $produto_id = null;
        private $valor = null;
        private $nome = null;
        private $email = null;
        private $status = null;
        private $transacao = null;
        
        function getNome() {
            return $this->nome;
        }

        function setNome($nome) {
            $this->nome = $nome;
        }

                function get_table() {
            return $this->_table;
        }

        function getProduto_id() {
            return $this->produto_id;
        }

        function getValor() {
            return $this->valor;
        }

        function getEmail() {
            return $this->email;
        }

        function getStatus() {
            return $this->status;
        }

        function getTransacao() {
            return $this->transacao;
        }

        function set_table($_table) {
            $this->_table = $_table;
        }

        function setProduto_id($produto_id) {
            $this->produto_id = $produto_id;
        }

        function setValor($valor) {
            $this->valor = $valor;
        }

        function setEmail($email) {
            $this->email = $email;
        }

        function setStatus($status) {
            $this->status = $status;
        }

        function setTransacao($transacao) {
            $this->transacao = $transacao;
        }

                
        protected function _insert() {
            try {            
                $stmt = $this->getDb()->prepare("INSERT INTO ".$this->_table." VALUES(null,:produto_id,:valor,:nome,:email,:status,:transacao)");
                $stmt->bindValue(":produto_id", $this->getProduto_id());
                $stmt->bindValue(":valor", $this->getValor());
                $stmt->bindValue(":nome", $this->getNome());
                $stmt->bindValue(":email", $this->getEmail());
                $stmt->bindValue(":status", $this->getStatus());
                $stmt->bindValue(":transacao", $this->getTransacao());

                $stmt->execute();
                return true;
            } catch (PDOException $exc) {
                return false;
                //echo $exc->getMessage();
            }
            
        }

        protected function _update() {
            try {
                $db = $this->getDb();
                $stmt = $db->prepare('update ' . $this->_table .
                                    ' set status=:status, transacao=:transacao where id=:id');
                $stmt->bindValue(':id', $this->getId());
                $stmt->bindValue(':status', $this->getStatus());
                $stmt->bindValue(':transacao', $this->getTransacao());
                $stmt->execute();
                return true;
            } catch (PDOException $ex) {
                return false;
            }
        }
        
        public function fetchAll() {
            $stmt = $this->getDb()->prepare("select * from ".$this->_table);
            $stmt->execute();
            
            $rs = $stmt->fetchAll(PDO::FETCH_ASSOC);
            
            $i = 0;
            foreach ($rs as $r) {
                if($r['produto_id']){
                    $produto = new Livraria_Produto();
                    $produto->setId($r['produto_id']);
                    $p = $produto->find();
                    $rs[$i]['produto'] = $p['nome'];                    
                }
                $i++;
            }
            return $rs;
        }

}