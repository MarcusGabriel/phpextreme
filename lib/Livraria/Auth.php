<?php

class Livraria_Auth implements Livraria_Auth_Interface {

    private static $instance;

    public static function getInstance() {
        if (!isset(self::$instance)) {
            self::$instance = new Livraria_Auth();
        }
        return self::$instance;
    }

    public function write(Livraria_Auth_Adapter_Abstract $adapter) {
        if ($adapter->autenticate()) {
            $_SESSION['Livraria_Auth']['auth'] = true;
            $_SESSION['Livraria_Auth']['user'] = $adapter->getUser();
            return true;
        }
        else
            return false;
    }

    public function isLogged() {
        if (isset($_SESSION['Livraria_Auth']['auth']))
            return true;
        else
            return false;
    }

    public function logout() {
        unset($_SESSION['Livraria_Auth']['auth']);
        unset($_SESSION['Livraria_Auth']['user']);
      
    }

}