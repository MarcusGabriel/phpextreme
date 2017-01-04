<?php

require_once 'config/index.php';

$auth = Livraria_Auth::getInstance();

$auth->logout();

header("location: auth.php");

