<?php

class Livraria_Auth_Adapter_Db extends Livraria_Auth_Adapter_Abstract{
    
    
    private $db_user = null;
    private $db_password = null;
    private $table = null;
    private $db = null;
    
    function getDb_user() {
        return $this->db_user;
    }

    function getDb_password() {
        return $this->db_password;
    }

    function getTable() {
        return $this->table;
    }

    function getDb() {
        return $this->db;
    }

    function setDb_user($db_user) {
        $this->db_user = $db_user;
    }

    function setDb_password($db_password) {
        $this->db_password = $db_password;
    }

    function setTable($table) {
        $this->table = $table;
    }

    function setDb($db) {
        $this->db = $db;
    }

        
    public function autenticate() {
        $stmt = $this->db->prepare("select * from $this->table where "
                . "$this->db_user=:user and $this->db_password=:password");
        $stmt->bindValue(":user", $this->user);
        $stmt->bindValue(":password", $this->password);        
        $stmt->execute();
        
        $res = $stmt->fetch(PDO::FETCH_ASSOC);
        
        if(count($res) > 1){
            return true;
        }else{
            return false;
        }
    }
}