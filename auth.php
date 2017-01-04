<?php

    require_once 'config/index.php'; 
    if(isset($_REQUEST['submit'])){
        
    }
    $smarty->assign("content", "admin/auth.phtml");
    $smarty->display("admin/layout.phtml");