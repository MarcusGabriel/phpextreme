<?php

abstract class Livraria_Auth_Adapter_Abstract {
    protected $user = null;
    protected $password = null;
    
    function getUser() {
        return $this->user;
    }

    function getPassword() {
        return $this->password;
    }

    function setUser($user) {
        $this->user = $user;
    }

    function setPassword($password) {
        $this->password = $password;
    }

        
    abstract public function autenticate();
    
}
