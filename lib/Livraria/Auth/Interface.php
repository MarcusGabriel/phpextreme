<?php

interface Livraria_Auth_Interface {
    
    public function write(Livraria_Auth_Adapter_Abstract $adapter);
    public function isLogged();
    public function logout();
}
