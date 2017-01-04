<?php

$auth = Livraria_Auth::getInstance();
if(!$auth->isLogged()) {
        header("location: auth.php");
        exit;
}